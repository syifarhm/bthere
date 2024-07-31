<?php
include("../config.php");
session_start();
$id_admin = $_SESSION['id_admin'];
$id_acara = $_GET['id_acara'];


//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $acara;


$sql = "DELETE FROM acara WHERE id_acara = '$id_acara'";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil Hapus acara!')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Gagal Hapus acara!')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
}
