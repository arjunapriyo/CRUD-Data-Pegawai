<?php
if ($_GET['id']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM `tabel_pegawai` WHERE `id`='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus pegawai');location.href='tampil_pegawai.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus pegawai');location.href='tampil_pegawai.php';</script>";
    }
}
?>