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
      </nav><br>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="assets/ikanlaut.jpeg" width="100px" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ikan Laut</h5>
              <p class="card-text">Masakan ikan laut adalah hidangan lezat yang disiapkan dengan berbagai jenis ikan yang berasal dari laut, seperti salmon, tuna, cod, atau haddock. Ikan ini biasanya dibumbui dengan rempah-rempah, bumbu, dan bahan-bahan lainnya.</p>
              <h5 class="card-title">Rp 12.000</h5><br>
              <a href="ikanLaut.php" class="btn btn-primary" onclick="ikanLaut.php">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/ikannila.jpeg" width="100px" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ikan Nilla</h5>
              <p class="card-text">Masakan ikan nila adalah hidangan yang menggunakan ikan nila sebagai bahan utamanya. Ikan nila memiliki daging yang lembut dan enak, sehingga cocok untuk berbagai metode memasak, seperti panggang, goreng, atau kukus.</p>
              <h5 class="card-title">Rp 12.000</h5><br>
              <a href="ikanNilla.php" class="btn btn-primary">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/sotoayam.jpeg" width="100px" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soto Ayam</h5>
              <p class="card-text">Soto ayam adalah hidangan tradisional Indonesia yang terkenal dengan kuah kaldu ayam yang gurih dan lezat. Hidangan ini terdiri dari potongan daging ayam yang dimasak dalam kuah kaldu yang diperkaya dengan rempah-rempah seperti bawang putih, jahe, dan serai, sehingga memiliki rasa yang kaya dan harum.</p>
              <h5 class="card-title">Rp 9.000</h5><br>
              <a href="sotoAyam.php" class="btn btn-primary" >Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/ayam bakar.jpeg" width="100px" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ayam Bakar</h5>
              <p class="card-text">Ayam bakar adalah hidangan Asia Tenggara yang menggoda dengan citarasa manis, gurih, dan pedas. Hidangan ini terdiri dari potongan ayam, seringkali paha atau sayap, yang telah dibumbui dengan campuran rempah-rempah, bawang, jahe, bawang putih, dan gula, lalu dimarinasi dalam campuran bumbu tersebut.</p>
              <h5 class="card-title">Rp 13.000</h5><br>
              <a href="ayamBakar.php" class="btn btn-primary" >Pesan</a>
            </div>
          </div>
        </div>
</div>

<?php


?>
        
      
  </body>
</html>

<script>
 <?php
  // koneksi
  $conn = new mysqli('localhost', 'root', '', 'restourant');
  
  // simpan data
  if (isset($_POST['submit'])) {
  $nama = $_POST['Ayam Bakar'];
  $harga = $_POST['9000'];
  $total = $_POST['9000'];
  
  $q = mysqli_query($conn, "INSERT INTO pesanan (nama, harga, total) VALUES ('$nama', '$harga', '$total')");
  
  if($q) {
  header('Location: cekPemesanan.php');
  } else {
  echo "<script>alert('Gagal menambahkan data'); window.location.href = index.php;</script>";
  }
  }


  ?>
</script>