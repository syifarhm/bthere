<?php
include("../config.php");
session_start();
$id_admin = $_SESSION['id_admin'];
$id_relawan = $_GET['id_relawan'];


//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $acara;


$sql = "DELETE FROM relawan WHERE id_relawan = '$id_relawan'";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil Hapus Relawan!')</script>";
    echo "<script>top.location = 'set_relawan.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Gagal Hapus Relawan!')</script>";
    echo "<script>top.location = 'set_relawan.php?id_admin=" . $id_admin . "'</script>";
}
