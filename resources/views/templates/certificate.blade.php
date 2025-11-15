<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Ujian</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background-color: #6366f1;
            width: 297mm;
            height: 210mm;
            position: relative;
            overflow: hidden;
        }

        /* Background layers */
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #6366f1;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background-color: #7c3aed;
        }

        /* Decorative circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.08);
        }

        .circle-1 {
            width: 350px;
            height: 350px;
            top: -120px;
            left: -100px;
        }

        .circle-2 {
            width: 250px;
            height: 250px;
            bottom: -80px;
            right: -60px;
        }

        .circle-3 {
            width: 180px;
            height: 180px;
            top: 40px;
            right: 120px;
        }

        .border-frame {
            position: absolute;
            top: 5mm;
            left: 5mm;
            right: 5mm;
            bottom: 5mm;
            border: 4px solid #ffffff;
        }

        .border-inner {
            position: absolute;
            top: 8mm;
            left: 8mm;
            right: 8mm;
            bottom: 8mm;
            border: 2px solid #fbbf24;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #ffffff;
            width: 85%;
            z-index: 10;
        }

        .logo {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            background-color: #ffffff;
            border-radius: 20px;
            display: inline-block;
            line-height: 90px;
            font-size: 42px;
            color: #6366f1;
            font-weight: bold;
            border: 3px solid #fbbf24;
        }

        .app-name {
            font-size: 16px;
            margin-bottom: 20px;
            color: #fbbf24;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .certificate-title {
            font-size: 54px;
            font-weight: bold;
            letter-spacing: 8px;
            margin-bottom: 8px;
            text-transform: uppercase;
            color: #ffffff;
        }

        .subtitle {
            font-size: 18px;
            margin-bottom: 25px;
            letter-spacing: 3px;
            color: #fbbf24;
            font-style: italic;
        }

        .divider {
            width: 200px;
            height: 3px;
            background-color: #fbbf24;
            margin: 0 auto 25px;
        }

        .recipient-text {
            font-size: 16px;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .recipient-name {
            font-size: 46px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fbbf24;
            text-decoration: underline;
            text-decoration-color: #fbbf24;
            text-decoration-thickness: 2px;
        }

        .exam-info {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .exam-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #fbbf24;
        }

        .score-section {
            margin: 20px auto;
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.15);
            padding: 15px 40px;
            border-radius: 8px;
            border: 2px solid #fbbf24;
        }

        .score-label {
            font-size: 14px;
            color: #ffffff;
            margin-bottom: 5px;
        }

        .score-value {
            font-size: 36px;
            font-weight: bold;
            color: #fbbf24;
        }

        .date {
            font-size: 14px;
            margin-top: 15px;
            color: #ffffff;
        }

        .footer {
            margin-top: 35px;
            width: 100%;
        }

        .signatures {
            width: 100%;
            margin: 0 auto;
        }

        .signature-block {
            display: inline-block;
            width: 45%;
            text-align: center;
            vertical-align: top;
        }

        .signature-line {
            width: 200px;
            border-top: 2px solid #ffffff;
            margin: 45px auto 8px;
        }

        .signature-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 3px;
            color: #ffffff;
        }

        .signature-title {
            font-size: 13px;
            color: #fbbf24;
        }

        .certificate-number {
            position: absolute;
            bottom: 17mm;
            right: 17mm;
            font-size: 11px;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 5px 10px;
            border-radius: 3px;
        }

        /* Decorative corners */
        .corner {
            position: absolute;
            width: 50px;
            height: 50px;
        }

        .corner-tl {
            top: 15mm;
            left: 15mm;
            border-top: 3px solid #fbbf24;
            border-left: 3px solid #fbbf24;
        }

        .corner-tr {
            top: 15mm;
            right: 15mm;
            border-top: 3px solid #fbbf24;
            border-right: 3px solid #fbbf24;
        }

        .corner-bl {
            bottom: 15mm;
            left: 15mm;
            border-bottom: 3px solid #fbbf24;
            border-left: 3px solid #fbbf24;
        }

        .corner-br {
            bottom: 15mm;
            right: 15mm;
            border-bottom: 3px solid #fbbf24;
            border-right: 3px solid #fbbf24;
        }
    </style>
</head>
<body>
    <!-- Background layers -->
    <div class="bg-pattern"></div>
    <div class="bg-overlay"></div>
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>

    <!-- Borders -->
    <div class="border-frame"></div>
    <div class="border-inner"></div>

    <!-- Decorative corners -->
    <div class="corner corner-tl"></div>
    <div class="corner corner-tr"></div>
    <div class="corner corner-bl"></div>
    <div class="corner corner-br"></div>

    <!-- Main content -->
    <div class="content">
        <div class="app-name">GARUDA PINTAR</div>

        <div class="certificate-title">SERTIFIKAT</div>
        <div class="subtitle">Certificate of Achievement</div>

        <div class="divider"></div>

        <div class="recipient-text">Diberikan Kepada:</div>
        <div class="recipient-name">{{ $name ?? 'Nama Peserta' }}</div>

        <div class="exam-title">{{ $exam_title ?? 'Nama Ujian' }}</div>

        <div class="exam-info">
            {{ $description }}
        </div>

        <div class="score-section">
            <div class="score-value">{{ $score ?? '0' }}</div>
        </div>

        <div class="date">{{ $city ?? 'Jakarta' }}, {{ $date ?? date('d F Y') }}</div>

        <div class="footer">
            <div class="signatures">
                <div class="signature-block">
                    <div class="signature-line"></div>
                    <div class="signature-name">{{ $signature_name ?? 'Nama Pengawas' }}</div>
                    <div class="signature-title">{{ $signature_title ?? 'Pengawas Ujian' }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="certificate-number">
        No. {{ $certificate_number ?? 'CERT/2024/001' }}
    </div>
</body>
</html>
