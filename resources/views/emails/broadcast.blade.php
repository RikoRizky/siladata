<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $subjectText }}</title>
</head>
<body style="font-family: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f3f4f6; color: #1f2937; line-height: 1.6; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f3f4f6; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); overflow: hidden; margin: 0 auto; text-align: left;">
                    
                    <!-- Top Gradient Bar -->
                    <tr>
                        <td style="height: 6px; background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 100%);"></td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td style="padding: 30px 40px 20px 40px; text-align: center;">
                            <img src="{{ url('images/logoname.png') }}" alt="SILADATA" style="max-height: 45px; width: auto;">
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 10px 40px 40px 40px;">
                            <h2 style="color: #111827; margin-top: 0; margin-bottom: 24px; font-size: 22px; font-weight: 700;">{{ $subjectText }}</h2>
                            
                            <div style="font-size: 16px; margin-bottom: 30px; white-space: pre-wrap; color: #4b5563;">{{ $messageContent }}</div>
                            
                            <div style="border-top: 1px solid #e5e7eb; padding-top: 24px; margin-top: 40px;">
                                <p style="font-size: 15px; margin-bottom: 5px; color: #374151;">Terima kasih telah menggunakan <strong>SILADATA</strong>.</p>
                                <p style="font-size: 15px; color: #6b7280; margin-top: 0;">Salam hangat,<br><strong style="color: #111827;">Tim SILADATA</strong></p>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f9fafb; padding: 24px 40px; text-align: center; border-top: 1px solid #f3f4f6;">
                            <p style="margin: 0; font-size: 13px; color: #6b7280; line-height: 1.5;">
                                Jika Anda memerlukan bantuan atau memiliki pertanyaan, jangan ragu untuk menghubungi kami di 
                                <br>
                                <a href="mailto:siladata.official@gmail.com" style="color: #3b82f6; text-decoration: none; font-weight: 600;">siladata.official@gmail.com</a>
                            </p>
                            <p style="margin: 15px 0 0 0; font-size: 12px; color: #9ca3af;">
                                &copy; {{ date('Y') }} SILADATA. Hak Cipta Dilindungi.
                            </p>
                        </td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
