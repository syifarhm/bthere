<?php
include("../config.php");
session_start();
$id_admin = $_GET['id_admin'];
//echo "Apa kabs";
//$id_relawan = $_GET['id_relawan'];
$data = mysqli_query($mysqli, "SELECT * FROM acara ");
//$dra = mysqli_fetch_array($data);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Acara</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Icon-->
        <link rel="icon" type="image/x-icon" href="../img/b.ico" />
        <link rel="stylesheet" href="css/style.css " />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Be There</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!--<div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>-->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="profil_admin.php?id_admin=<?php echo $_SESSION['id_admin']; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Profile
                            </a>
                            <a class="nav-link" href="set_relawan.php?id_admin=<?php echo $_SESSION['id_admin']; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Relawan
                            </a>
                            <a class="nav-link" href="set_acara.php?id_admin=<?php echo $_SESSION['id_admin']; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Acara
                            </a>
                            <a class="nav-link" href="team.php?id_admin=<?php echo $_SESSION['id_admin']; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tambah Team
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables Acara</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <!--<div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>-->
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <!-- MEnambahkan acara -->
                            
                            <div class="card-body">
                            
                                <a href="tambah_acara.php?id_admin=<?php echo $id_admin; ?>" class="btn btn-primary">Tambah ACARA</a><br><br>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <!--<th>No</th>-->
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Tempat</th>
                                            <th>Tanggal</th>
                                            <th>Penyelenggara</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <?php
                                            //$no = 1;
                                            while ($dra = mysqli_fetch_array($data)) {


                                            ?>
                                                <!--<td><?php echo $no; ?></td>-->
                                                <td><?php echo $dra['nama']; ?></td>
                                                <td><?php echo $dra['waktu']; ?></td>
                                                <td><?php echo $dra['tempat']; ?></td>
                                                <td><?php echo $dra['tanggal']; ?></td>
                                                <td><?php echo $dra['penyelenggara']; ?></td>
                                                <td>
                                                    <a href="detail_acara.php?id_acara=<?php echo $dra['id_acara']; ?>" class="btn btn-warning">Detail</a>
                                                    <a href="hapus_acara.php?id_acara=<?php echo $dra['id_acara']; ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                                <!--<td><?php echo $dra['deskripsi']; ?></td>-->
                                                <!--<td><//?php
                                                    $s = $dra['status'];
                                                    if ($s == 0) echo "Belum Terkonfirmasi";
                                                    elseif ($s == 2) echo "Diterima";
                                                    else echo "Ditolak";
                                                    ?></td>-->
                                                <!--<td>
                                                    <a href="detail.php?id_relawan=<?php echo $dra['id_relawan']; ?>" class="btn btn-warning">Detail</a>
                                                    <a href="hapus_relawan.php?id_relawan=<?php echo $dra['id_relawan']; ?>" class="btn btn-danger">Hapus</a>
                                                </td>-->

                                        </tr>
                                        <?php
                                               
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
