<?php

$con = mysqli_connect("localhost", "root", "", "db_registrasi");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}

function registrasi($data){
    global $con;

    $nama_user = mysqli_real_escape_string($con, $data["name"]);
    $email_user = strtolower(stripslashes($data["email"]));
    $alamat_user = mysqli_real_escape_string($con, $data["alamat"]);
    $password_user = mysqli_real_escape_string($con, md5($data["password"]));

// tambah data user ke database
mysqli_query($con, "INSERT INTO registrations VALUES('', '$nama_user', '$email_user', '$alamat_user', '$password_user')");

return mysqli_affected_rows($con);
}

function login($data){
    global $con;
    $email_user = mysqli_real_escape_string($con, $data["email"]);
    $password_user = mysqli_real_escape_string($con, md5($data["password"]));

    $_SESSION['login'] = $_POST['login'];

// cari data user
$ambil = mysqli_query($con, "SELECT * FROM registrations WHERE email_user='$email_user' AND password_user='$password_user'");

if(mysqli_num_rows($ambil) === 1){
    $data=mysqli_fetch_assoc($ambil);
    $_SESSION['nama_user'] = $data['nama_user'];

}
return mysqli_affected_rows($con);
}

// tampilkan data pendaftar
$sql1 = mysqli_query($con, "SELECT id_user, nama_user, email_user, alamat_user FROM registrations");
?>