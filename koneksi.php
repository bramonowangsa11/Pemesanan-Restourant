<!-- <?php
// include "koneksi.php";
// $sql = "SELECT * FROM user ORDER BY username";
// $tampil = mysqli_query($con, $sql);

// session_start();

// if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
//     echo "AKSES DI TOLAK!";
//     echo "<br><a href='form_login.php'>LOGIN</a>";
//     die();
// }

?> -->


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restourant";


$con = new mysqli($servername, $username, $password, $dbname);

// Cek Koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
