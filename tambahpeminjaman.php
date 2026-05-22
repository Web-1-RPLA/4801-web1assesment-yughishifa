<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4901 607062530004 YUGHI SHIFA LINAFUSIL MUGI HIDAYAH</title>
</head>
<body>
  <h2>Tambah Peminjaman</h2>
  <form action="prosespeminjaman.php" method="POST">
    Anggota <br>
    <select name="id_anggota" id="anggota">
      <?php
      require_once "koneksi.php";
      $sql = "SELECT * FROM anggota ORDER BY id DESC";
      $result = mmysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<option value='".$row['id']."'>" . $row['nama'] . "</option";
        }
      } else {
        echo "<option value=''>Tidak ada Anggota</option>";
      }
      ?>
    </select>
  <br>
  <br>
  Buku <br>
    <select name="id_buku" id="peminjaman">
      <?php
      require_once "koneksi.php";
      $sql = "SELECT * FROM buku ORDER BY id DESC";
      $result = mmysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<option value='".$row['id']."'>" . $row['judul'] . "</option";
        }
      } else {
        echo "<option value=''>Tidak ada Buku</option>";
      }
      ?>
    </select>
  <br>
  <br>
  Tanggal Pinjam <br>
    <select name="id" id="peminjaman">
      <?php
      require_once "koneksi.php";
      $sql = "SELECT * FROM peminjaman ORDER BY id DESC";
      $result = mmysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<option value='".$row['id']."'>" . $row['tanggal_pinjam'] . "</option";
        }
      } else {
        echo "<option value=''>Tidak ada peminjaman</option>";
      }
      ?>
    </select>
  <br>
  <br>
    <input type="submit" value="Simpan Peminjaman">
    <a href="tambahpeminjaman.php">Batal</a>
  </form>

</body>
</html>