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
    $cari = mysqli_query($koneksi, "select * from motor");
    ?>
    <div class="card">
        <h5 class="card-header">Tambah Data Pesanan</h5>
        <div class="card-body">
            <form method="POST" action="?a=sorder">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="txtNama">
                </div>
                <div class="form-group">
                    <label>No. KTP</label>
                    <input type="text" class="form-control" name="txtKTP">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="txtAlamat">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" class="form-control" name="txtTelepon">
                </div>
                <div class="form-group">
                    <label>No. Polisi</label>
                    <select name="polisi" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php
                        while ($data = mysqli_fetch_array($cari)) {
                        ?>
                            <option value="<?php echo $data['id_motor']; ?>"><?php echo $data['no_polisi'] . " - " . $data['merk']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="txtTujuan">
                </div>
                <div class="form-group">
                    <label>Tgl Order</label>
                    <input type="date" class="form-control" name="txtOrder">
                </div>
                <div class="form-group">
                    <label>Tgl Kembali</label>
                    <input type="date" class="form-control" name="txtKembali">
                </div>
                <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="text" class="form-control" name="txtLama">
                </div>
                <div class="form-group">
                    <label>Harga Total</label>
                    <input type="text" class="form-control" name="txtTotal">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>