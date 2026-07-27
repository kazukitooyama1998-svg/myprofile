<?php

namespace Tests\Feature;

use App\Mail\ContactAdminNotification;
use App\Mail\ContactAutoReply;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
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

    public function test_it_still_saves_the_inquiry_and_reports_success_even_if_mail_sending_fails(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP unavailable'));

        $response = $this->post('/contact', [
            'name' => 'Hanako Sato',
            'email' => 'hanako@example.com',
            'subject' => 'テスト件名2',
            'message' => 'テストメッセージ2です。',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_success', true);

        $this->assertDatabaseHas('contacts', [
            'email' => 'hanako@example.com',
        ]);
    }
}
