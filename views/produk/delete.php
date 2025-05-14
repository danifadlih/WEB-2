<?php
require '../../models/Produk.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Produk.php';

use models\Produk;

$id = $_GET['id'];
Produk::delete($id);
header("Location: index.php");
