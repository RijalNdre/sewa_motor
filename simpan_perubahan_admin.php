<?php

include("koneksi.php");
$kode = $_POST['kode'];
$nama = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$simpan = mysqli_query ($koneksi, "update akun set nama_lengkap = '$nama' alamat = '$alamat', username = '$username', password = '$password'
where id_akun = '$kode'");
if ($simpan){
    header ("Location:index.php?a=admin");
}


?>