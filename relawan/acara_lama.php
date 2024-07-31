<?php
include("../config.php");
session_start();
$id_relawan = $_GET['id_relawan'];
$data = mysqli_query($mysqli, "SELECT a.nama, ra.id_acara , ra.status, ra.id_relawan_acara FROM relawan_acara ra JOIN acara a ON ra.id_acara = a.id_acara WHERE ra.id_relawan = '$id_relawan'");

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
    <h1>ACARA</h1>
    <a href="daftar_acara.php?id_relawan=<?php echo $id_relawan; ?>">DAFTAR ACARA</a>
    <table border>
        <tr>
            <th>No</th>
            <th>Acara</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            $no = 1;
            while ($dra = mysqli_fetch_array($data)) {


            ?>
                <td><?php echo $no; ?></td>
                <td><?php echo $dra['nama']; ?></td>
                <td><?php
                    $s = $dra['status'];
                    if ($s == 0) echo "Belum Terkonfirmasi";
                    elseif ($s == 0) echo "Diterima";
                    else echo "Ditolak";
                    ?></td>
                <td>
                    <a href="hapus_acara.php?id_relawan_acara=<?php echo $dra['id_relawan_acara']; ?>">Hapus</a>
                </td>

        </tr>
    <?php
                $no++;
            }
    ?>
    </table>
</body>

</html>