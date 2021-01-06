<?php
include '../../config/database.php';
if (isset($_GET['id'])) {
    $up = mysqli_query($kon, "DELETE FROM produk WHERE id = '$_GET[id]'");
    if (mysqli_affected_rows($kon)) {
        echo '<script language="javascript">alert ("Data Telah Terhapus");window.location="index.php";</script>';
    } else {
        echo '<script language="javascript">alert ("Data Gagal Terhapus");window.location="index.php";</script>';
    }
    $qurut = mysqli_query($kon, "SELECT * FROM produk ORDER BY id");
    $no = 1;
    while ($data = mysqli_fetch_array($qurut)) {
        $id = $data['id'];

        $query2 = "UPDATE produk SET id = $no WHERE id = $id";
        mysqli_query($kon, $query2);

        $no++;
    }
    $qurut = "ALTER TABLE produk  AUTO_INCREMENT = $no";
    mysqli_query($kon, $qurut);
}
