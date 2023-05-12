<?php
include ("koneksi.php");
$id=$_GET['id'];
$hapus = mysqli_query($koneksi, "delete from motor where id_motor = '$id'");
if ($hapus) {
    header("Location:index.php?a=motor");
}