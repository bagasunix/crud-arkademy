<?php
// produk
$dir_produk = 'views';
$dir_produk_c = 'controller';

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "tambah";
            include "$dir_produk/v_add.php";
            break;
        case "edit";
            include "$dir_produk/v_edit.php";
            break;
    }
} else {
    include "views/v_list.php";
}

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "tambah";
            include "$dir_produk_c/c_add.php";
            break;
        case "edit";
            include "$dir_produk_c/c_edit.php";
            break;
        case "delete";
            include "$dir_produk_c/c_delete.php";
            break;
    }
} else {
}
