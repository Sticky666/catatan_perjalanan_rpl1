<?php
    session_start();
    if(empty($_SESSION['login'])){
        header('location: ../login.php');
    }
    include "header_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?= base_url; ?>/bootstrap/css/bootstrap.css">
    <style>
        @media (max-width: 1025px) {
        #section2gambar {
            order: 1;
        }

        #section2text {
            order: 2;
        }
    }
    </style>
</head>
<body>


<!--Konten-->
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-bg-primary border-0">
                <div class="card-body">
                Selamat Datang <?= $_SESSION['nama_lengkap'];?>, Silahkan Gunakan Aplikasi Ini Dengan Memilih Menu Yang Tersedia
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, dolore. Reprehenderit nam veritatis nisi dolorem quaerat, earum reiciendis nesciunt eaque, sed odit facilis quisquam aut vero incidunt voluptates consequatur? Necessitatibus.</div>
        <!-- Card1 -->
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6 my-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 fs-1 my-auto text-center">
                        <i class="bi bi-send"></i>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Jumlah Perjalanan</h6>
                            <p class="card-text">12</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        <!--Akhir Card1-->
        <!--Card 2-->
                <div class="col-lg-6 my-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 fs-1 my-auto text-center">
                        <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Jumlah Lokasi</h6>
                            <p class="card-text">23614</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        <!--Akhir Card2-->
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 fs-1 my-auto text-center">
                        <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Jumlah Pengguna</h6>
                            <p class="card-text">2</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Akhir konten-->
</body>
</html>

