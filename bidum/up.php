<?php
require '../config/connection.php';
include 'update.php';

$id = $_POST['nospd'] ?? ''; 
$petugas = $_POST['nama'];
$tugas = $_POST['tugas'];
$tujuan = $_POST['tujuan'];
$lokasi_file = $_FILES['fileup']['tmp_name'];
$nama_file   = $_FILES['fileup']['name'];

$folder = "../files/$nama_file";

if(!empty($nama_file)){
    move_uploaded_file($lokasi_file,"$folder");
    $query = mysqli_query($conn, "UPDATE spd SET petugas='$petugas', filename='$nama_file',tugas='$tugas',tujuan='$tujuan' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Laporan bertugas diupdate!'); window.location = 'spd.php'</script>";
    }else{
        echo "<script>alert('Laporan gagal diupdate!'); window.location = 'spd.php'</script>";
    }
}else if(empty($nama_file)){
    $query = mysqli_query($conn, "UPDATE spd SET petugas='$petugas', tugas='$tugas' ,tujuan='$tujuan' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Laporan bertugas diupdate!'); window.location = 'spd.php'</script>";
    }else{
        echo "<script>alert('Laporan gagal diupdate!'); window.location = 'spd.php'</script>";
    }
}else{
    echo "<script>alert('Gagal lek!'); window.location = 'spd.php'</script>";
}
?>