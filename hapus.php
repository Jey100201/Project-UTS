<?php
    if($_GET['id_barang']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from barang_masuk where id_barang='".$_GET['id_barang']."'");
        if($qry_hapus){
            echo "<script>alert('sukses hapus data');location.href='tampil_barang.php';</script>";
        }
        else {
            echo "<script>alert('gagal hapus data');location.href='tampil_barang.php';</script>";
        }
    }
?>