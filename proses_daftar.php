<?php
include("config.php");
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
//md5 berguna utk enkripsi

echo $username . "-" . $email . "-" . $password;

//Memulai transaction
$mysqli->begin_transaction();

$sql = "INSERT INTO relawan (username, email, password) VALUE ('$username', '$email', '$password') ";
$query = mysqli_query($mysqli, $sql) or die("Tidak Ada Databse");

if ($query) {
    $mysqli->commit();
    echo "<script>alert('Berhasil Bergabung menjadi relawan!')</script>";
    echo "<script>top.location = 'index.php'</script>";
} else {
    $mysqli->rollback();
    echo "<script>alert('Gagal Bergabung menjadi relawan!')</script>";
    echo "<script>top.location = 'index.php'</script>";
}
