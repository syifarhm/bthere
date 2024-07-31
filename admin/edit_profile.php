<?php
include("../config.php");
$id_admin = $_POST['id_admin'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$no_hp = $_POST['no_hp'];
$lokasi_file = $_FILES['poto']['tmp_name'];
$nama_file = $_FILES['poto']['name'];
//md5 berguna utk enkripsi

//echo $id_relawan . "-" . $username . "-" . $nama_lengkap . "-" . $tempat_lahir . "-" . $tanggal_lahir . "-" . $alamat . "-" . $no_hp . "-" . $lokasi_file . "-" . $nama_file;


if (!empty($lokasi_file)) {
    $poto = "../img/team/" . date("y-m-d h-i-sa") . $nama_file;
    move_uploaded_file($lokasi_file, $poto);
    $sql = "UPDATE admin SET nama_lengkap = '$nama_lengkap', username = '$username', no_hp = '$no_hp', poto = '$poto' WHERE id_admin = '$id_admin'";
    $query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");
} else {
    $poto = "../img/team/" . date("y-m-d h-i-sa") . $nama_file;
    move_uploaded_file($lokasi_file, $poto);
    $sql = "UPDATE admin SET nama_lengkap = '$nama_lengkap', username = '$username', no_hp = '$no_hp' WHERE id_admin = '$id_admin'";
    $query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");
}

if ($query) {
    echo "<script>alert('Edit Admin Sukses!')</script>";
    echo "<script>top.location = 'profil_admin.php?id_admin=" . $id_admin . "'</script>";
} else {
    echo "<script>alert('Edit Admin Gagal!')</script>";
    echo "<script>top.location = 'profil_admin.php?id_admin=" . $id_admin . "'</script>";
}
