<?php
require '../../models/Jenis_produk.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Jenis_produk.php';

use models\Jenis_produk;

$id = $_GET['id'];
Jenis_produk::delete($id);
header("Location: index.php");
