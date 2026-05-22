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
            border: 2px solid #0056b3;
            text-align: center;
            max-width: 200px
        }
        .write-diary-button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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
            background-color: #007bff;
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
  <center><h2>Data Peminjaman</h2>
  <a href="index.php">Home</a>
  <a href="tambahpeminjaman.php">Tambah Peminjaman</a></center>
  
  <hr>

  <?php 
    require_once "koneksi.php";

    $sql = "SELECT p.id, a.id, b.id
            FROM pinjaman p
            INNER JOIN anggota a ON p.id_anggota = a.id
            INNER JOIN buku b ON b.id = p.id_buku";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
      die("Error: " .mysqli_error($conn)); //menampilkan pesan kesalahan
    }

    //check if diary table is empty
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
      <tr>
        <th>Anggota</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td><?php echo $row['namaAnggota']; ?></td>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['tanggalPinjam']; ?></td>
      </tr>
      <?php
      }
      ?>
  </table>
  <?php
  } else {
    //if diary table is empty, display empty massage
    echo '<div class="empty-message">Belum ada data peminjaman.</div>';
  }
  ?>
</body>
</html>