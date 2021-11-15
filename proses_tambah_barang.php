<?php 
    if($_POST){
        $nama_barang = $_POST ['nama'];
        $tanggal_masuk = $_POST['tanggal_masuk'];
        $harga_barang = $_POST['harga_barang'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($nama_barang)) {
            echo "<script>alert alert-warning('Nama barang tidak boleh kosong');location.href='tambah_data_barang.php';
            </script>";
        } elseif (empty($tanggal_masuk)) {
            echo "<script>alert('tanggal tidak boleh kosong');location.href='tambah_data_barang.php';</script>";
        }elseif (empty($harga_barang)) {
            echo "<script>alert('Harga barang tidak boleh kosong');location.href='tambah_data_barang.php';
            </script>";
        }
        else {
            include "koneksi.php";
            $insert = mysqli_query($conn, "insert into barang_masuk (nama, tanggal_masuk, harga_barang)
            value ('".$nama."', '".$tanggal_masuk."', '".$harga_barang."')")or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>alert('sukses menambahkan data barang');location.href='tampil_barang.php';</script>";
            }
            else {
                echo "<script>alert('gagal menambahkan data barang');location.href='tambah_data_barang.php';</script>";
            }
        }
    }
?>