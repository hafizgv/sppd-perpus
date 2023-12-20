<?php 
    require "config/connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM account WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    $ambil = mysqli_fetch_array($login);

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['tier'] = $tier;
        if($ambil['tier'] == 'Pimpinan'){
            header('location:boss/index.php');
        }else if($ambil['tier'] == 'Bidum'){
            header('location:bidum/index.php');
        }else if($ambil['tier'] == 'Kabid'){
            header('location:kabid/index.php');
        }
    }
    else{
        echo 
        "<script type='text/javascript'>
        alert('Gagal Login!');
        window.location.href='index.php';
        </script>";
    }
?>