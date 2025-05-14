<?php
require '../../models/Anggota.php';
require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Pegawai.php';

use models\Anggota;
use models\Pegawai;

$id = $_GET['id'];
Anggota::delete($id);
header("Location: index.php");
