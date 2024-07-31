<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Relawan</title>
</head>

<body>
    <h1>BE THERE</h1>

    <h2>LOGIN RELAWAN</h2>
    <form action="login_relawan.php" method="post">
        Email<br>
        <input type="email" name="email" required>
        <br><br>
        Password<br>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="LOGIN">
    </form>
    <br>

    <h2>DAFTAR RELAWAN</h2>
    <form action="proses_daftar.php" method="post">
        Username:<br>
        <input type="text" name="username" required>
        <br><br>
        Email<br>
        <input type="email" name="email" required>
        <br><br>
        Password<br>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Gabung">
    </form>

</body>

</html>