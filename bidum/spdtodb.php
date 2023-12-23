<?php
require "../config/connection.php";

$lokasi_file = $_FILES['fileup']['tmp_name'];
$nama_file   = $_FILES['fileup']['name'];

$folder = "../files/$nama_file";

$dateSend = date("Ymd");

if (move_uploaded_file($lokasi_file,"$folder")){
  echo "<script>alert('Laporan berhasil diupload!'); window.location = 'spd.php'</script>";
  $query = "INSERT INTO spd (no_spd, petugas, filename, perihal, lokasi, tujuan, asal, dateIn, dateOut, dateSend, verify)
            VALUES('$_POST[nospd]','$_POST[nama]','$nama_file', '$_POST[perihal]', '$_POST[lokasi]', '$_POST[tujuan]', '$_POST[asal]', '$_POST[dateIn]', '$_POST[dateOut]', '$dateSend','1')";

  mysqli_query($conn, $query);
}
else{
  echo "File gagal di upload";
}
?>