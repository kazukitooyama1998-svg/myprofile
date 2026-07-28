<?php

namespace App\Http\Controllers;

use App\Mail\ContactAdminNotification;
use App\Mail\ContactAutoReply;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ], [
            'name.required' => 'お名前を入力してください。',
            'name.max' => 'お名前は100文字以内で入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'subject.required' => '件名を入力してください。',
            'subject.max' => '件名は150文字以内で入力してください。',
            'message.required' => 'メッセージを入力してください。',
            'message.max' => 'メッセージは2000文字以内で入力してください。',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        // メール送信を主役の処理とする。ここで失敗した場合のみ、
        // 訪問者にエラーとして案内する。
        try {
            Mail::to(config('mail.from.address'))->send(new ContactAdminNotification($data));
            Mail::to($data['email'])->send(new ContactAutoReply($data['name']));
        } catch (\Throwable $e) {
            report($e);

            return redirect('/#contact')
                ->with('contact_error', true)
                ->withInput();
        }

        // DB保存は「使えるなら使う・使えなければ静かにスキップする」任意の機能。
        // 本番でDBが未設定・接続不可でも、メール送信さえ成功すれば問い合わせは完了とする。
        try {
            Contact::create($data);
        } catch (\Throwable $e) {
            report($e);
        }

        return redirect('/#contact')->with('contact_success', true);
    }
}
