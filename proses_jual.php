<?php 
    if($_POST){
        $nama_barang = $_POST ['nama_barang'];
        $tanggal_penjualan = $_POST['tanggal_penjualan'];
        $tanggal_expired = $_POST['tanggal_expired'];
        if (empty($nama_barang)) {
            echo "<script>alert alert-warning('Nama barang tidak boleh kosong');location.href='jual_barang.php';
            </script>";
        } elseif (empty($tanggal_penjualan)) {
            echo "<script>alert('tanggal tidak boleh kosong');location.href='jual_barang.php';</script>";
        }
        else {
            include "koneksi.php";
            $insert = mysqli_query($mysqli, "insert into penjualan (nama_barang, tanggal_penjualan, tanggal_expired)
            value ('".nama_barang."', '".tanggal_penjualan."', '".tanggal_expired."')")or die(mysqli_error($mysqli));
            if ($insert) {
                echo "<script>alert('sukses menjual barang');location.href='jual_barang.php';</script>";
            }
            else {
                echo "<script>alert('gagal menjual barang');location.href='jual_barang.php';</script>";
            }
        }
    }
?>