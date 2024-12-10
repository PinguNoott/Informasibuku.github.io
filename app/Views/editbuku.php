<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            margin: 0;
            padding: 0;
            background-color: #E3F2FD; /* Soft blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            box-sizing: border-box;
        }

        .form-container {
            background: #fff;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 550px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #1E88E5;
            margin-bottom: 15px;
            font-size: 18px;
        }

        label {
            font-size: 12px;
            color: #1E88E5;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #1E88E5;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px;
            color: #555;
            background-color: #E3F2FD;
        }

        input[type="text"]::placeholder,
        textarea::placeholder {
            color: #1E88E5;
        }

        textarea {
            resize: vertical;
            min-height: 90px;
        }

        .file-input {
            display: flex;
            align-items: center;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px dashed #1E88E5;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            color: #555;
            background-color: white;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #1E88E5;
            color: white;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #1976D2;
            box-shadow: 0 3px 6px rgba(30, 136, 229, 0.3);
        }

        .form-footer {
            margin-top: 8px;
            text-align: center;
        }

        .form-footer a {
            text-decoration: none;
            color: #1E88E5;
            font-size: 12px;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="<?= base_url('home/aksi_e_buku') ?>" method="post" enctype="multipart/form-data">
            <label for="judul">Judul Buku</label>
            <input type="text" id="judul" name="judul" value="<?=$bukuData->judul?>" placeholder="Masukkan Judul Buku" required>

            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="<?=$bukuData->penulis?>" placeholder="Masukkan Penulis" required>

            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="text" id="tahun_terbit" name="tahun_terbit" value="<?=$bukuData->tahun_terbit?>" placeholder="Masukkan Tahun Terbit" required>

            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" name="kategori" value="<?=$bukuData->kategori?>" placeholder="Masukkan Kategori" required>

            <label for="deskripsi">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" value="<?=$bukuData->deskripsi?>" placeholder="Masukkan Deskripsi" required>

            <label for="foto">Foto (Leave blank if no new photo)</label>
            <input type="file" id="foto" name="foto">

            <button type="submit">Update</button>
            <input type="hidden" name="id" value="<?=$bukuData->id_buku?>">
        </form>
        <div class="form-footer">
            <a href="<?= base_url('home/buku') ?>">Kembali</a>
        </div>
    </div>
</body>
</html>
