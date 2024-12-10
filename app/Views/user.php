<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Table</title>
    <!-- Link Google Font (Baloo 2) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">
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
                <div class="table-title">Tabel User</div>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success" onclick="window.location.href='<?=base_url('home/tambahuser')?>'">Tambah</button>

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($desta as $key => $satu) {
                        ?>
                        <tr>
    <td><?= $no++ ?></td>
    <td><?= $satu->username ?></td>
    <td><?= $satu->password ?></td>
    <td><?= $satu->email ?></td>
    <td>
        <?= ($satu->level == 1) ? 'User' : 'Admin' ?>
    </td>

    <td>
        <a href="<?= base_url('home/edituser/'.$satu->id_user) ?>">
            <button class="btn btn-primary">Edit</button>
        </a>
        <a href="<?= base_url('home/hapususer/'.$satu->id_user) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            <button class="btn btn-danger">Hapus</button>
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
