<?php
include '../../config/database.php';
if (isset($_POST['upload'])) {
    extract($_POST);

    $up = mysqli_query($kon, "UPDATE produk SET nama_produk='$prod_nm', harga='$prod_hrg', jumlah='$prod_jmlh', keterangan='$prod_desc' WHERE id = '$prod_id';");
    if (mysqli_affected_rows($kon)) {
        echo '<script language="javascript">alert ("Data Telah Terupdate");window.location="index.php";</script>';
        // echo 'Berhasil';
    } else {
        echo '<script language="javascript">alert ("Data Gagal Terupdate");window.location="index.php?page=edit";</script>';
        // echo 'Gagal';
    }
}
