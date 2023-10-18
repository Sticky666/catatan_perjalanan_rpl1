<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body class="bg-info">
    <?php include "../header.php"; ?>

    <div class="container">
        <div class="row mt-5 pt-3">
            <div class="col-lg-6 m-auto">
                <div class="card border-1 shadow">
                    <div class="card-body">
                        <form action="aksi.php" method="POST">
                        <!-- title -->
                        <div class="row my-3">
                            <div class="col-lg-12 text-center">
                                <h3>Registrasi PERJALANANKU</h3>
                            </div>
                        </div>
                        <!-- Akhir title -->
                        <!-- nik -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                <input type="number" name="nik" id="" class="form-control" placeholder="Input NIK Anda">
                            </div>
                        </div>
                        <!-- Akhir nik -->
                        <!-- nama -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="Input Nama Lengkap Anda">
                            </div>
                        </div>
                        <!-- Akhir nama -->
                        <!-- user -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" name="username" id="" class="form-control" placeholder="Input Username Anda">
                            </div>
                        </div>
                        <!-- Akhir user -->
                        <!-- pass -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Input Password Anda">
                            </div>
                        </div>
                        <!-- Akhir pass -->
                        <!-- Alamat -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <br><textarea placeholder="Input Alamat Anda" name="alamat" id="" cols="30" rows="2" class="form-control"></textarea></br>
                            </div>
                        </div>
                        <!-- Akhir alamat -->
                        <!-- tempat lahir -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Input Tempat Lahir Anda">
                            </div>
                        </div>
                        <!-- Akhir tempat lahir -->
                        <!-- tgl lahir -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="" class="form-control" placeholder="Input Tanggal Lahir Anda">
                            </div>
                        </div>
                        <!-- Akhir tgl lahir -->
                        <!-- jenis kelamin -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                            Jenis Kelamin
                                <select name="jk" id="">
                                    <option value="laki">Laki Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select><br>
                            </div>
                        </div>
                        <!-- Akhir jenis kelamin -->
                        <!-- Button -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <input type="submit" value="Registrasi" class="form-control btn btn-primary">
                            </div>
                        </div>
                        <!--Akhir button-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-auto">
    <?php include "../footer.php"; ?>
    </footer>
</body>
</html>
