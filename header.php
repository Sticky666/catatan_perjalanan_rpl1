<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        @media (max-width: 1025px) {
        #section2gambar {
            order: 1;
        }

        #section2text {
            order: 2;
        }

    </style>
</head>
<body>
<!--Awal Navbar -->
<nav class="navbar sticky-top shadow-lg navbar-expand-lg bg-body-tertiary">
<div class="container-fluid container">
    <img src="images/logo.png" alt="" class="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto flex-nowrap">
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="#">Dashboard Publik</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="#">Tentang PERJALANANKU</a>
        </li>
    </ul>
        <button class="btn btn-outline-primary" onclick="location.href='login.php'">Masuk</button>
    </div>
</div>
</nav>
<!--Akhir Navbar -->
</body>
</html>