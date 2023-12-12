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
        if($ambil['tier'] == 'pimpinan'){
            header('location:boss/index.php');
        }
    }
    else{
        echo 
        "<script type='text/javascript'>
        alert('maklo gaming!');
        window.location.href='index.php';
        </script>";
    }
?>