<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Buku</title>
    <!-- Link Google Font (Poppins) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #E3F2FD; /* Light Blue */
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

        .card {
            background: #FFFFFF;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: auto;
        }

        .card-header {
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            color: #0288D1; /* Deep Blue */
            margin-bottom: 20px;
        }

        .btn {
            border-radius: 10px;
            padding: 10px 15px;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: capitalize;
            cursor: pointer;
        }

        .btn-success {
            background-color: #0288D1; /* Deep Blue */
            border: none;
            color: white;
        }

        .btn-success:hover {
            background-color: #0277BD; /* Darker Blue */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #FFFFFF; /* White */
        }

        table th, table td {
            border: 1px solid #BBDEFB; /* Light Blue Border */
            text-align: center;
            padding: 10px;
        }

        table th {
            background-color: #0288D1; /* Deep Blue */
            color: white;
            font-size: 1.2rem;
        }

        table tr:nth-child(even) {
            background-color: #E3F2FD; /* Light Blue Alternate Row */
        }

        .table-title {
            margin-bottom: 10px;
            color: #0288D1;
            font-weight: bold;
            text-align: center;
        }

        .card-body {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 15px;
        }

        img {
            max-width: 100px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="card">
            <div class="card-header">
                Informasi Buku
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success" onclick="window.location.href='<?=base_url('home/tambahbuku')?>'">Tambah</button>

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($bukuData as $key => $buku) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $buku->judul ?></td>
                            <td><?= $buku->penulis ?></td>
                            <td><?= $buku->tahun_terbit ?></td>
                            <td><?= $buku->kategori ?></td>
                            <td><?= $buku->deskripsi ?></td>
                            <td>
                                <?php if ($buku->foto) { ?>
                                    <img src="<?= base_url('images/'.$buku->foto) ?>" alt="Foto Buku">
                                <?php } else { ?>
                                    <span>No image</span>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?= base_url('home/editbuku/'.$buku->id_buku) ?>">
                                    <button class="btn btn-success">Edit</button>
                                </a>
                                <a href="<?= base_url('home/hapusbuku/'.$buku->id_buku) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                    <button class="btn btn-danger" style="background-color: #D32F2F; color: white;">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
