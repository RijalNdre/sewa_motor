<?php

if (isset($_GET['a'])) {
    switch ($_GET['a']) {
        case 'keluar':
            include("keluar.php");
            break;
        case 'admin':
            include("admin.php");
            break;
        case 'tadmin':
            include("tambah_admin.php");
            break;
        case 'uadmin':
            include("ubah_admin.php");
            break;
        case 'hadmin':
            include("hapus_admin.php");
            break;
        case 'uadmin':
            include("ubah_admin.php");
            break;
        case 'uperubahan':
            include("simpan_perubahan_admin.php");
            break;
        case 'motor':
            include("motor.php");
            break;
        case 'tmotor':
            include("tmotor.php");
            break;
        case 'smotor':
            include("smotor.php");
            break;
        case 'hmotor':
            include("hmotor.php");
            break;
        case 'emotor':
            include("emotor.php");
            break;
        case 'umotor':
            include("umotor.php");
            break;
        case 'order':
            include("order.php");
            break;
        case 'torder':
            include("torder.php");
            break;
        case 'sorder':
            include("sorder.php");
            break;
    }
} else {
    echo "<h3>Tidak ada aktivitas</h3>";
}
