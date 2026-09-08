<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

if ($_SESSION['level'] != 'Administrator') {
    header('Location: ../../auth/login.php');
    exit();
}
$title = 'Tambah katergori';

require_once '../../layouts/header.php';
require_once '../../layouts/navbar.php';
require_once '../../layouts/sidebar.php';
?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3><i class="bi bi-tags-fill"></i>Tambah kategori</h3>
            <p class="text-muted mb-0">Form Tambah kategori</p>
        </div>
        <a href="index.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i>Kembali
        </a>
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            Form data kategori
        </div>
        <div class="card-body">
            <form action="simpan.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_kategori" maxlength="100" placeholder="masukkan nama katerogi" autofocus required>
                    <small class="text-muted">contoh: Laptop, proyektor, kamera, printer</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary">
                    <i class="bi bi-save"></i>simpan
                </button>
            </form>
        </div>
    </div>
</div>
<?php
require_once '../../layouts/footer.php';
?>