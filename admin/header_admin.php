<?php
        $preUrl = explode("/", $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $url    = (isset($_SERVER['HTTPS'])?"https":"http")."://".$preUrl[0]."/".$preUrl[1]."/";
        define("base_url", $url);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<? base_url;?>/bootstrap/css/bootstrap.css">
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

<!--Awal Navbar -->
<nav class="navbar sticky-top shadow-lg navbar-expand-lg bg-body-tertiary">
<div class="container-fluid container">
    <img src="<?= base_url; ?>images/logo.png" alt="" class="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto flex-nowrap">
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="<?= base_url; ?>admin/beranda.php">Beranda</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="<?= base_url; ?>admin/catatan/input_perjalanan.php">Catatan</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="<?= base_url; ?>admin/lokasi/lokasi.php">Lokasi</a>
        </li>
    </ul>
        <button class="btn btn-outline-danger" onclick="location.href='<?= base_url; ?>/logout.php'">Logout</button>
    </div>
</div>
</nav>
<!--Akhir Navbar -->