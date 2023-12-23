<?php
require '../config/connection.php';

$id = $_POST['nospd'] ?? ''; 
$petugas = $_POST['nama'];
$perihal = $_POST['perihal'];
$lokasi = $_POST['lokasi'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
$dateIn = $_POST['dateIn'];
$dateOut = $_POST['dateOut'];
$lokasi_file = $_FILES['fileup']['tmp_name'];
$nama_file   = $_FILES['fileup']['name'];

$folder = "../files/$nama_file";

if(!empty($nama_file)){
    move_uploaded_file($lokasi_file,"$folder");
    $query = mysqli_query($conn, "UPDATE spd SET petugas='$petugas', filename='$nama_file', perihal='$perihal', lokasi='$lokasi', tujuan='$tujuan', asal='$asal', dateIn='$dateIn', dateOut='$dateOut' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Surat berhasil diupdate!'); window.location = 'spd.php'</script>";
    }else{
        echo "<script>alert('Surat gagal diupdate!'); window.location = 'spd.php'</script>";
    }
}else if(empty($nama_file)){
    $query = mysqli_query($conn, "UPDATE spd SET petugas='$petugas', perihal='$perihal' ,lokasi='$lokasi', tujuan='$tujuan', asal='$asal', dateIn='$dateIn', dateOut='$dateOut' WHERE no_spd='$id'");
    if($query){
        echo "<script>alert('Surat berhasil diupdate!'); window.location = 'spd.php'</script>";
    }else{
        echo "<script>alert('Surat gagal diupdate!'); window.location = 'spd.php'</script>";
    }
}else{
    echo "<script>alert('Gagal lek!'); window.location = 'spd.php'</script>";
}
?>