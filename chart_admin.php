<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['id_user']) || $_SESSION['role'] != 'admin') {
    exit;
}

// Hitung statistik pengguna berdasarkan role
$query = mysqli_query($conn, "SELECT role, COUNT(*) as total FROM users GROUP BY role");

$labels = [];
$totals = [];

while ($row = mysqli_fetch_assoc($query)) {
    $labels[] = ucfirst($row['role']);
    $totals[] = $row['total'];
}

echo json_encode([
    'labels' => $labels,
    'totals' => $totals
]);
?>