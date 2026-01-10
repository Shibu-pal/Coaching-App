<!DOCTYPE html>
<html>
<head>
    <title>Admit Card</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 20px; }
        .container { 
            border: 2px solid #ddd; 
            padding: 10px; 
            background-color: #f0f8ff; /* Light blue tint like image */
            position: relative;
        }
        
        /* Top Row */
        .top-bar { width: 100%; margin-bottom: 10px; }
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
        
        /* Form Inputs Simulation */
        .input-line { border-bottom: 1px solid #000; display: inline-block; width: 70%; margin-left: 10px; }
        .checkbox { display: inline-block; width: 15px; height: 15px; border: 1px solid #000; margin-right: 5px; vertical-align: middle; }
        
        /* Side Boxes */
        .photo-box {
            width: 120px;
            height: 140px;
            border: 2px solid #add8e6;
            border-radius: 10px;
            text-align: center;
            color: #ccc;
            margin-bottom: 10px;
        }
        .sign-box {
            width: 120px;
            height: 50px;
            border: 2px solid #add8e6;
            border-radius: 5px;
            text-align: center;
            font-size: 10px;
        }
        
        .logo { width: 80px; }
    </style>
</head>
<body>

<div class="container">
    <table style="width: 100%; margin-bottom: 5px;">
        <tr>
            <td style="width: 20%;"><div class="badge-box" style="border-color: green; color: green;">ADMIT CARD</div></td>
            {{-- <td style="width: 50%; text-align: center;"><span style="background: #5c7c8a; color: white; padding: 3px 10px;">For office use only</span></td> --}}
            <td style="width: 30%; text-align: right;">
                Roll No: <div style="border: 1px solid #000; width: 100px; height: 20px; display: inline-block; vertical-align: bottom;">{{ $roll_no }}</div>
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
                    @if($course == 'neet_freser' || $course == 'neet_repeater') <span style="font-family: 'DejaVu Sans', sans-serif;">&#9745;</span> @else <span style="font-family: 'DejaVu Sans', sans-serif;">&#9744;</span> @endif</span> NEET
                    @if($course == 'xi_science') <span style="font-family: 'DejaVu Sans', sans-serif;">&#9745;</span> @else <span style="font-family: 'DejaVu Sans', sans-serif;">&#9744;</span>@endif</span> XI Sc.
                    @if($course == 'xii_science') <span style="font-family: 'DejaVu Sans', sans-serif;">&#9745;</span> @else <span style="font-family: 'DejaVu Sans', sans-serif;">&#9744;</span> @endif</span> XII Sc.
                    @if($course == 'test_series') <span style="font-family: 'DejaVu Sans', sans-serif;">&#9745;</span> @else <span style="font-family: 'DejaVu Sans', sans-serif;">&#9744;</span> @endif</span> Test Series (NEET)
                </div>

                <div style="margin-bottom: 15px; font-size: 14px;">
                    <strong>1. Name of the Applicant :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 350px;">{{ $name }}</span>
                </div>

                <div style="margin-bottom: 15px; font-size: 14px;">
                    <strong>2. Father's Name :</strong> 
                    <span style="border-bottom: 1px solid black; padding: 0 10px; display: inline-block; width: 400px;">{{ $father_name }}</span>
                </div>
            </td>

            <td style="width: 25%; padding-top: 10px;">
                <div class="photo-box">
                    <img src="{{ $photo }}" alt="student photo" style="max-width: 100%; max-height: 100%; border-radius: 10px;">
                    
                    <div style="font-size: 10px; margin-top: 5px;">Student Photo</div>
                </div>
                <br>
                <div class="sign-box">
                    <img src="{{ public_path('images/signature.jpg') }}" alt="signature" style="max-width: 100%; max-height: 100%;">
                    <div style="font-size: 10px; margin-top: 5px;">Official Signature</div>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>