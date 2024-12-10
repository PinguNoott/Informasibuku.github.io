<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #E3F2FD; /* Light blue background */
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: #FFFFFF; /* White card background */
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .login-container img {
            max-width: 100px;
            margin-bottom: 1rem;
            border-radius: 50%;
            border: 2px solid #64B5F6; /* Light blue border */
            padding: 5px;
            background: #E3F2FD;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #BBDEFB; /* Light blue border */
            padding: 0.7rem 1rem;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #64B5F6; /* Darker blue on focus */
            box-shadow: 0 0 4px #64B5F6;
        }

        .btn-primary {
            background-color: #64B5F6; /* Light blue button */
            color: white;
            border: none;
            font-size: 1rem;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #42A5F5; /* Slightly darker blue */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            text-align: center;
            font-size: 1.8rem;
            color: #1E88E5; /* Dark blue text */
            margin-bottom: 1.5rem;
        }

        .text-center a {
            color: #1E88E5; /* Link color */
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .text-center a:hover {
            color: #1565C0; /* Darker link on hover */
        }

        .decor {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #BBDEFB; /* Blue decorative circles */
            border-radius: 50%;
        }

        .decor-1 {
            top: -15px;
            right: -15px;
        }

        .decor-2 {
            bottom: -15px;
            left: -15px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="login-container position-relative">
                    <div class="decor decor-1"></div>
                    <div class="decor decor-2"></div>

                    <div class="d-flex justify-content-center py-4">
                        <a href="<?= base_url('index.html') ?>" class="logo d-flex align-items-center w-auto">
                           
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title">Login</h5>
                        </div>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger invalid-feedback">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('home/aksilogin') ?>" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>

                        <p class="mt-3 text-center">
                            Don't have an account? <a href="<?= base_url('home/signup') ?>">Sign up here</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
