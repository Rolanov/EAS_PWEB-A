<?php
session_start();
include 'koneksi.php';
date_default_timezone_set("Asia/Bangkok");
$date_now = date("Y-m-d");

$getdata = mysqli_query($koneksi,"SELECT * FROM job WHERE registerend>'$date_now'");
//JIKA KOSONG TIDAK TAMPIL
$jumlahdata = mysqli_num_rows($getdata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KKP Jawa Timur | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="shortcut icon" href="img/new/logoKKP.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php"><img src="img/new/logoKKP.png" width="100" height="100"/>&nbsp;&nbsp;</a>
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"> KKP Jawa Timur<span class="fs-5"></span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="benefit.php" class="nav-item nav-link">Benefit</a>
                        <a href="karir.php" class="nav-item nav-link">Karir</a>
                        <a href="pengumuman.php" class="nav-item nav-link">Pengumuman</a>
                        <a href="apply.php" class="nav-item nav-link">Daftar</a>
                    </div>
                    <a href="login.php" target="_blank" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Administrator</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Mari bergabung bersama kami dalam mewujudkan kelautan yang bersih dan perikanan yang sehat.</h1>
                            <p class="text-white pb-3 animated zoomIn">Kementerian Kelautan dan Perikanan (KKP) adalah kementerian dalam Pemerintah Indonesia yang membidangi urusan kelautan dan perikanan.</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <!-- <img class="img-fluid" src="img/hero.png" alt=""> -->
                            <img class="img-fluid" src="img/new/team_work.svg" width="440px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Benefit Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Keuntungan</h6>
                    <h2 class="mt-2">Kembangkan diri anda bersama kami</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-heart fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Terpercaya</h5>
                            <p>Terbentuknya Kementrian Kelautan dan Perikanan pada dasarnya merupakan sebuah tantangan, sekaligus peluang bagi pengembangan sektor kelautan dan perikanan Indonesia.</p>
                            <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-user fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Profesional</h5>
                            <p>Sejak era reformasi bergulir di tengah percaturan politik Indonesia, sejak itu pula perubahan kehidupan mendasar berkembang di hampir seluruh kehidupan berbangsa dan bernegara.</p>
                            <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-clock fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Berkelanjutan</h5>
                            <p>Perubahan Nomenklatur Departemen menjadi Kementerian: Dengan ditetapkannya Peraturan Presiden No. No. 47 Tahun 2009 tentang Pembentukan dan Organisasi Kementerian Negara, maka Nomenklatur Departemen Kelautan dan Perikanan menjadi Kementerian Kelautan dan Perikanan.</p>
                            <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Benefit End -->


        <!-- Karir Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Karir</h6>
                    <h2 class="mt-2">Karir Tersedia</h2>
                </div>
                <div class="row g-5" style="margin-left: 160px;">

                <?php IF($jumlahdata>0){ ?>
                    
                    <table style="width: 85%" class="mb-0 text-dark" cellpadding="8">
                                    <thead>
                                    <tr>
                                        <th>POSISI</th>
                                        <th>PERIODE</th>
                                        <th>DEADLINE PENDAFTARAN</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while($data=mysqli_fetch_array($getdata)){
                                            $idjob = $data['idjob'];
                                            $namajob = $data['jobname'];
                                            $descjob = $data['jobdesc'];
                                            $mulai = date_format(date_create($data['jobstart']),"d M Y");
                                            $selesai = date_format(date_create($data['jobend']),"d M Y");
                                                $periode = $mulai." - ".$selesai;
                                            $deadline = date_format(date_create($data['registerend']),"d M Y");
                                            $jobloc = $data['jobloc'];
                                            $workingtype = $data['workingtype'];
                                    ?>
                                            
                                    <tr>
                                        <td><?=$namajob;?></td>
                                        <td><?=$periode;?></td>
                                        <td><?=$deadline;?></td>
                                        <td><a href="apply.php?id=<?=$idjob;?>" class="btn btn-primary rounded-pill py-2">Apply Job</a></td>
                                    </tr>
                                            
                                    <?php 
                                        }; 
                                    ?>
                                    </tbody>
                    </table>
                <?php } else{} ?>                        
                </div>
            </div>
        </div>
        <!-- Karir End -->

                <!-- Pengumuman Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Pengumuman</h6>
                    <h2 class="mt-2">Hasil Seleksi & Tes</h2>
                </div>
                <br>
                <div class="row g-5" style="margin-left: 40px;">

                    <table style="width: 95%" class="mb-0 text-dark" cellpadding="10">
                    
                                    <thead>
                                    <tr>
                                        <th>ID REGISTRASI</th>
                                        <th>NAMA</th>
                                        <th>MINAT POSISI</th>
                                        <th class="text-center">HASIL SELEKSI</th>
                                        <th class="text-center">TANGGAL WAWANCARA</th>
                                        <th class="text-center">HASIL WAWANCARA</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                                    
                    <?php
                    $queryInner = mysqli_query($koneksi,"SELECT * FROM pendaftar INNER JOIN job ON pendaftar.idjob = job.idjob ORDER BY idreg ");

                    while($data=mysqli_fetch_array($queryInner)){    
                        
                        $idreg = $data['idreg'];
                        $name = $data['name'];
                        $status_seleksi = $data['status_seleksi'];
                        $status_wcr = $data['status_wcr'];
                        $tgl_wcr_change = date_format(date_create($data['tgl_wcr']),"d M Y");
                    
                        $jobname = $data['jobname'];
                    ?>
                                    
                                    <?php IF($status_seleksi=='Lolos'){ ?>
                                    <tr>
                                        <td><?=$idreg;?></td>
                                        <td><?=$name;?></td>
                                        <td><?=$jobname;?></td>
                                        <td class="text-center"><?=$status_seleksi;?></td>
                                        <td class="text-center"><?=$tgl_wcr_change;?></td>
                                        <td class="text-center"><?=$status_wcr;?></td>
                                    </tr>

                                    <?php } ELSEIF($status_seleksi=='Tidak Lolos'){ ?>        
                                    <tr>
                                        <td><?=$idreg;?></td>
                                        <td><?=$name;?></td>
                                        <td><?=$jobname;?></td>
                                        <td class="text-center"><?=$status_seleksi;?></td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> - </td>
                                    </tr>
                                    
                                    <?php } else{} ?>
                    
                    <?php }; //PENUTUP WHILE ?>                        
                                    
                                    </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- Pengumuman End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Kantor Pusat</p>
                        <p>
                        KEMENTERIAN KELAUTAN DAN PERIKANAN JL. Medan Merdeka Timur No.16 Jakarta Pusat</p>
                        <!-- <p><i class="fa fa-phone-alt me-3"></i>(021)77831787 atau 77832358</p>
                        <p><i class="fa fa-envelope me-3"></i>ariekarya@gmail.com</p> -->
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-md-8 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>www.kkp.go.id</p>
                        <p><i class="fa fa-phone-alt me-3"></i> (021) 3519070</p>
                        <p><i class="fa fa-envelope me-3"></i>humas.kkp@kkp.go.id</p>
                    </div>
                    
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; Sistem Penerimaan Pegawai. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>