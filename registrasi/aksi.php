<?php
    include "../koneksi.php";

    $nik = $_POST['nik'];
    $nama = $_POST['nama_lengkap'];
    $username = $_POST ['username'];
    $password = md5($_POST['password']);
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];

    //--- simpan ke tabel pengguna ---
    $sql = mysqli_query($koneksi, "insert into pengguna values('".$nik."','".$nama."','".$username."','".$password."','".$alamat."','".$tmp_lahir."','".$tgl_lahir."','".$jk."', 'masyarakat')"); 
    if($sql){
        echo "Berhasil Registrasi";
    }
    else{
        echo "Gagal Untuk Registrasi";
    }
?>