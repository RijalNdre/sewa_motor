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
    $coba_konek = mysqli_query($koneksi, "select * from motor");
    ?>
    <table class="table table-hover table-bordered mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>No. Polisi</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Harga Sewa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($coba_konek)) {

            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['no_polisi']; ?></td>
                    <td><?php echo $data['merk']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['harga_sewa']; ?></td>
                    <td>
                        <a href="?a=hmotor&id=<?php echo $data['id_motor'];?>" class="btn btn-danger">Hapus</a>
                        <a href="?a=emotor&id=<?php echo $data['id_motor'];?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="?a=tmotor" class="btn btn-primary">Tambah</a>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>