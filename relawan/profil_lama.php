<?php
include("../config.php");
session_start();
$id_relawan = $_GET['id_relawan'];
$data = mysqli_query($mysqli, "SELECT * FROM relawan WHERE id_relawan = '$id_relawan'");
$dr = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Relawan</title>
</head>

<body>
    <center>
        <hr>
        <a href="../relawan">Dashboard</a>
        <a href="profil.php?id_relawan=<?php $_SESSION['id_relawan']; ?>">Profil</a>
        <a href="acara.php?id_relawan=<?php $_SESSION['id_relawan']; ?>">Acara</a>
        <a href="logout.php?">LOGOUT</a>

        </hr>
    </center>

    <h1>Detail / Edit Profile Relawan</h1>

    <form action="edit_profile.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_relawan" value="<?php echo $dr['id_relawan']; ?>"><br><br>
        Nama Lengkap: <br>
        <input type="text" name="nama_lengkap" value="<?php echo $dr['nama_lengkap']; ?>"><br><br>
        Username: <br>
        <input type="text" name="username" value="<?php echo $dr['username']; ?>"><br><br>
        Email: <br>
        <?php echo $dr['email']; ?><br><br>
        Tempat Lahir: <br>
        <input type="text" name="tempat_lahir" value="<?php echo $dr['tempat_lahir']; ?>"><br><br>
        Tanggal Lahir: <br>
        <input type="text" name="tanggal_lahir" value="<?php echo $dr['tanggal_lahir']; ?>"><br><br>
        Alamat: <br>
        <textarea name="alamat"><?php echo $dr['alamat']; ?></textarea><br>
        Nomor Telepon: <br>
        <input type="text" name="no_hp" value="<?php echo $dr['no_hp']; ?>"><br><br>
        Foto<br>
        <img src="<?php echo $dr['poto']; ?>"><br>
        <input type="file" name="poto"><br><br>

        <input type="submit" value="Edit Data">
    </form>
</body>

</html>