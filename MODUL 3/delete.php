<?php
include 'connect.php';

$id = $_GET['id'];
$del = $_GET['delete'];


if($del == 'yes'){
    $sql = "DELETE FROM karyawan WHERE id = '$id'";
    $delete=mysqli_query($conn,$sql);
    if($delete){
        header('Location: index.php');
    }
    
}
?>