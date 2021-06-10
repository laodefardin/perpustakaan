<?php
  error_reporting(0);
    session_start();

    include "koneksi.php";
    include "function.php";

    if($_SESSION['admin'] || $_SESSION['user'] || $_SESSION['siswa']){

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Perpustakaan | SMKN 1 Bulukumba</title>
    <!-- FAVICON-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/dashboard/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Perpus SMKN1BLK</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" class="text-capitalize">Hi,
                    <?php echo $_SESSION[nama]; ?> <i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="?page=pengguna">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master Data</div>
                        <?php if ($_SESSION['admin'] || $_SESSION['user']) {?>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatabuku"
                            aria-expanded="false" aria-controls="collapseDatabuku">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data Buku
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDatabuku" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?page=lokasi"><small>Lokasi Buku</small></a>
                                <a class="nav-link" href="?page=buku"><small>Buku</small></a>
                                <a class="nav-link" href="?page=ebook"><small>Ebook</small></a>
                            </nav>
                        </div>
                        <a class="nav-link" href="?page=anggota">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data Anggota
                        </a>
                        <?php }?>
                        <a class="nav-link" href="?page=transaksi">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Transaksi
                        </a>

                        <a class="nav-link" href="?page=ebook">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Ebook
                        </a>

                        <?php if ($_SESSION['admin']) {?>
                        <div class="sb-sidenav-menu-heading">Lain-lain</div>
                        <a class="nav-link" href="?page=pengguna">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Petugas
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
                            aria-expanded="false" aria-controls="collapseLaporan">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Laporan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLaporan" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?page=buku&aksi=cetak"><small>Laporan Buku</small></a>
                                <a class="nav-link" href="?page=anggota&aksi=cetak"><small>Laporan Anggota</small></a>
                                <a class="nav-link" href="?page=transaksi&aksi=cetak"><small>Laporan
                                        Transaksi</small></a>
                            </nav>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <!-- DATETIME SIDE-->
                <div class="sb-sidenav-footer">
                    <div style="color: white; padding: 5px 50px 5px 50px; float: none; font-size: 14px;">
                        <?php echo date('d-M-Y'); ?> &nbsp;
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <!-- MAIN KONTEN 1-->
                    <?php
                        include "home.php" ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- MAIN KONTEN 2-->
                            <?php
                                $page = $_GET['page'];
                                $aksi = $_GET['aksi'];

                                if ($page == "buku") {
                                    if ($aksi == "") {
                                        include "page/buku/buku.php";
                                    }elseif ($aksi== "tambah") {
                                        include "page/buku/tambah.php";
                                    }elseif ($aksi== "ubah") {
                                        include "page/buku/ubah.php";
                                    }elseif ($aksi== "hapus") {
                                        include "page/buku/hapus.php";
                                    }elseif ($aksi== "cetak") {
                                        include "page/buku/form_laporan_buku.php";
                                    }
                                }elseif ($page == "lokasi" ) {
                                    if ($aksi == "") {
                                        include "page/lokasi/lokasi.php";
                                    }elseif ($aksi == "tambah") {
                                        include "page/lokasi/tambah.php";
                                    }elseif ($aksi == "ubah") {
                                        include "page/lokasi/ubah.php";
                                    }elseif ($aksi == "hapus") {
                                        include "page/lokasi/hapus.php";
                                    }
                                }elseif ($page == "ebook" ) {
                                    if ($aksi == "") {
                                        include "page/ebook/ebook.php";
                                    }elseif ($aksi == "tambah") {
                                        include "page/ebook/tambah.php";
                                    }elseif ($aksi == "ubah") {
                                        include "page/ebook/ubah.php";
                                    }elseif ($aksi == "hapus") {
                                        include "page/ebook/hapus.php";
                                    }
                                }elseif ($page == "anggota" ) {
                                    if ($aksi == "") {
                                        include "page/anggota/anggota.php";
                                    }elseif ($aksi == "tambah") {
                                        include "page/anggota/tambah.php";
                                    }elseif ($aksi == "ubah") {
                                        include "page/anggota/ubah.php";
                                    }elseif ($aksi == "hapus") {
                                        include "page/anggota/hapus.php";
                                    }elseif ($aksi== "cetak") {
                                        include "page/anggota/form_laporan_anggota.php";
                                    }
                                }elseif ($page == "transaksi" ) {
                                    if ($aksi == "") {
                                        include "page/transaksi/transaksi.php";
                                    }elseif ($aksi == "tambah") {
                                        include "page/transaksi/tambah.php";
                                    }elseif ($aksi == "kembali") {
                                        include "page/transaksi/kembali.php";
                                        }elseif ($aksi == "diambil") {
                                        include "page/transaksi/diambil.php";
                                    }elseif ($aksi == "perpanjang") {
                                        include "page/transaksi/perpanjang.php";
                                    }elseif ($aksi== "cetak") {
                                        include "page/transaksi/form_laporan_transaksi.php";
                                    }
                                }elseif ($page == "pengguna" ) {
                                    if ($aksi == "") {
                                        include "page/pengguna/pengguna.php";
                                    }elseif ($aksi == "tambah") {
                                        include "page/pengguna/tambah.php";
                                    }elseif ($aksi == "ubah") {
                                        include "page/pengguna/ubah.php";
                                    }elseif ($aksi == "hapus") {
                                        include "page/pengguna/hapus.php";
                                    }
                                }elseif ($page=="") {
                                    include "dashboard.php";
                                }
                                ?>

                        </div>
                    </div>
            </main>
            <!-- FOOTER-->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/dashboard/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/dashboard/assets/demo/datatables-demo.js"></script>
</body>

</html>

<?php
    }else{
        header("location:login.php");
    }
?>