<?php
// Koneksi ke database
$host = "localhost"; // Ganti sesuai dengan host database Anda
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$database = "data_mahasiswa"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($koneksi, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Error creating database: " . mysqli_error($koneksi);
}

// Menggunakan database yang dibuat
mysqli_select_db($koneksi, $database);

// Membuat tabel "mahasiswa" jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(10) NOT NULL,
    jurusan VARCHAR(50) NOT NULL
)";
if (mysqli_query($koneksi, $sql)) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
