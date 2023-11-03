<?php
// koneksi
$conn = new mysqli('localhost', 'root', '', 'restourant');
session_start();
 
// // simpan data
// $nama = $_POST['Ayam Bakar'];
// $harga = $_POST['10000'];
// $total = $_POST['10000'];
 
$q = mysqli_query($conn, "INSERT INTO pesanan (nama, harga, total) VALUES ('Ikan Laut', '12000', '12000')");
 
if($q) {
header('Location: pemesanan.php');
} else {
echo "<script>alert('Gagal menambahkan data'); window.location.href = index.php;</script>";
}


?>