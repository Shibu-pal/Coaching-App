<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card Download</title>
    <style>
        /* General Reset */
        body { font-family: 'Segoe UI', Arial, sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 100%; max-width: 600px; margin: 20px auto; background-color: #ffffff; border: 1px solid #dddddd; border-radius: 8px; overflow: hidden; }
        /* Header */
        .header { background-color: #1a73e8; color: #ffffff; padding: 30px 20px; text-align: center; }
        .header h1 { margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 1px; }
        /* Content Body */
        .content { padding: 30px; }
        .content p { margin-bottom: 15px; }
        /* Details Table */
        .details-table { width: 100%; border-collapse: collapse; margin: 20px 0; background-color: #fafafa; }
        .details-table td { padding: 12px; border-bottom: 1px solid #eeeeee; }
        .details-table td:first-child { font-weight: bold; width: 40%; color: #555555; }
        /* Credential Box */
        .login-box { background-color: #fff9e6; border-left: 5px solid #f39c12; padding: 15px; margin: 25px 0; border-radius: 4px; }
        .login-box h4 { margin: 0 0 10px 0; color: #d35400; font-size: 16px; }
        .login-box ul { margin: 0; padding-left: 20px; font-size: 14px; }
        /* Button */
        .button-container { text-align: center; margin: 30px 0; }
        .button { background-color: #1a73e8; color: #ffffff !important; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        
        /* Footer */
        .footer { background-color: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; color: #777777; border-top: 1px solid #eeeeee; }
        
        /* Mobile adjustment */
        @media only screen and (max-width: 480px) {
            .content { padding: 20px; }
            .header h1 { font-size: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Examination Admit Card</h1>
        </div>

        <div class="content">
            <p>Dear <strong>{{ $student['name'] }}</strong>,</p>
            <p>Your admit card for the <strong>Admission Test 2026</strong> is now ready. Please use the link below to access the download portal.</p>
            
            <table class="details-table">
                <tr>
                    <td>Roll No:</td>
                    <td>{{ $student['roll_no'] }}</td>
                </tr>
                <tr>
                    <td>Exam Date:</td>
                    <td>[Day, Date, Month, 2025]</td>
                </tr>
                <tr>
                    <td>Exam City:</td>
                    <td>[City Name]</td>
                </tr>
            </table>

            <div class="login-box">
                <h4>Login Credentials to Download:</h4>
                <ul>
                    <li><strong>Username:</strong> Your registered Email ID</li>
                    <li><strong>Password:</strong> Your Date of Birth (DDMMYYYY)</li>
                    <li><em>Example: If your DOB is 5th Jan 1998, use 05011998</em></li>
                </ul>
            </div>

            <div class="button-container">
                <a href="{{ env('APP_URL') }}/student/login" class="button">
                    Login & Download Admit Card
                </a>
            </div>
            <p style="font-size: 13px; color: #666;"><strong>Note:</strong> Please ensure you have a color printout of the admit card. Candidates without a valid admit card and original ID proof will not be permitted to enter the examination hall.</p>
        </div>

        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>For technical support, contact <a href="mailto:shibadiptapal@gmail.com">shibadiptapal@gmail.com</a></p>
            <p>&copy; 2025 Crystal Career Institute</p>
        </div>
    </div>
</body>
</html>