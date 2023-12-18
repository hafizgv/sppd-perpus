<?php
require "../config/connection.php";

$query = "INSERT INTO account (username, password, tier, nip, nama, pangkat, golongan)
        VALUES('$_POST[username]','$_POST[password]','$_POST[jabatan]', '$_POST[nip]', '$_POST[nama]', '$_POST[pangkat]', '$_POST[golongan]')";

if ($query){
    mysqli_query($conn, $query);
    echo "<script>alert('Data berhasil diupload!'); window.location = 'index.php'</script>";
}
else{
    echo "Data gagal di upload";
}
?>