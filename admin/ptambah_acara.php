<?php
include("../config.php");
session_start();
$id_admin = $_SESSION['id_admin'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$penyelenggara = $_POST['penyelenggara'];
//$lokasi_file = $_FILES['poto']['tmp_name'];
//$nama_file = $_FILES['poto']['name'];
//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $username . "-" . $nama_lengkap . "-" . $tempat_lahir . "-" . $tanggal_lahir . "-" . $alamat . "-" . $no_hp . "-" . $lokasi_file . "-" . $nama_file;

echo $nama . "-" . $tempat . "-" . $waktu . "-" . $penyelenggara;

$sql = "INSERT INTO acara (nama, tempat,  waktu, tanggal, id_admin, penyelenggara, deskripsi) VALUE ('$nama', '$tempat',  '$waktu', '$tanggal', '$id_admin', '$penyelenggara','$deskripsi') ";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    echo "<script>alert('Berhasil  yeay menambahkan acara')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Gagal Bergabung menjadi relawan!')</script>";
    echo "<script>top.location = 'set_acara.php?id_admin=" . $id_admin . "'</script>";
}
