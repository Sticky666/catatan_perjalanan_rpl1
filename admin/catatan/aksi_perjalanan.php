<?php
    session_start();
    include "../../koneksi.php";
    if(empty($_SESSION['login']) AND $_SESSION['level'] != 'masyarakat'){
    header('location: ../login.php');
    }

    $id_lokasi = $_POST['id_lokasi'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $nik = $_SESSION['nik'];
    $tanggal_perjalanan = date('Y-m-d');
    $waktu_perjalanan = date('H:i:s');

    // Simpan Data
    $sql = mysqli_query($koneksi, "INSERT INTO history_perjalanan VALUES(NULL, '".$tanggal_perjalanan."', '".$waktu_perjalanan."', '".$suhu_tubuh."', '".$nik."', '".$id_lokasi."')");
    //$sql = 'true';
    if($sql){
        //echo "berhasil input catatan";
?>
<!--Awal Modal -->
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
            <h1 h1 class="modal-title fs-5" id="exampleModalLabel">Berhasil !!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Catatan Berhasil Di Simpan
        </div>
            <div class="modal-footer">
                <a href="input_perjalanan.php" class="btn btn-primary">Simpan Perubahan</a>
            </div>
        </div>
    </div>
</div>
<script src="../../bootstrap/js/bootstrap.bundle.js"></script>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'),{})
    myModal.show()  
</script>
<!--Akhir Modal-->
<?php
    }else{
?>
<!--Awal Modal 2 -->
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">

<!-- Modal 2 -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
            <h1 h1 class="modal-title fs-5" id="exampleModalLabel">GAGAL !!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Catatan Perjalanan Gagal Di Simpan
        </div>
            <div class="modal-footer">
                <a href="input_perjalanan.php" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
<script src="../../bootstrap/js/bootstrap.bundle.js"></script>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'),{})
    myModal.show()
</script>
<!--Akhir Modal 2-->
<?php
        //echo "gagal input catatan";
    }
?>