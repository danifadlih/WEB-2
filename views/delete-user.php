<?php

require_once __DIR__ . '/../models/User.php';

use models\User;

if (!isset($_GET['id'])) {
    // Menyimpan pesan alert jika tidak ada ID
    session_start();
    $_SESSION['alert'] = 'ID pengguna tidak ditemukan.';
    header("location: list-user.php");
    exit;
}

$user = User::delete($_GET['id']);

session_start();

if (!$user) {
    // Menyimpan pesan alert jika penghapusan gagal
    $_SESSION['alert'] = 'Gagal menghapus pengguna.';
    header("location: list-user.php");
    exit;
}

// Menyimpan pesan alert jika penghapusan berhasil
$_SESSION['alert'] = 'Pengguna berhasil dihapus.';
header("location: list-user.php");
exit;
