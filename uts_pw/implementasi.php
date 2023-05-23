<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Mahasiswa</title>
</head>
<body>
    <?php
    // Fungsi untuk mendapatkan data mahasiswa dari database
    function getMahasiswa()
    {
        global $koneksi;
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($koneksi, $sql);
        return $result;
    }

    // Fungsi untuk menambahkan data mahasiswa ke database
    function tambahMahasiswa($nama, $nim, $jurusan)
    {
        global $koneksi;
        $sql = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
        return mysqli_query($koneksi, $sql);
    }

    // Fungsi untuk mengupdate data mahasiswa di database
    function updateMahasiswa($id, $nama, $nim, $jurusan)
    {
        global $koneksi;
        $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
        return mysqli_query($koneksi, $sql);
    }

    // Fungsi untuk menghapus data mahasiswa dari database
    function hapusMahasiswa($id)
    {
        global $koneksi;
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        return mysqli_query($koneksi, $sql);
    }

    // Memproses form tambah data mahasiswa
    if (isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        tambahMahasiswa($nama, $nim, $jurusan);
        header("Location: index.php"); // Redirect kembali ke halaman utama
    }

    // Mempro
