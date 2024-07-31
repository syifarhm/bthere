<?php
include("../config.php");
session_start();
$id_relawan = $_SESSION['id_relawan'];
$id_acara = $_POST['acara'];

//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $acara;


$sql = "INSERT INTO relawan_acara (id_relawan, id_acara) VALUE ('$id_relawan', '$id_acara') ";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil Daftar Acara!')</script>";
    echo "<script>top.location = 'acara.php?id_relawan=" . $id_relawan . "'</script>";
} else {
    echo "<script>alert('Gagal Daftar Acara!')</script>";
    echo "<script>top.location = 'acara.php?id_relawan=" . $id_relawan . "'</script>";
}
