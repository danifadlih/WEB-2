<?php

require_once __DIR__ . '/../../models/Pegawai.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Pegawai.php';
require_once __DIR__ . '/../../vendor/autoload.php';



use models\Pegawai;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    Pegawai::delete($id);
    header("Location: index.php");
    exit;
} else {
    echo "ID pegawai tidak ditemukan.";
}
