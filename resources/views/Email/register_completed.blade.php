<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background-color: #f9f9f9; }
        .wrapper { width: 100%; padding: 20px 0; }
        .container { width: 100%; max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; }
        .success-header { background-color: #28a745; color: #ffffff; padding: 40px 20px; text-align: center; }
        .success-icon { font-size: 50px; margin-bottom: 10px; }
        .content { padding: 30px; }
        .reg-box { background-color: #f8f9fa; border: 1px dashed #28a745; padding: 20px; border-radius: 5px; margin: 20px 0; }
        .credential-item { margin-bottom: 10px; font-size: 15px; }
        .credential-item strong { color: #28a745; }
        .footer { background: #333; color: #ffffff; padding: 20px; text-align: center; font-size: 12px; }
        .button { background-color: #28a745; color: white !important; padding: 12px 25px; text-decoration: none; border-radius: 4px; font-weight: bold; display: inline-block; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="success-header">
                <div class="success-icon">✓</div>
                <h1>Registration Successful!</h1>
            </div>
            <div class="content">
                <p>Hello <strong>{{ $data['name'] }}</strong>,</p>
                <p>Thank you for registering for <strong>Admission Test 2026</strong>. Your application has been successfully submitted and recorded in our system.</p>
                <div class="reg-box">
                    {{-- <div class="credential-item"><strong>Application No:</strong> #[APP-998877]</div> --}}
                    <div class="credential-item"><strong>Registered Email:</strong>{{ $data['email'] }} </div>
                    <div class="credential-item"><strong>Password (DOB):</strong>{{ $data['password'] }} </div>
                </div>
                <h3>What’s Next?</h3>
                <ul>
                    <li>Your application is currently under review.</li>
                    <li>You will receive another email once your <strong>Admit Card</strong> is ready for download.</li>
                    <li>You can log in anytime to check your application status using the link below.</li>
                </ul>
                <div style="text-align: center; margin-top: 30px;">
                    <a href="{{ env('APP_URL') }}/student/login" class="button">Visit Candidate Portal</a>
                </div>
            </div>
            <div class="footer">
                <p>Please keep this email for your future records.</p>
                <p>&copy; 2025 Crystal Career Institute. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>