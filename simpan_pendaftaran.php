<?php
include("koneksi.php");
$nama = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$simpan = mysqli_query ($koneksi, "insert into akun (nama_lengkap, alamat, username, password) 
values ('$nama', '$alamat', '$username', '$password')");
if ($simpan){
    header ("Location:login.php");
}
