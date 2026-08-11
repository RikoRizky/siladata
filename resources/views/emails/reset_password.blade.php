<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atur Ulang Sandi - SILADATA</title>
</head>
<body style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7fa; color: #333333; line-height: 1.6; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f7fa; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); overflow: hidden; margin: 0 auto; text-align: left;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #007bff; padding: 30px 40px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: bold; letter-spacing: 1px;">SILADATA</h1>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <h2 style="color: #2c3e50; margin-top: 0; margin-bottom: 20px; font-size: 22px;">Permintaan Atur Ulang Sandi 🔒</h2>
                            
                            <p style="font-size: 16px; margin-bottom: 15px;">Halo <strong>{{ $notifiable->name }}</strong>,</p>
                            
                            <p style="font-size: 16px; margin-bottom: 25px;">Anda menerima email ini karena kami menerima permintaan atur ulang sandi (reset password) untuk akun Anda.</p>
                            
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{ $url }}" style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">Atur Ulang Sandi</a>
                            </div>
                            
                            <p style="font-size: 16px; margin-bottom: 25px;">Tautan atur ulang sandi ini akan kedaluwarsa dalam {{ config('auth.passwords.'.config('auth.defaults.passwords').'.expire') }} menit.</p>
                            
                            <p style="font-size: 16px; margin-bottom: 30px;">Jika Anda tidak melakukan permintaan atur ulang sandi, tidak ada tindakan lebih lanjut yang perlu dilakukan dan akun Anda tetap aman.</p>
                            
                            <p style="font-size: 16px; margin-top: 30px; margin-bottom: 5px;">Terima kasih telah menggunakan SILADATA.</p>
                            <p style="font-size: 16px; color: #777; margin-top: 0;">Salam hangat,<br><strong>Tim SILADATA</strong></p>
                            
                            <hr style="border: 0; border-top: 1px solid #eeeeee; margin: 30px 0;">
                            
                            <p style="font-size: 12px; color: #999999; word-break: break-all;">
                                Jika Anda mengalami kesulitan saat mengklik tombol "Atur Ulang Sandi", salin dan tempel URL di bawah ini ke peramban (browser) Anda:<br>
                                <a href="{{ $url }}" style="color: #007bff;">{{ $url }}</a>
                            </p>
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 25px 40px; text-align: center; border-top: 1px solid #eeeeee;">
                            <p style="margin: 0; font-size: 14px; color: #666666;">
                                Jika Anda memerlukan bantuan atau memiliki pertanyaan, jangan ragu untuk menghubungi kami di 
                                <br>
                                <a href="mailto:siladata.official@gmail.com" style="color: #007bff; text-decoration: none; font-weight: bold;">siladata.official@gmail.com</a>
                            </p>
                        </td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
