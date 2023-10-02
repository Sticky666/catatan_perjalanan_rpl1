<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //-- Cek Apakah username dan passwordnya ada di tabel pengguna
    $sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username ='".$username."' AND password ='".$password."'");
    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        //kalau datanya ada--
        $_SESSION['login'] = "Sudah Login";
    }else{
        echo "Username Atau Password Salah!";
    }
?>