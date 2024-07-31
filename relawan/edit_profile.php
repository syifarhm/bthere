<?php
include("../config.php");
$id_relawan = $_POST['id_relawan'];
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$lokasi_file = $_FILES['poto']['tmp_name'];
$nama_file = $_FILES['poto']['name'];
//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $username . "-" . $nama_lengkap . "-" . $tempat_lahir . "-" . $tanggal_lahir . "-" . $alamat . "-" . $no_hp . "-" . $lokasi_file . "-" . $nama_file;


if (!empty($lokasi_file)) {
    $poto = "../img/relawan/" . date("y-m-d h-i-sa") . $nama_file;
    move_uploaded_file($lokasi_file, $poto);
    $sql = "UPDATE relawan SET nama_lengkap = '$nama_lengkap', username = '$username', tempat_lahir = '$tempat_lahir',  tanggal_lahir =  '$tanggal_lahir', alamat = '$alamat', no_hp = '$no_hp', poto = '$poto' WHERE id_relawan = '$id_relawan'";
    $query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");
} else {
    $poto = "../img/relawan/" . date("y-m-d h-i-sa") . $nama_file;
    move_uploaded_file($lokasi_file, $poto);
    $sql = "UPDATE relawan SET nama_lengkap = '$nama_lengkap', username = '$username', tempat_lahir = '$tempat_lahir',  tanggal_lahir =  '$tanggal_lahir', alamat = '$alamat', no_hp = '$no_hp' WHERE id_relawan = '$id_relawan'";
    $query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");
}

if ($query) {
    echo "<script>alert('Edit Relawan Sukses!')</script>";
    echo "<script>top.location = 'profil.php?id_relawan=" . $id_relawan . "'</script>";
} else {
    echo "<script>alert('Edit Relawan Gagal!')</script>";
    echo "<script>top.location = 'profil.php?id_relawan=" . $id_relawan . "'</script>";
}
