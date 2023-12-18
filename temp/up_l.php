<?php
require '../config/connection.php';
include 'update.php';

$id = $_POST['nospd'] ?? ''; 
$petugas = $_POST['nama'];
$hasil = $_POST['lapor'];
$lokasi_file = $_FILES['fileup']['tmp_name'];
$nama_file   = $_FILES['fileup']['name'];

$folder = "../file/$nama_file";

if(!empty($nama_file)){
    move_uploaded_file($lokasi_file,"$folder");
    $query = mysqli_query($conn, "UPDATE lpd SET petugas='$petugas', filename='$nama_file',hasil='$hasil' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Laporan berhasil diupdate!'); window.location = 'lpd.php'</script>";
    }else{
        echo "<script>alert('Laporan gagal diupdate!'); window.location = 'lpd.php'</script>";
    }
}else if(empty($nama_file)){
    $query = mysqli_query($conn, "UPDATE lpd SET petugas='$petugas', hasil='$hasil' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Laporan berhasil diupdate!'); window.location = 'lpd.php'</script>";
    }else{
        echo "<script>alert('Laporan gagal diupdate!'); window.location = 'lpd.php'</script>";
    }
}else{
    echo "<script>alert('Gagal lek!'); window.location = 'lpd.php'</script>";
}
?>