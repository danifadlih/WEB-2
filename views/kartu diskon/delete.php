<?php
require '../../models/Kartu_diskon.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Kartu_diskon.php';

use models\Kartu_diskon;

$id = $_GET['id'] ?? null;

if ($id) {
    $success = Kartu_diskon::delete($id);

    if ($success) {
        header("Location: index.php?message=Berhasil dihapus");
        exit;
    } else {
        header("Location: index.php?error=Kartu diskon tidak bisa dihapus karena masih digunakan anggota");
        exit;
    }
}
