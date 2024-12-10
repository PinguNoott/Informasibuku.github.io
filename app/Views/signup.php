<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="<?= base_url('path/to/your/bootstrap.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&family=Baloo+2:wght@600&display=swap">
    <style>
        body {
            background-color: #E3F2FD; /* Soft blue background */
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }

        .signup-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .signup-container::before {
            content: '★';
            font-size: 50px;
            color: #90CAF9; /* Light blue */
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #90CAF9; /* Border in light blue */
            font-size: 1rem;
            padding: 0.6rem 1rem;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #90CAF9; /* Light blue */
            border: none;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #64B5F6; /* Darker blue on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h5.card-title {
            font-family: 'Baloo 2', cursive;
            color: #64B5F6;
            font-size: 2rem;
        }

        .text-center a {
            color: #64B5F6;
            font-weight: bold;
        }

        .text-center a:hover {
            color: #42A5F5; /* Darker blue for hover effect */
        }

        .invalid-feedback {
            font-size: 0.9rem;
            color: #FF3D57;
            font-weight: bold;
        }

        /* Add cute decoration */
        .decor {
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: #90CAF9;
            border-radius: 50%;
        }

        .decor-1 {
            top: -20px;
            right: -20px;
        }

        .decor-2 {
            bottom: -20px;
            left: -20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="signup-container position-relative">
                    <div class="decor decor-1"></div>
                    <div class="decor decor-2"></div>

                    <div class="d-flex justify-content-center py-4">
                        <a href="<?= base_url('index.html') ?>" class="logo d-flex align-items-center w-auto">
                            <!-- No image logo here -->
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Sign Up</h5>
                        </div>

                        <!-- Show error messages if any -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger invalid-feedback">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form class="row g-3 needs-validation" novalidate action="<?= base_url('home/aksi_signup') ?>" method="POST">
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="yourEmail" required>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                            </div>

                            <div class="col-12">
                                <label for="level" class="form-label">Level</label>
                                <select name="level" class="form-control" id="level" required>
                                    <option value="1">User</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0 text-center">Already have an account? <a href="<?= base_url('home/login') ?>">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
