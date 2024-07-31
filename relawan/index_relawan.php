<?php
include("../config.php");
session_start();
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
    WELCOME RELAWAN!! <?php echo $_SESSION['username']; ?>
</body>

</html>