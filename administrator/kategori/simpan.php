<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

if ($_SESSION['level'] != 'Administrator') {
    header('Location: ../../auth/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit();
}

$nama_kategori = trim($_POST['nama_kategori']);

if (empty($nama_kategori)) {
    header( 'Location: create.php');
    exit();
}

$stmt = $conn->prepare("select id_kategori from kategori where nama_kategori = ?");
$stmt->bind_param('s', $nama_kategori);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "<script>alert('nama kategori sudah tersedia'); window.laocation='create.php';</script>";
    exit();
}
$stmt->close();

$stmt = $conn->prepare("insert into kategori (nama_kategori) values ( ? )");
$stmt->bind_param('s', $nama_kategori);

if ($stmt->execute()) {
    header('Location: index.php?pesan=sukses');
}else {
    echo "<script>alert('data kategori gagal di simpan');
    window.location='create.php';</script>";
}
$stmt->close();
$conn->close();