<?php

namespace Tests\Feature;

use App\Mail\ContactAdminNotification;
use App\Mail\ContactAutoReply;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_rejects_an_empty_submission_with_validation_errors(): void
    {
        $response = $this->from('/#contact')->post('/contact', []);

        $response->assertRedirect('/#contact');
        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
        $this->assertDatabaseCount('contacts', 0);
    }

    public function test_it_saves_the_inquiry_and_sends_admin_notification_and_auto_reply_on_valid_submission(): void
    {
        Mail::fake();

        $response = $this->post('/contact', [
            'name' => 'Taro Yamada',
            'email' => 'taro@example.com',
            'subject' => 'テスト件名',
            'message' => 'テストメッセージです。',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_success', true);

        $this->assertDatabaseHas('contacts', [
            'name' => 'Taro Yamada',
            'email' => 'taro@example.com',
            'subject' => 'テスト件名',
            'message' => 'テストメッセージです。',
        ]);

        Mail::assertSent(ContactAdminNotification::class, function ($mail) {
            return $mail->hasTo(config('mail.from.address'))
                && $mail->data['email'] === 'taro@example.com';
        });

        Mail::assertSent(ContactAutoReply::class, function ($mail) {
            return $mail->hasTo('taro@example.com');
        });
    }

    public function test_it_reports_an_error_and_does_not_save_the_inquiry_if_mail_sending_fails(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP unavailable'));

        $response = $this->post('/contact', [
            'name' => 'Hanako Sato',
            'email' => 'hanako@example.com',
            'subject' => 'テスト件名2',
            'message' => 'テストメッセージ2です。',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_error', true);

        $this->assertDatabaseMissing('contacts', [
            'email' => 'hanako@example.com',
        ]);
    }

    public function test_it_still_sends_mail_and_reports_success_even_if_db_save_fails(): void
    {
        Mail::fake();

        // 本番でDBが未設定・接続不可の状況を、テーブル欠如による保存失敗で再現する。
        Schema::dropIfExists('contacts');

        $response = $this->post('/contact', [
            'name' => 'Jiro Suzuki',
            'email' => 'jiro@example.com',
            'subject' => 'テスト件名3',
            'message' => 'テストメッセージ3です。',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_success', true);

        Mail::assertSent(ContactAdminNotification::class);
        Mail::assertSent(ContactAutoReply::class);
    }
}
