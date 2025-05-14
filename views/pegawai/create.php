<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require '../../models/Pegawai.php';

require_once __DIR__ . '/../../config/Connection.php';
require_once __DIR__ . '/../../models/Pegawai.php';

use models\Pegawai;

// Misalnya ini setelah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Pegawai::store($_POST);
}




include '../template/header.php';
?>

<h1 class="mt-4">Tambah Pegawai</h1>
<form method="POST">
    <div class="mb-3">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

<?php include '../template/footer.php'; ?>