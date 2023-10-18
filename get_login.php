<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //-- Cek Apakah username dan passwordnya ada di tabel pengguna
    $sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username ='".$username."' AND password ='".$password."'");
    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        //--kalau datanya ada--
        $data = mysqli_fetch_array($sql);
        $_SESSION['login'] = "Sudah Login";
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['nik'] = $data['nik'];
        header("location: admin/beranda.php");
}else{
?>
<!--Awal Modal -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
            <h1 h1 class="modal-title fs-5" id="exampleModalLabel">Gagal Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Username Atau Password Salah!
        </div>
            <div class="modal-footer">
                <a href="login.php" class="btn btn-danger">Kembali Ke Halaman Login</a>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'),{})
    myModal.show()  
</script>
<!--Akhir Modal-->
<?php
        //echo "Username Atau Password Salah!";
    }
?>