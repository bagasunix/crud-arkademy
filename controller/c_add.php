<?php
include '../../config/database.php';
if (isset($_POST['upload'])) {
    extract($_POST);
    $cek_user = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM produk WHERE nama_produk='$_POST[prod_nm]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">alert ("Produk Sudah Ada");window.location="index.php?page=list";</script>';
        exit();
    } else {
        $up = mysqli_query($kon, "INSERT produk SET nama_produk='$prod_nm', harga='$prod_hrg', jumlah='$prod_jmlh', keterangan='$prod_desc'");
        if (mysqli_affected_rows($kon)) {
            echo '<script language="javascript">alert ("Data Telah Tersimpan");window.location="index.php";</script>';
            // echo 'Berhasil';
        } else {
            echo '<script language="javascript">alert ("Data Gagal Tersimpan");window.location="index.php?page=tambah";</script>';
            // echo 'Gagal';
        }
    }
}
