<?php 
    require "../config/connection.php";

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $query = mysqli_query($conn,"DELETE FROM account WHERE id_user='$id'");

        if($query){
            echo "<script>
            alert('Pegawai telah dihapus!');
            window.location.href='index.php';
            </script>";
        }else{
            echo "<script>
            alert('Pegawai gagal dihapus!');
            window.location.href='index.php';
            </script>";
        }
    }
?>