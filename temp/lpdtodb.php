<?php
require "../config/connection.php";

$lokasi_file = $_FILES['fileup']['tmp_name'];
$nama_file   = $_FILES['fileup']['name'];

$folder = "../files/$nama_file";

$tgl_upload = date("Ymd");

if (move_uploaded_file($lokasi_file,"$folder")){
  echo "<script>alert('Laporan berhasil diupload!'); window.location = 'lpd.php'</script>";
  $query = "INSERT INTO lpd (no_spd, petugas, filename, hasil, tgl_upload)
            VALUES('$_POST[nospd]','$_POST[nama]','$nama_file', '$_POST[lapor]', '$tgl_upload')";

  mysqli_query($conn, $query);
}
else{
  echo "File gagal di upload";
}
?>