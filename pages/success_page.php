<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Disimpan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ecf0f1;
            padding-top: 100px;
        }

        .container {
            text-align: center;
        }

        .alert-success {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
        }

        .alert-success img {
            display: block;
            margin: 0 auto;
        }

        .alert-success .message {
            margin-top: 10px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container .btn {
            width: 30%;
        }

        .announcement {
            background-color: rgba(200, 200, 200, 0.7);
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <img src="../image/success_image.png" alt="Success" style="width: 150px; height: 150px;">
            Selamat Anda Sudah Terdaftar !
        </div>

        <div class="btn-container">
            <a href="../users/index.php" class="btn btn-primary btn-lg">OK</a>
        </div>

        <div class="announcement">
            <h4>Informasi Penting</h4>
            <p>Proses verifikasi dan validasi data akan dilakukan dalam waktu 1-2 hari kerja. Pastikan Anda memantau email dan nomor handphone yang telah terdaftar untuk mendapatkan informasi lebih lanjut.</p>
        </div>
    </div>
</body>

</html>