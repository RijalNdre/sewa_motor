<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
    <?php
    include("koneksi.php");
    $cari = mysqli_query($koneksi, "select * from motor, pesanan where motor.id_motor=pesanan.id_order");
    ?>
    <table class="table table-hover table-bordered mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>No. Polisi</th>
                <th>Merk</th>
                <th>Nama</th>
                <th>No. KTP</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Tujuan</th>
                <th>Tgl Pesan</th>
                <th>Tgl Kembali</th>
                <th>Lama Sewa</th>
                <th>Harga Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($cari)) {

            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['no_polisi']; ?></td>
                    <td><?php echo $data['merk']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['no_ktp']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['no_telp']; ?></td>
                    <td><?php echo $data['tujuan']; ?></td>
                    <td><?php echo $data['tgl_order']; ?></td>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                    <td><?php echo $data['lama_sewa']; ?></td>
                    <td><?php echo $data['harga_total']; ?></td>
                    <td>
                        <button>
                            <a href="?a=horder&id=<?php echo $data['id_pesanan'];?>" class="btn btn-danger">Hapus</a>
                            <a href="?a=eorder&id=<?php echo $data['id_pesanan'];?>" class="btn btn-warning">Ubah</a>
                        </button>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="?a=torder" class="btn btn-primary">Tambah Pesanan</a>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>