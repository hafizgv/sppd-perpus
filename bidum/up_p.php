<?php
require '../config/connection.php';
include 'update_p.php';

$id = $_POST['id'] ?? ''; 
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];

$query = mysqli_query($conn, "UPDATE account SET nip='$nip', nama='$nama', pangkat='$pangkat', golongan='$golongan', tier = '$jabatan' WHERE id_user='$id'");
if($query){
    echo "<script>alert('Laporan bertugas diupdate!'); window.location = 'index.php'</script>";
}else{
    echo "<script>alert('Laporan gagal diupdate!'); window.location = 'index.php'</script>";
}
?>