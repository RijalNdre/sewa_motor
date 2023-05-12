<?php

include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "delete from akun where id_akun = '$id' ");
if ($hapus){
    header ("Location:index.php?a=admin");
}

?>