<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
</head>
<body style="font-family: 'Hiragino Kaku Gothic ProN', 'Yu Gothic', sans-serif; color: #4A4038; line-height: 1.8;">
  <p>ポートフォリオサイトのお問い合わせフォームより、新しいメッセージが届きました。</p>

  <table style="width: 100%; border-collapse: collapse; margin: 16px 0;">
    <tr>
      <td style="padding: 8px 12px; background: #FFF8EF; font-weight: bold; width: 120px;">お名前</td>
      <td style="padding: 8px 12px;">{{ $data['name'] }}</td>
    </tr>
    <tr>
      <td style="padding: 8px 12px; background: #FFF8EF; font-weight: bold;">メールアドレス</td>
      <td style="padding: 8px 12px;">{{ $data['email'] }}</td>
    </tr>
    <tr>
      <td style="padding: 8px 12px; background: #FFF8EF; font-weight: bold;">件名</td>
      <td style="padding: 8px 12px;">{{ $data['subject'] }}</td>
    </tr>
  </table>

  <p style="font-weight: bold; margin-bottom: 4px;">メッセージ</p>
  <p style="white-space: pre-line; background: #FFF8EF; padding: 12px 16px; border-radius: 8px;">{{ $data['message'] }}</p>

  <p style="margin-top: 24px; color: #8C8178; font-size: 12px;">このメールに返信すると、送信者（{{ $data['email'] }}）宛に直接返信できます。</p>
</body>
</html>
