<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);
            background-image: url('https://www.transparenttextures.com/patterns/black-linen.png');
            color: #fff;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .card {
            background: rgba(31, 28, 44, 0.85);
            border: none;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(10px);
            text-align: center;
            max-width: 500px;
            width: 100%;
            margin: 20px;
        }

        .card h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .btn-custom {
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: background 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;
            margin: 10px;
            display: inline-block;
            width: calc(100% - 20px);
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary-custom {
            background: #6b5b95;
            color: #fff;
        }

        .btn-primary-custom:hover {
            background: #5b4b85;
        }

        .btn-secondary-custom {
            background: transparent;
            color: #fff;
            border: 2px solid #d64161;
        }

        .btn-secondary-custom:hover {
            background: #d64161;
            color: #fff;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .background .stars {
            background: url('https://www.transparenttextures.com/patterns/stardust.png');
            animation: moveStars 50s linear infinite;
        }

        .background .twinkling {
            background: url('https://www.transparenttextures.com/patterns/tiny-checks.png') repeat top center;
            animation: moveTwinkling 100s linear infinite;
        }

        @keyframes moveStars {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 10000px 10000px;
            }
        }

        @keyframes moveTwinkling {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: -10000px 10000px;
            }
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="stars"></div>
        <div class="twinkling"></div>
    </div>
    <div class="card">
        <h1>Selamat Datang di Dashboard</h1>
        <p class="lead">Pilih tindakan yang ingin Anda lakukan</p>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-custom btn-primary-custom">
                <i class="fas fa-sign-in-alt"></i> Masuk
            </a>
            <a href="{{ route('register') }}" class="btn btn-custom btn-secondary-custom">Daftar</a>
        </div>
        <div class="mt-4">
            <a href="{{ route('web.index') }}" class="btn btn-custom btn-primary-custom">Lihat Halaman Web</a>
            <a href="{{ route('visualisasi.index') }}" class="btn btn-custom btn-secondary-custom">Lihat Halaman
                Visualisasi</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
