<?php
require "koneksi.php";

//jika user klik tombol daftar
if (isset($_POST["daftar"])){

    if(registrasi($_POST) > 0){
        echo "<script>
        alert('Registrasi Berhasil!');</script>";
        include('konfirmasiEmail.php');
    } else {
        echo "<script>
        alert('Registrasi Gagal!');
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <title>Registrasi</title>
    </head>

    <body class="bg-white">

        <form action="" method="POST">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                    <h3 class="text-center p-4">Registrasi Akun Baru</h3>
                    <hr>
                    <p class="text-center text-muted lead"></p>
                    <!--- form start-->
                    <form method="POST" class="register-form" id="register-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-house"></i></span>
                            <input type="alamat" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="re_pass" id="re_pass" class="form-control" placeholder="Konfirmasi Password" required autocomplete="off"
                            onkeyup="check();"/>
                            <span id="message"></span>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="daftar" id="daftar" class="btn btn-success">Daftar</button>
                            <p class="text-center text-muted mt-2">Sudah punya akun? <a href="login.php">Login</a></p>
                        </div>
                    </form>
                    <!--form close-->
                </div>
            </div>
        </div>
        </form>
        
        <!--cek kesesuaian password-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
        $(function () {
            $("#daftar").click(function () {
                var password = $("#password").val();
                var password2 = $("#re_pass").val();
                if (password != password2) {
                    alert("Password tidak sama. Periksa kembali!");
                    return false;
                }
                return true;
            });
        });
        </script>

    </body>
        
</html>