<?php 
require '../config/connection.php';
$id = $_POST['id'];

if(isset($_POST['terima'])){
    mysqli_query($conn, "UPDATE spd SET verify='0' WHERE no_spd= '$id'");
    header('location:index.php');
}else if(isset($_POST['tidak'])){
    mysqli_query($conn, "UPDATE spd SET verify='2' WHERE no_spd= '$id'");
    header('location:index.php');
}else{
    echo "<script>alert('Gagal!')</script>";
}
?>