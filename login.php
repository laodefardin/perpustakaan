<?php
    error_reporting(0);
    ob_start();
    
    session_start();


  include "koneksi.php";

  if($_SESSION['admin'] || $_SESSION['user']){
        header("location:index.php");
    }else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Perpustakaan | SMKN 1 Bulukumba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/main/css/styles.css" rel="stylesheet" />

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/main/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/main/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/main/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Perpus SMKN 1 Bulukumba</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Profil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">Tentang</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#Login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/images/tutwuri.png" alt="" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Sistem Informasi Perpustakaan</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">SMK Negeri 1 Bulukumba</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Profil SMKN 1 Bulukumba</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/visi.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/misi.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/profil.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead" align="justify">Sistem Informasi Perpustakaan SMK Negeri 1 Bulukumba adalah sistem
                        yang dibuat untuk memudahkan petugas perpustakaan dalam mengelola suatu perpustakaan</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead" align="justify">SMK Negeri 1 Bulukumba adalah salah satu Sekolah Menengah Kejuruan
                        yang pertama kali di dirikan di Kabupaten Bulukumba, Sulawesi Selatan dan merupakan sebuah
                        lembaga pendidikan kejuruan yang berstandar Nasional</p>
                </div>
            </div>
            <!-- About Section Button-->
        </div>
    </section>
    <!-- Login Section-->
    <section class="page-section" id="Login">
        <div class="container">
            <!-- Login Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Login form-->
                    <form role="form" method="POST">
                        <div class="control-group">
                            <div class="form-group input-group">
                                <span class="input-group-addon"></i></span>
                                <select name="user" id="user" class="form-control">
                                    <option>Pilih Login anda</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Siswa">Siswa</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group input-group">
                                <span class="input-group-addon"></i></span>
                                <input type="text" class="form-control" placeholder="Your Username" id="user"
                                    name="nama" required="required" autocomplete="off" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group input-group">
                                <span class="input-group-addon"></i></span>
                                <input type="password" class="form-control" placeholder="Your Password" id="pass"
                                    name="pass" required="required" autocomplete="off" />
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <input type="submit" class="btn btn-primary" name="login" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Alamat Sekolah</h4>
                    <p class="lead mb-0">
                        Jl. Teratai, Caile
                        <br />
                        Ujung Bulu, Kabupaten Bulukumba, Sulawesi Selatan
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Kontak</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">SMKN 1 BULUKUMBA</h4>
                    <p class="lead mb-0">
                        Kunjungi website SMK Negeri 1 Bulukumba
                        <a href="https://www.smkn1bulukumba.sch.id/">di Sini</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Your Website 2021</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal1Label">VISI</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5" align="justify">Menjadi sekolah yang berkualitas untuk menghasilkan
                                    tamatan yang berjiwa interpreniur, religius, kreatif, inovatif, berbudaya lingkungan
                                    hidup kompetitif di pasar global.</p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal2Label">MISI</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    <ol>
                                        <li align="justify">Menyenggarakan pendidikan dan pelatihan kejuruan yang
                                            berorientasi pada peningkatan mutu dan kebutuhan pasar</li>
                                        <li align="justify">Mengembangkan sikap religius dan nilai budaya lokal.</li>
                                        <li align="justify">Membuka dan membina jaringan kerja sama dengan dunia usaha,
                                            dan industri serta masyarakat.</li>
                                        <li align="justify">Mengembangkan profesionalisme dan akuntabilitas sekolah
                                            sebagai pusat pembudayaan ilmu pengetahuan, keterampilan, dan pengalaman.
                                        </li>
                                        <li align="justify">Mengembangkan budaya, disiplin, bersih, dan peduli
                                            lingkungan.</li>
                                    </ol>
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal3Label">PROFIL SEKOLAH</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5" align="justify">SMK Negeri 1 Bulukumba sebagai lembaga pendidikan
                                    kejuruan yang berstandar Nasional beralamat di Jalan Teratai Nomor 24, Telepon
                                    (0413) 81168, Fax. (0413) 83903, Kode Pos 92512 Bulukumba, Provinsi Sulawesi
                                    Selatan. Dirintis sejak 1969 dengan nama SMEA Negeri 14 Kajang, dengan Nomor SK
                                    14/UKK.3/69 tanggal 12 – 08 – 1969. Tahun 1979 dipindahkan ke Kota Bulukumba dengan
                                    nama SMEA Negeri Kajang di Bulukumba, dan tahun 1983 berubah menjadi SMEA Negeri
                                    Bulukumba dengan keputusan Dirjen. Dikdasmen No. 13906/C.1/R.83 tanggal 23 September
                                    1982 dan tahun 1996 berubah menjadi SMK Negeri 1 Bulukumba.</br>
                                    SMK Negeri 1 Bulukumba sebagai bagian dari Pendidikan Menengah Kejuruan dalam Sistim
                                    Pendidikan Pasional bertujuan menjadi lembaga pendidikan dan pelatihan kejuruan
                                    penghasil calon tenaga kerja tingkat menengah yang memiliki kompetensi profesional
                                    dan mampu bersaing di tingkat nasional dan internasional .</p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/main/mail/jqBootstrapValidation.js"></script>
    <script src="assets/main/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="assets/main/js/scripts.js"></script>

</body>

</html>

<?php

if (isset($_POST['login'])) {

    $nama=$_POST['nama'];
    $pass=$_POST['pass'];
    $user = $_POST['user'];

    $passbaru = md5(sha1(md5($pass)));

    if ($user==='Siswa'){
        // echo "SELECT * FROM tb_anggota WHERE username='$nama' AND password='$passbaru'";
    $ambil = $koneksi->query("SELECT * FROM tb_anggota WHERE username='$nama' AND password='$passbaru'");
    $data =$ambil->fetch_assoc();
    $ketemu = $ambil->num_rows;

    if ($ketemu >=1){
        session_start();

        $_SESSION[username] = $data[username];
        $_SESSION[nama] = $data[nama];

        $_SESSION['siswa'] = $data[nis];
        header('location:index.php');
    }

    }elseif($user === 'Admin'){
    // echo "SELECT * FROM tb_user WHERE username = '$nama' AND password='$passbaru'";
    $ambil = $koneksi->query("SELECT * FROM tb_user WHERE username = '$nama' AND password='$passbaru'");
    $data =$ambil->fetch_assoc();
    $ketemu = $ambil->num_rows;

    if($ketemu >=1){
                                    
    session_start();
    
    $_SESSION[username] = $data [username];
    $_SESSION[pass] = $data [password];
    $_SESSION[level] = $data [level];
    $_SESSION[nama] = $data [nama];
    
    
    if($data['level'] == "admin"){
        $_SESSION['admin'] = $data[id];
        header("location:index.php");
        
    }else if($data['level']== "user"){
        $_SESSION['user'] = $data[id];
        header("location:index.php");
        
    }else{
echo '<script type="text/javascript">
    alert("Username dan Password Anda Salah");
</script>';
    }
}
    }
            ?>
<?php
}
}
?>