<?php
include 'connect.php';

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$posisi = $_POST['posisi'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO karyawan (nama, jenisKelamin, alamat, posisiPekerjaan) VALUES ('$nama', '$jk', '$alamat', '$posisi')";
    $in=mysqli_query($conn,$sql);

    if($in){
        header('Location: index.php');
    }
    
}
?>