<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FFEBF0; /* Soft pink background */
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff; /* White background for form */
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-container h2 {
            text-align: center;
            color: #FF6F91; /* Kawaii pink color for headings */
            margin-bottom: 20px;
        }

        .profile-container label {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #333333;
        }

        .profile-container input[type="text"],
        .profile-container input[type="email"],
        .profile-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #FFCCE3; /* Light pink border */
            border-radius: 10px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .profile-container input[type="submit"] {
            background-color: #FF6F91; /* Pink button color */
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
        }

        .profile-container input[type="submit"]:hover {
            background-color: #FF5073; /* Darker pink on hover */
        }

        .kawaii-icon {
            display: block;
            margin: 0 auto;
            width: 80px;
            height: 80px;
            background-image: url('https://i.imgur.com/QCBlTgR.png'); /* Example kawaii image */
            background-size: cover;
            background-position: center;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #FF6F91;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="kawaii-icon"></div>
        <h2>Profile</h2>

        <!-- Display success or error messages -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="message"><?= session()->getFlashdata('success'); ?></div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="message" style="color: #FF5073;"><?= session()->getFlashdata('error'); ?></div>
        <?php endif; ?>

        <!-- Form to update profile -->
       <form action="<?= base_url('home/aksi_e_profil') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $a->id_user ?>">

    <label for="nama">Username</label>
    <input type="text" id="nama" name="nama" value="<?= $a->username ?>" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="<?= $a->email ?>" required>

    <label for="pass">Password</label>
    <input type="text" id="pass" name="pass" value="<?= $a->password ?>" required>

    <label for="foto">Profile Photo</label>
    <input type="file" id="foto" name="foto" accept="image/*">

    <button type="submit">Submit</button>
</form>

    </div>
</body>

</html>
