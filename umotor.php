<?php
include ("koneksi.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$kode = $_POST['kode'];
$simpan = mysqli_query($koneksi, "update motor set no_polisi='$nopolisi', merk='$merk', tahun='$tahun', harga_sewa='$harga' where id_motor='$kode'");
if ($simpan) {
    header ("Location:index.php?a=motor");
}