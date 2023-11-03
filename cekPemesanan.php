<?php
// koneksi
$conn = new mysqli('localhost', 'root', '', 'restourant');
 
// simpan data
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$total = $_POST['total'];
 
$q = mysqli_query($conn, "INSERT INTO produk (nama, harga, total) VALUES ('$nama', '$harga', '$total')");
 
if($q) {
header('Location: cekPemesanan.php');
} else {
echo "<script>alert('Gagal menambahkan data'); window.location.href = index.php;</script>";
}
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bebakaran Yahoot</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pemesanan.php">Pemesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cekPemesanan.php">Check Pesanan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Username
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Admin</a></li>
                  <li><a class="dropdown-item" href="#">User</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
        <!--code menampilkan data-->
          <table class="table table-bordered mt-5">
          <tr>
          <th>#</th>
          <th>Nama Makanan</th>
          <th>Harga </th>
          <th>Total</th>
          </tr>
          
          <?php
          // perintah tampil data
          $q = mysqli_query($conn, "SELECT * FROM pesanan");
          
          $total = 0;
          $tot_bayar = 0;
          $no = 1;
          
          while ($r = $q->fetch_assoc()) {
          // total adalah hasil dari harga x qty
          $total = $r['harga'];
          // total bayar adalah penjumlahan dari keseluruhan total
          $tot_bayar += $total;
          ?>
          
          <tr>
          <td><?= $no++ ?></td>
          <td><?= ucwords($r['nama']) ?></td>
          <td><?= $r['harga'] ?></td>
          <td><?= $total ?></td>
          </tr>
          
          <?php
          }
          ?>
          
          <tr>
          <th colspan="3">Total Bayar</th>
          <th><?= $tot_bayar ?></th>
          </tr>
          
          </table>
      </div>


  </body>
</html>