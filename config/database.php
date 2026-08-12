<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'peminjaman';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('koneksi database gagal:' .$conn->connect_error);
}

$conn->set_charset('utf8');