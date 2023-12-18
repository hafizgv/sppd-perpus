<?php 
    require "../config/connection.php";

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $query = mysqli_query($conn,"DELETE FROM lpd WHERE no_spd='$id'");

        if($query){
            echo "<script>
            alert('Laporan telah dihapus!');
            window.location.href='lpd.php';
            </script>";
        }else{
            echo "<script>
            alert('Laporan gagal dihapus!');
            window.location.href='lpd.php';
            </script>";
        }
    }
?>