<!DOCTYPE html>
<html>
<head>
    <title>Admit Card</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 20px; }
        .container { 
            border: 2px solid #ddd; 
            padding: 20px; 
            background-color: #f0f8ff; 
            position: relative;
        }
        
        /* Top Row */
        .badge-box {
            display: inline-block;
            border: 1px solid #000;
            padding: 5px 10px;
            font-weight: bold;
            background: #fff;
        }
        .header-green { color: #004d40; font-size: 35px; font-weight: bold; margin: 0; }
        .sub-header { background-color: #555; color: #fff; padding: 2px 10px; display: inline-block; font-weight: bold; }
        
        /* Layout Tables */
        table { width: 100%; border-collapse: collapse; }
        td { vertical-align: top; }
        
        .info-text { text-align: center; font-size: 12px; line-height: 1.4; }
        .session-title { text-align: center; font-size: 18px; font-weight: bold; color: #004d40; margin-top: 10px; }
        
        /* Side Boxes */
        .photo-box {
            width: 120px;
            height: 140px;
            border: 2px solid #add8e6;
            border-radius: 10px;
            text-align: center;
            background: #fff;
            overflow: hidden;
        }
        .sign-box {
            width: 120px;
            height: 50px;
            border: 2px solid #add8e6;
            border-radius: 5px;
            text-align: center;
            background: #fff;
        }
        
        .logo { width: 80px; }

        /* Instructions Section */
        .instructions-section {
            margin-top: 30px;
            border-top: 2px dashed #004d40;
            padding-top: 15px;
        }
        .instr-title {
            font-weight: bold;
            text-decoration: underline;
            font-size: 14px;
            color: #004d40;
            display: block;
            margin-bottom: 10px;
        }
        .instr-item {
            font-size: 11px;
            margin-bottom: 6px;
            line-height: 1.4;
            color: #333;
        }
        .instr-label {
            font-weight: bold;
            color: #b71c1c; /* Red for emphasis */
        }
    </style>
</head>
<body>

<div class="container">
    <table style="width: 100%; margin-bottom: 5px;">
        <tr>
            <td style="width: 20%;"><div class="badge-box" style="border-color: green; color: green;">ADMIT CARD</div></td>
            <td style="width: 30%; text-align: right; font-weight: bold;">
                Roll No: <div style="border: 1px solid #000; width: 120px; height: 22px; display: inline-block; vertical-align: bottom; background: #fff; text-align: center;">{{ $roll_no }}</div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="width: 15%;">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="Logo">
            </td>
            <td style="width: 70%; text-align: center;">
                <h1 class="header-green">CRYSTAL <span style="font-size: 20px; color: #000;"> CAREER INSTITUTE</span></h1>
                <div class="sub-header">NEET | JEE | BOARD (XI - XII SCIENCE)</div>
                <div class="info-text">
                    ADD: DHULIAN, DAKBANGLOW (NEAR DDH HOSPITAL), MURSHIDABAD, PIN- 742202<br>
                    Call Us: 9242269090 / 9242769090
                </div>
            </td>
            <td style="width: 15%;"></td>
        </tr>
    </table>

    <div class="session-title">Admission Test For Session {{ $session }}</div>

    <table>
        <tr>
            <td style="width: 75%; padding-top: 20px;">
                <div style="margin-bottom: 15px;">
                    <strong>Applied for:</strong>
                    <span style="font-family: 'DejaVu Sans', sans-serif;">{!! $course == 'neet_freser' || $course == 'neet_repeater' ? '&#9745;' : '&#9744;' !!}</span> NEET
                    <span style="font-family: 'DejaVu Sans', sans-serif;">{!! $course == 'xi_science' ? '&#9745;' : '&#9744;' !!}</span> XI Sc.
                    <span style="font-family: 'DejaVu Sans', sans-serif;">{!! $course == 'xii_science' ? '&#9745;' : '&#9744;' !!}</span> XII Sc.
                    <span style="font-family: 'DejaVu Sans', sans-serif;">{!! $course == 'test_series' ? '&#9745;' : '&#9744;' !!}</span> Test Series
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>1. Name of the Applicant :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 320px;">{{ $name }}</span>
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>2. Father's Name :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 360px;">{{ $father_name }}</span>
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>3. Exam center :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 380px;">{{ $exam_city }}</span>
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>4. Date of examination :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 340px;">01/03/2026</span>
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>5. Reporting Time :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 360px;">9 : 30 AM</span>
                </div>

                <div style="margin-bottom: 12px; font-size: 14px;">
                    <strong>6. Exam Time :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 385px;">10 : 00 AM - 12 : 00 PM</span>
                </div>
            </td>

            <td style="width: 25%; padding-top: 10px; text-align: center;">
                <div class="photo-box">
                    <img src="{{ $photo }}" alt="student photo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="font-size: 10px; margin-top: 2px;">Student Photo</div>
                <br>
                <div class="sign-box">
                    <img src="{{ public_path('images/signature.jpg') }}" alt="signature" style="max-width: 100%; max-height: 100%;">
                </div>
                <div style="font-size: 10px; margin-top: 2px;">Official Signature</div>
            </td>
        </tr>
    </table>

    <div class="instructions-section">
        <span class="instr-title">IMPORTANT INSTRUCTIONS TO CANDIDATES</span>
        
        <div class="instr-item">
            <span class="instr-label">Carry Admit Card:</span> Candidates must carry a printed copy of the Admit Card to the examination center. Entry without a valid Admit Card is strictly prohibited.
        </div>
        
        <div class="instr-item">
            <span class="instr-label">Valid Photo ID Proof:</span> Bring any one original photo ID proof (Aadhar Card / Voter ID / PAN Card / Passport / Driving License).
        </div>
        
        <div class="instr-item">
            <span class="instr-label">Reporting Time:</span> Reach the examination center at least 30–60 minutes before the reporting time mentioned on the Admit Card.
        </div>
        
        <div class="instr-item">
            <span class="instr-label">Late Entry:</span> No candidate will be allowed to enter the examination hall after the gate closing time.
        </div>
        
        <div class="instr-item">
            <span class="instr-label">Prohibited Items:</span> Do not carry mobile phones, smart watches, calculators, Bluetooth devices, electronic gadgets, study materials, or any unfair means material.
        </div>
    </div>
</div>

</body>
</html>