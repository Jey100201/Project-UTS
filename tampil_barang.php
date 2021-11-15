<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>Data Barang</h3>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>TANGGAL MASUK</th>
            <th>HARGA BARANG</th>
            <th>AKSI</th>
        </thead>
        <?php 
        include "koneksi.php";
        $qry_barang_masuk=mysqli_query($conn, "select * from barang_masuk join penjualan on penjualan.id_penjualan=barang_masuk.id_penjualan");
        $no=0;
        while ($databarang=mysqli_fetch_array($qry_barang_masuk)) {
            $no++;?>
            <tr>
                <td><?=$no?></td><td><?=$databarang['nama']?></td>
                <td><?=$databarang['tanggal_masuk_barang']?></td>
                <td><?=$databarang['harga_barang']?></td>
                <td><a href="hapus.php?id_barang=<?=$databarang['id_barang']?>" onclick="return confirm('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>