<?php
include 'connect.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$posisi = $_POST['posisi'];

if(isset($_POST['edit'])){
    $sql = "UPDATE karyawan SET nama = '$nama', jenisKelamin = '$jk', alamat = '$alamat', posisiPekerjaan = '$posisi' WHERE id = '$id'";
    $update=mysqli_query($conn,$sql);

    if($update){
        header('Location: index.php');
    }
    
}
?>