<?php
    session_start();
    include "../../koneksi.php";
    if(empty($_SESSION['login']) AND $_SESSION['level'] != 'masyarakat'){
    header('location: ../login.php');
    }
    include "../header_admin.php";
?>
<!--Card Input-->
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <div class="card text-center mt-4">
    <div class="card-header">
    </div>
        <div class="card-body">
            <h5 class="card-title">Formulir Catatan Perjalanan</h5>
            <p class="card-text">Input Catatan Perjalananmu</p>
            <form action="aksi_perjalanan.php" method="POST">
            Pilih Lokasi
            <select name="id_lokasi" id="">
                <?php   
                    $sql = mysqli_query($koneksi, "SELECT * FROM lokasi");
                    while ($data = mysqli_fetch_array($sql)){
                    echo "<option value='".$data['id_lokasi']."'>".$data['nama_lokasi']." | ".$data['alamat_lokasi']."</option>";
                }
                ?>

            </select><br>   
            Suhu Tubuh
            <input type="number" name="suhu_tubuh"><br>
            <input class="bg-primary text-light" type="submit" value="Simpan">
            </form>
        </div>
            <div class="card-footer text-body-secondary">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Akhir Card Input-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url; ?>/bootstrap/css/bootstrap.css">
</head>
<body>
    
</body>
</html>

<div class="container mt-3">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>LOKASI</th>
            <th>TANGGAL</th>
            <th>JAM</th>
            <th>SUHU</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no =  1;
            $sql = mysqli_query($koneksi, "SELECT * FROM history_perjalanan hp 
                                INNER JOIN lokasi lk on hp.id_lokasi = lk.id_lokasi
                                WHERE hp.nik = '".$_SESSION['nik']."'");
            while ($data = mysqli_fetch_array($sql)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$data['nama_lokasi']."</td>";
                echo "<td>".$data['tanggal_perjalanan']."</td>";
                echo "<td>".$data['waktu_perjalanan']."</td>";
                echo "<td>".$data['suhu_tubuh']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>

