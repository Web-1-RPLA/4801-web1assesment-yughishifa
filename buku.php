<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4901 607062530004 YUGHI SHIFA LINAFUSIL MUGI HIDAYAH</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .write-diary-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #93182b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 18px;
            border: 2px solid #93182b;
            text-align: center;
            max-width: 200px
        }
        .write-diary-button:hover {
            background-color: #93182b;
            border-color: #93182b;
        }
        .write-diary-button:active {
            transform: translateY(1px);
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #93182b;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .empty-message {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
  <center>
  <h2>Data Buku</h2>
  <a href="tambahbuku.php">Tambah Buku</a> <br>
  <a href="index.php">Home</a>
  </center>
  <hr>

  <?php 
    require_once "koneksi.php";

    $sql = "SELECT * FROM buku ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
      die("Error: " .mysqli_error($conn)); //menampilkan pesan kesalahan
    }

    //check if diary table is empty
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['kode_buku']; ?></td>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['pengarang']; ?></td>
        <td><?php echo $row['tahun_terbit']; ?></td>
        <td><?php echo $row['jumlah_stok']; ?></td>
      </tr>
      <?php
      }
      ?>
  </table>
  <?php
  } else {
    //if diary table is empty, display empty massage
    echo '<div class="empty-message">Belum ada data buku.</div>';
  }
  ?>
</body>
</html>