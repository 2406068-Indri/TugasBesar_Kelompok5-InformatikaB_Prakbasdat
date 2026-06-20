<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>LokerIn</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            LokerIn
        </a>

        <div class="ms-auto">

            <?php if (isset($_SESSION['id_user'])) : ?>

                <a href="auth/logout.php" class="btn btn-light">
                    Logout
                </a>

            <?php else : ?>

                <a href="auth/login.php" class="btn btn-outline-light me-2">
                    Login
                </a>

                <a href="auth/register.php" class="btn btn-light">
                    Daftar
                </a>

            <?php endif; ?>

        </div>

    </div>
</nav>

<div class="container mt-5">

    <div class="card p-5 shadow-sm">

        <h1 class="text-primary fw-bold">
            Selamat Datang di LokerIn
        </h1>

        <p class="lead">
            Temukan pekerjaan impian Anda atau rekrut kandidat terbaik.
        </p>

    </div>

</div>

</body>
</html>