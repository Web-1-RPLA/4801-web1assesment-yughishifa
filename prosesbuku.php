<?php
require_once "koneksi.php";

$kode_buku = $_POST['kode_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_stok = $_POST['jumlah_stok'];


$sql = "INSERT INTO buku (kode_buku, judul, pengarang, tahun_terbit, jumlah_stok) VALUES ('$kode_buku', '$judul', '$pengarang', '$tahun_terbit', 'jumlah_stok')";

if (empty($_POST['kode_buku'])) {
    echo "<p>Kode buku tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['judul'])) {
    echo "<p>judul tidak boleh kosong.</p>";
    exit();
}
if (empty($_POST['pengarang'])) {
    echo "<p>pengarang tidak boleh kosong.</p>";
    exit();
}
if (empty($_POST['tahun_terbit'])) {
    echo "<p>tahun terbit tidak boleh kosong.</p>";
    exit();
}
if (empty($_POST['jumlah_stok'])) {
    echo "<p>jumlah stok tidak boleh kosong.</p>";
    exit();
}

if (mysqli_query($conn, $sql)) {
    echo "Berita berhasil disimpan!";
    header("refresh:2;url=index.php");
} else {
    echo "Gagal menyimpan buku.";
}
?>