<?php

namespace Tests\Feature;

use App\Mail\ContactAdminNotification;
use App\Mail\ContactAutoReply;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_it_rejects_an_empty_submission_with_validation_errors(): void
    {
        $response = $this->from('/#contact')->post('/contact', []);

        $response->assertRedirect('/#contact');
        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_it_sends_admin_notification_and_auto_reply_on_valid_submission(): void
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

        Mail::assertSent(ContactAdminNotification::class, function ($mail) {
            return $mail->hasTo(config('mail.from.address'))
                && $mail->data['email'] === 'taro@example.com';
        });

        Mail::assertSent(ContactAutoReply::class, function ($mail) {
            return $mail->hasTo('taro@example.com');
        });
    }
}
