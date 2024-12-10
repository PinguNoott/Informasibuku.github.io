<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <style>
        /* Styling untuk keseluruhan body */
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #E3F2FD;
            margin: 0;
            padding: 0;
            color: #333;
            overflow-y: scroll; /* Memungkinkan halaman untuk scroll */
        }

        /* Kontainer utama untuk detail */
        .content {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            overflow-y: auto; /* Agar konten bisa scroll */
            text-align: center;
        }

        /* Styling untuk gambar */
        .img-container {
            margin-bottom: 20px;
        }

        .img-container img {
            max-width: 40%; /* Menyesuaikan gambar agar lebih kecil */
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .img-container img:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        /* Styling untuk informasi detail */
        .detail-info {
            font-size: 1.3rem;
            line-height: 1.8;
            margin: 15px 0;
            color: #444;
        }

        .detail-info p {
            margin-bottom: 15px;
        }

        /* Styling untuk heading dan label */
        .detail-info strong {
            color: #FF4081; /* Warna teks untuk heading */
            font-size: 1.5rem;
        }

        /* Tombol Kembali */
        .btn {
            background-color: #FF4081;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 25px;
            font-size: 1.2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #E91E63;
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        /* Kawaii dekorasi */
        .kawaii-decor {
            text-align: center;
            margin-top: 25px;
            font-size: 2.5rem;
            color: #FF4081;
        }

        .kawaii-decor img {
            width: 35px;
            margin: 0 12px;
            vertical-align: middle;
        }

        .heart {
            color: red;
            font-size: 1.8rem;
            margin-right: 10px;
        }

    </style>
</head>
<body>
    <div class="content">
        <div class="img-container">
            <?php if ($bukuData->foto): ?>
                <img src="<?= base_url('images/' . $bukuData->foto) ?>" alt="Foto Buku">
            <?php else: ?>
                <span>No image available</span>
            <?php endif; ?>
        </div>

        <div class="detail-info">
            <p><strong>Judul:</strong> <?= $bukuData->judul ?></p>
            <p><strong>Penulis:</strong> <?= $bukuData->penulis ?></p>
            <p><strong>Tahun Terbit:</strong> <?= $bukuData->tahun_terbit ?></p>
            <p><strong>Kategori:</strong> <?= $bukuData->kategori ?></p>
            <p><strong>Deskripsi:</strong> <?= $bukuData->deskripsi ?></p>
        </div>

        <!-- Kawaii dekorasi -->
        <div class="kawaii-decor">
            <span class="heart">❤️</span>
            <span>📚</span>
            <span class="heart">❤️</span>
        </div>

        <!-- Tombol kembali -->
        <a href="<?= base_url('home/dashboard') ?>" class="btn">Kembali</a>
    </div>
</body>
</html>
