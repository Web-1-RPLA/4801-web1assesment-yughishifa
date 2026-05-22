<?php
require_once "koneksi.php";

$nama = $_POST['nama'];
$nim_nip = $_POST['nim_nip'];
$jurusan_prodi = $_POST['jurusan_prodi'];
$no_telepon = $_POST['no_telepon'];


$sql = "INSERT INTO anggota (nama, nim_nip, jurusan_prodi, no_telepon) VALUES ('$nama', '$nim_nip', '$jurusan_prodi', '$no_telepon')";

if (empty($_POST['nama'])) {
    echo "<p>Nama tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['nim_nip'])) {
    echo "<p>NIM atau NIP tidak boleh kosong.</p>";
    exit();
}
if (empty($_POST['jurusan_prodi'])) {
    echo "<p>Jurusan atau Prodi tidak boleh kosong.</p>";
    exit();
}
if (empty($_POST['no_telepon'])) {
    echo "<p>No Telepon tidak boleh kosong.</p>";
    exit();
}

if (mysqli_query($conn, $sql)) {
    echo "Berita berhasil disimpan!";
    header("refresh:2;url=index.php");
} else {
    echo "Gagal menyimpan anggota.";
}
?>