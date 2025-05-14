<?php
require '../../models/Pembayaran.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/pembayaran.php';

use models\Pembayaran;

$id = $_GET['id'];
Pembayaran::delete($id);
header("Location: index.php");
