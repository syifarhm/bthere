<?php
include("../config.php");
session_start();
$id_admin = $_SESSION['id_admin'];
$id_relawan_acara = $_POST['id_relawan_acara'];
$status = $_POST['status'];



$sql = "UPDATE relawan_acara SET status = '$status' WHERE id_relawan_acara = '$id_relawan_acara'";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");
//echo $sql;
if ($query) {
    echo "<script>alert('Berhasil Update Status!!')</script>";
    echo "<script>top.location = 'index.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Gagal Update Deskripsi :( ')</script>";
    echo "<script>top.location = 'index.php?id_admin=" . $id_admin . "'</script>";
}
