<?php
include("../config.php");
session_start();
$id_admin = $_SESSION['id_admin'];
$id_acara = $_POST['id_acara'];
$deskripsi = $_POST['deskripsi'];

echo $deskripsi;

$sql = "UPDATE acara SET deskripsi = '$deskripsi' WHERE id_acara = '$id_acara'";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil yeay Update Deskripsi!!')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Gagal Update Deskripsi :( ')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
}
