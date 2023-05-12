<?php

include("koneksi.php");
session_start();
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$coba = mysqli_query ($koneksi, "select * from akun where username = '$username' and password = '$password'");

$tampung_data = mysqli_fetch_array($coba);
$num_data = mysqli_num_rows($coba);

if ($num_data >= 1){
    $_SESSION['username'] = $tampung_data['username'];
    $_SESSION['id_akun'] = $tampung_data['id_akun'];
    header("Location:index.php");
}
else{
    ?>
    <script type="text/javascript">
        alert("Username atau Password Salah!")
    </script>
    <?php
    header("Location:login.php");
}
?>
















?>