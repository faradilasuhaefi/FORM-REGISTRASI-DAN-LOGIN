<?php
require "koneksi.php";

session_start();

//jika user klik tombol
if (isset($_POST["login"])){

    if(login($_POST) > 0){
        echo "<script>
        alert('Login Berhasil!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('Login Gagal! Email atau Password yang anda masukkan salah.');
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
        <title>Login</title>
    </head>

    <body class="bg-white">

        <form action="" method="POST">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                    <h3 class="text-center p-3">Sign In Akun</h3>
                    <hr>
                    <p class="text-center text-muted lead"></p>
                    <!--- form start-->
                    <form method="POST" class="login-form" id="login-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="off"/>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="login" id="login" class="btn btn-success">Login</button>
                            <p class="text-center text-muted mt-2">Belum punya akun? <a href="registrasi.php">Daftar</a></p>
                        </div>
                    </form>
                    <!--- form close-->
                </div>
            </div>
        </div>
        </form>

    </body>
        
</html>