<?php
require '../../models/Pesanan.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Pesanan.php';

use models\Pesanan;

$id = $_GET['id'];
Pesanan::delete($id);
header("Location: index.php");
