<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <?php
        include("koneksi.php");
        $id = $_GET['id'];
        $cari = mysqli_query($koneksi, "select * from motor where id_motor='$id'");
        $data = mysqli_fetch_array($cari);
    ?>
    <div class="card">
        <h5 class="card-header">Ubah Data Motor</h5>
        <div class="card-body">
            <form method="POST" action="?a=umotor">
            <input type="hidden" name="kode" value="<?php echo $data['id_motor']; ?>">
                <div class="form-group">
                    <label>No. Polisi</label>
                    <input type="text" class="form-control" name="txtPolisi" value="<?php echo $data['no_polisi']; ?>">
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="txtMerk" value="<?php echo $data['merk']; ?>">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['tahun']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga_sewa']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
