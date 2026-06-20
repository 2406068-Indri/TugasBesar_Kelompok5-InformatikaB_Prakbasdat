<?php
session_start();
if (!isset($_SESSION['id_user']) || $_SESSION['role'] != 'admin') { header("Location: ../auth/login.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - LokerIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <h3>Panel Kontrol Utama <strong>Situs Admin LokerIn</strong></h3>
    <p class="text-muted">Gunakan halaman ini untuk memantau aktivitas keseluruhan statistik sistem loker.</p>
    <a href="../auth/logout.php" class="btn btn-danger btn-sm mt-3">Keluar Sistem</a>
</div>
</body>
</html>