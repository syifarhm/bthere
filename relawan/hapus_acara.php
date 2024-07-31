<?php
include("../config.php");
session_start();
$id_relawan = $_SESSION['id_relawan'];
$id_relawan_acara = $_GET['id_relawan_acara'];


//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $acara;


$sql = "DELETE FROM relawan_acara WHERE id_relawan_acara = '$id_relawan_acara'";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil Hapus Acara!')</script>";
    echo "<script>top.location = 'acara.php?id_relawan=" . $id_relawan . "'</script>";
} else {
    echo "<script>alert('Gagal Hapus Acara!')</script>";
    echo "<script>top.location = 'acara.php?id_relawan=" . $id_relawan . "'</script>";
}
