<?php
include ("koneksi.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$simpan = mysqli_query($koneksi, "insert into motor(no_polisi, merk, tahun, harga_sewa, status_motor) values ('$nopolisi', '$merk', '$tahun', '$harga', 'Aktif')");
if ($simpan) {
    header ("Location:index.php?a=motor");
}