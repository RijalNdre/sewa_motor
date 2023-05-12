<?php

include("koneksi.php");
session_start();
$password_lama = $_POST['txtPasswordLama'];
$username = $_POST['txtUsername'];

//uji
$tampil = mysqli_query($koneksi, "select * from akun where username = '$username' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    $password_baru = $_POST['txtPasswordBaru'];
    $konfirmasi_password = $_POST['txtKonfirmasiPasswordBaru'];

    if ($password_baru == $konfirmasi_password) {
        $pass_ok = $konfirmasi_password;
        $edit = mysqli_query($koneksi, "update akun set password = '$pass_ok'
        where id_akun = '$data[id_akun]'");
        if ($edit) {
            echo "<script>alert('Password berhasil diubah!'); 
            document.location = 'login.php'</script>";
        }
    }
    else{
        echo "<script>alert('Maaf, password baru dan konfirmasi password anda tidak sama!'); 
            document.location = 'lupa_password.php'</script>";

    }
} 
else {
    echo "<script>alert('Password lama tidak sesuai!'); 
    document.location = 'lupa_password.php'</script>";
}
