<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Tanda Penduduk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .card {
            width: 850px;
            height: 540px;
            padding: 20px;
            border-radius: 10px;
            background-color: #cce5ff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 1px solid #333;
            position: relative;
            background-repeat: no-repeat;
            background-position: center, center;
            background-size: 100px, cover;
            background-blend-mode: lighten;
        }

        h2 {
            text-align: center;
            color: #000;
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
        }

        .subheader {
            text-align: center;
            color: #000;
            margin: 0;
            font-size: 16px;
            text-transform: uppercase;
        }

        p {
            margin: 8px 0;
            font-size: 14px;
            color: #000;
            line-height: 1.2;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 200px;
        }

        .nik {
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
            text-align: center;
        }

        .photo {
            width: 100px;
            height: 130px;
            background-color: #ddd;
            position: absolute;
            top: 120px;
            right: 30px;
            border: 1px solid #333;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Provinsi Jawa Timur</h2>
        <h2 class="subheader">KABUPATEN MALANG</h2>
        <p class="nik">NIK: 3507210702030002</p>
        <p><span class="label">Nama:</span> Daffa Abiyu Aidil Amru</p>
        <p><span class="label">Tempat/Tgl Lahir:</span> MALANG, 07-02-2003</p>
        <p><span class="label">Jenis Kelamin:</span> LAKI-LAKI</p>
        <p><span class="label">Gol. Darah:</span> O</p>
        <p><span class="label">Alamat:</span> JL. Krobyokan Barat No. 24</p>
        <p><span class="label">RT/RW:</span> 002/008</p>
        <p><span class="label">Kel/Desa:</span> JEDONG</p>
        <p><span class="label">Kecamatan:</span> WAGIR</p>
        <p><span class="label">Agama:</span> ISLAM</p>
        <p><span class="label">Status Perkawinan:</span> Belum Kawin</p>
        <p><span class="label">Pekerjaan:</span> Pelajar/Mahasiswa</p>
        <p><span class="label">Kewarganegaraan:</span> WNI</p>
        <p><span class="label">Berlaku Hingga:</span> Seumur Hidup</p>
        <div class="photo"></div>
        <div class="footer">Kabupaten Malang, 31 Desember 2024</div>
    </div>
</body>

</html>
