<?php

require_once __DIR__ . '/../config/Connection.php';
require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../models/Anggota.php';
require_once __DIR__ . '/../models/Produk.php';
require_once __DIR__ . '/../models/Pesanan.php';
require_once __DIR__ . '/../models/Pembayaran.php';

include_once __DIR__ . '/template/header.php';
include_once __DIR__ . '/template/navbar.php';
include_once __DIR__ . '/template/sidebar.php';

use models\Anggota;
use models\Produk;
use models\Pesanan;
use models\Pembayaran;

$jmlAnggota = count(Anggota::all());
$jmlProduk = count(Produk::all());
$jmlPesanan = count(Pesanan::all());
$jmlPembayaran = count(Pembayaran::all());
?>

<main class="pt-4">
    <div class="container-fluid px-4">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">DASHBOARD</h1>
        </div>

        <!-- Welcome Message -->
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm bg-gradient bg-light">
                    <div class="card-body text-center py-5">
                        <h2 class="text-primary fw-bold">Selamat Datang</h2>
                        <p class="fs-5 text-muted mb-0"><strong>DI Aplikasi</strong> <strong>Manajemen Koperasi Pegawai</strong></p>
                        <p class="mt-3">Permudah Pekerjaanmu dengan aplikasi ini</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Cards -->
        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="card shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Anggota</h5>
                        <h2 class="fw-bold"><?= $jmlAnggota; ?></h2>
                        <p class="text-muted small mb-0">Total anggota terdaftar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-box-open fa-2x text-success mb-3"></i>
                        <h5 class="card-title">Produk</h5>
                        <h2 class="fw-bold"><?= $jmlProduk; ?></h2>
                        <p class="text-muted small mb-0">Total produk tersedia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart fa-2x text-warning mb-3"></i>
                        <h5 class="card-title">Pesanan</h5>
                        <h2 class="fw-bold"><?= $jmlPesanan; ?></h2>
                        <p class="text-muted small mb-0">Total transaksi pemesanan</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-wave fa-2x text-danger mb-3"></i>
                        <h5 class="card-title">Pembayaran</h5>
                        <h2 class="fw-bold"><?= $jmlPembayaran; ?></h2>
                        <p class="text-muted small mb-0">Total pembayaran berhasil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/template/footer.php'; ?>