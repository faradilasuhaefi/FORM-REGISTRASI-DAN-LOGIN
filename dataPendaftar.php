<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <title>Data Pendaftar</title>
    </head>

    <body class="bg-white">

        <div class="container">
        <div class="row mt-5">
            <h3 class="p-1">DATA PENDAFTAR</h3>
                <?php 
                $no=1; 
                while($user = mysqli_fetch_assoc($sql1)) {
                ?>
            <table class="table"> 
                <tr>
                    <td width="100px"><?php echo $no++; ?></td>
                    <td width="450px"><?=$user['nama_user']?>&nbsp;</td>
                    <td width="300px"><?=$user['email_user']?>&nbsp;</td>
                    <td><?=$user['alamat_user']?>&nbsp;</td>
                </tr>
        </table>
        <?php
            }
            ?>

        </div>
        </div>
    </body>  
</html>