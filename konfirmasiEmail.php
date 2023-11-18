<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['daftar'])){


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    $nama_user = $_POST['name'];
    $email_user = $_POST['email'];

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kodinglatihan@gmail.com';                     //SMTP username
    $mail->Password   = 'dtyryyxrpxkofoqs';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kodinglatihan@gmail.com', 'Percobaan');
    $mail->addAddress($email_user);      //Add a recipient

    $mail->addReplyTo('kodinglatihan@gmail.com', 'Percobaan');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Konfirmasi Pendaftaran';
    $mail->Body    = 'Selamat <b>'.$nama_user.'</b>, anda berhasil melakukan pendaftaran.';

    if($mail->send()){
        echo "<script>
        alert('Email konfirmasi pendaftaran berhasil terkirim. Silahkan cek Email Anda!');
        </script>";
    } else{
        echo "<script>
        alert('Email konfirmasi pendaftaran tidak dapat terkirim. Mailer Error: {$mail->ErrorInfo}');
        </script?";
    }
    
}
else{
    echo "Tekan tombol daftar";
} 
?>