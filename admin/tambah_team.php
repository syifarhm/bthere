<?php
include("../config.php");
session_start();
$id_admin = $_GET['id_admin'];


//$id_admin = $_POST['id_admin'];
$email = $_POST['email'];
//$username = $_POST['$username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];

//var_dump($email);
//var_dump($username);

$sql = "INSERT INTO admin (email,   password,  nama_lengkap, no_hp) VALUE ('$email', '$password', '$nama_lengkap', '$no_hp') ";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");



if ($query) {
    echo "<script>alert('Berhasil Menambahkan Anggota Team')</script>";
    echo "<script>top.location = 'team.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Edit Admin Gagal!')</script>";
    echo "<script>top.location = 'team.php?id_admin=" . $id_admin . "'</script>";
}