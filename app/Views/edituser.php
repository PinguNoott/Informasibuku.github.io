<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
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
        <h2>Form Edit User</h2>
        <form action="<?= base_url('home/aksi_e_user') ?>" method="post">
            <label for="nama">Username</label>
            <input type="text" id="nama" name="nama" value="<?=$a->username?>" required>

          <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?=$a->email?>" required>

            <label for="pass">Password</label>
            <input type="text" id="pass" name="pass" value="<?=$a->password?>" required>

<select name="level" id="level" required>
    <option value="1" <?= $a->level == 1 ? 'selected' : '' ?>>User</option>
    <option value="0" <?= $a->level == 0 ? 'selected' : '' ?>>Admin</option>
</select>


            <button type="submit" input type="hidden" name="id" value="<?=$a->id_user?>">
Submit</button>
        </form>
        <div class="form-footer">
            <a href="<?= base_url('home/user') ?>">Kembali</a>
        </div>
    </div>
</body>
</html>