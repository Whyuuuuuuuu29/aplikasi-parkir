<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tbl_parkir WHERE id_kendaraan = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>