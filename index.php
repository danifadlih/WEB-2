<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once '../../models/Detail_Pesanan.php';
require_once '../../models/Produk.php';

use models\DetailPesanan;
use models\Produk;

// Ambil ID pesanan dari URL
$pesanan_id = $_GET['pesanan_id'] ?? null;

// Ambil data semua produk
$produk = Produk::all();

// Tangani saat form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    DetailPesanan::store($_POST);
    header("Location: index.php?pesanan_id=" . $_POST['pesanan_id']);
    exit;
}
?>

<?php include '../template/header.php'; ?>

<h1 class="mt-4">Tambah Produk ke Pesanan #<?= $pesanan_id ?></h1>

<form method="POST">
    <input type="hidden" name="pesanan_id" value="<?= $pesanan_id ?>">

    <div class="mb-3">
        <label>Produk</label>
        <select name="produk_id" class="form-control" required>
            <?php foreach ($produk as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= $p['nama'] ?> (Rp <?= number_format($p['harga'], 0, ',', '.') ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Tambah</button>
    <a href="index.php?pesanan_id=<?= $pesanan_id ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php include '../template/footer.php'; ?>