<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$db         = "majumundur";


$conn = mysqli_connect($host,$username,$password,$db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>