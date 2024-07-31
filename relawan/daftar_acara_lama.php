<?php
include("../config.php");
session_start();
$id_relawan = $_GET['id_relawan'];
$data = mysqli_query($mysqli, "SELECT id_acara, nama FROM acara ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be There!</title>
</head>

<body>
    <center>
        <hr>
        <a href="../relawan">Dashboard</a>
        <a href="profil.php?id_relawan=<?php echo $_SESSION['id_relawan']; ?>">Profil</a>
        <a href="acara.php?id_relawan=<?php echo $_SESSION['id_relawan']; ?>">Acara</a>
        <a href="logout.php?">LOGOUT</a>

        </hr>
    </center>
    <br>
    <h1>DAFTAR ACARA</h1>

    <form action="proses_daftar_acara.php" method="post">
        ACARA <br>
        <select name="acara">
            <?php
            while ($da = mysqli_fetch_array($data)) {
            ?>
                <option value="<?php echo $da['id_acara']; ?>"><?php echo $da['nama']; ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Daftar">
    </form>

</body>

</html>