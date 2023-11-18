<?php
require "koneksi.php";

session_start();

if (!isset($_SESSION['login'])) {
header("location:login.php");
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
        <title>Beranda</title>
    </head>

    <body class="bg-white">

        <div class="container">
        <div class="row mt-5">
            <h4 class="text-center">Selamat Datang <?php echo $_SESSION['nama_user']?></h4>
            <h4 class="text-center">Anda Berhasil Login</h4>
            <h5 class="text-center"><a href="logout.php">Logout</a></h5>
        </div>
        </div>
    </body>
        
</html>