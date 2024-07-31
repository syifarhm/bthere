<?php
include("config.php");
session_start();
$email = trim($_POST['email']);
$password = trim($_POST['password']);

$login = mysqli_query($mysqli, "SELECT id_user, username, poto, role FROM user WHERE email = '$email' and password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if ($data['role'] == "1"){
        $_SESSION['email'] = $email;
		$_SESSION['role'] = "1";
        $_SESSION['username'] = $data['username'];
        $_SESSION['poto'] = $data['poto'];
        echo "<script>alert('Login admin berhasil!')</script>";
        echo "<script>top.location = 'admin/'</script>";
    } elseif ($data['role'] == "2"){
        $_SESSION['email'] = $email;
		$_SESSION['role'] = "2";
        $_SESSION['username'] = $data['username'];
        $_SESSION['poto'] = $data['poto'];
        echo "<script>alert('Login relawan berhasil!')</script>";
        echo "<script>top.location = 'relawan/'</script>";
    } else {
        echo "<script>alert('Anda gagal bergabung!')</script>";
        echo "<script>top.location = 'index.php'</script>";
    }
}