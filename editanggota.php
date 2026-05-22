<?php
require_once "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM anggota WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<body>
    <h1>Edit Anggota</h1>
    <form action="proseseditanggota.php?id=<?php echo $row[0];?>" method="POST">
        Nama:  <br>
        <input type="text" name="nama" value="<?php echo $row[1];?>"/><br><br>
        NIM/NIP<br>
        <input type="text" name="nim_nip" value="<?php echo $row[2];?>"/><br><br>
        Jurusan/Prodi <br>
        <input type="text" name="jurusan_prodi" value="<?php echo $row[3];?>"/><br><br>
        No Telepon <br>
        <input type="text" name="no_telepon" value="<?php echo $row[4];?>"/><br><br>
        <input type="submit" value="Update">
        <a href="batal.php">batal</a>
    </form>
</body>