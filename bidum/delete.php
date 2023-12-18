<?php 
    require "../config/connection.php";

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $query = mysqli_query($conn,"DELETE FROM spd WHERE no_spd='$id'");

        if($query){
            echo "<script>
            alert('Laporan telah dihapus!');
            window.location.href='spd.php';
            </script>";
        }else{
            echo "<script>
            alert('Laporan gagal dihapus!');
            window.location.href='spd.php';
            </script>";
        }
    }
?>