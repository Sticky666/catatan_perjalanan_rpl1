<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-info d-flex flex-column min-vh-100">
    <?php include "header.php"; ?>

    <div class="container">
        <div class="row mt-5 pt-3">
            <div class="col-lg-6 m-auto">
                <div class="card border-1 shadow">
                    <div class="card-body">
                        <form action="get_login.php" method="POST">
                        <!-- title -->
                        <div class="row my-3">
                            <div class="col-lg-12 text-center">
                                <h3>PERJALANANKU</h3>
                            </div>
                        </div>
                        <!-- Akhir title -->
                        <!-- user -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <input type="text" name="username" id="" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <!-- Akhir user -->
                        <!-- pass -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <input type="password" name="password" id="" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <!-- Akhir pass -->
                        <!-- Button -->
                        <div class="row my-3">
                            <div class="col-lg-12">
                                <input type="submit" value="Masuk" class="form-control btn btn-primary">
                                <p class="mt-3 text-center">Anda Belum Punya Akun? <a href='registrasi/pendaftaran.php'>Klik Disini</a> Untuk Registrasi</p>
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
    <?php include "footer.php"; ?>
    </footer>
</body>
</html>