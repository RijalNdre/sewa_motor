<?php

include ("koneksi.php");
$nama = $_POST['txtNama'];
$ktp = $_POST['txtKTP'];
$alamat = $_POST['txtAlamat'];
$telepon = $_POST['txtTelepon'];
$polisi = $_POST['polisi'];
$tujuan = $_POST['txtTujuan'];
$tglorder = new DateTime ($_POST['txtOrder']);
$tglkembali = new DateTime ($_POST['txtKembali']);
$selisih = $tglkembali->diff($tglorder);
$x = $selisih->d;
$lama = $_POST['txtLama'];
$cari = mysqli_query($koneksi, "select * from motor where no_polisi = '$polisi'");
$data = mysqli_fetch_array($cari);
$harga = $x*$data['harga_sewa'];
$simpan = mysqli_query($koneksi, "insert into pesanan (nama, no_ktp, alamat, no_telp, no_polisi,
tujuan, tgl_order, tgl_kembali, lama_sewa, harga_total) values ('$nama', '$ktp', '$alamat', '$telepon', '$polisi', '$tujuan', 
'$_POST[txtOrder];', '$tglkembali', '$lama', '$harga' )");

if ($simpan){
    header ("Location:index.php?a=order");
}


?>