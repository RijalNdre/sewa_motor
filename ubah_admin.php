<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="card">
        <h5 class="card-header">Ubah Admin</h5>
        <div class="card-body">
            <form method="POST" action="?a=uperubahan">
                <?php
                include("koneksi.php");
                $id = $_GET['id'];
                $cari = mysqli_query($koneksi, "select * from akun where id_akun = '$id'");
                $data = mysqli_fetch_array($cari);
                ?>
                <input type="hidden" name="kode" value="<?php echo $data['id_akun'];?>"> 
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama_lengkap'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="txtAlamat" value="<?php echo $data['alamat'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="txtUsername" value="<?php echo $data['username'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword" value="<?php echo $data['password'];?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    <!--
        
            <label>Option</label>
            <select name="kelamin" class="form-control">
                <option value = "echo $data ['jenis_kelamin'];"> echo $data ['jenis_kelamin'];</option>
                <option value="Laki-Laki">Laki - Laki</option>
                <option value="Permepuan">Perempuan</option>
            </select>

    -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>