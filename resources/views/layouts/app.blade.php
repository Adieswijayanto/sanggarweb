<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
<!--====== Title ======-->
<title>Batari Belajar Tari Tradisi</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="assets/images/favicon.webp" type="image/webp">

    
<!-- CSS
============================================ -->

<!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
<link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/plugins/default.css">


<!--===== Plugins CSS (All Plugins Files) =====-->
<link rel="stylesheet" href="assets/css/plugins/animate.min.css">
<link rel="stylesheet" href="assets/css/plugins/slick.css">
<link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

<!--====== Main Style CSS ======-->
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
<link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
    
    <!--====== Header Start ======-->

    <header>
        <div id="navigation" class="navigation navigation-landscape">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo.png" width="135" height="88" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="nav-toggle"></div>
                        <nav class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li>
                                    <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('partnership') ? 'active' : '' }}" href="/partnership">Partnership</a>
                                </li>
                                <li>
                                    <a href="#">Register</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="event.html">Daftar mitra sanggar</a></li>
                                        <li><a href="event-2.html">Daftar siswa sanggar</a></li>
                                    </ul>
                            </li>
                            <li>
                                <a href="/login">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </header>
    

    <!--====== Header Ends ======-->
    
    <!--====== Slider Start ======-->

    <section class="slider-active">
        <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url(assets/images/bgwyg.jpg);">
            <div class="container">
                <div class="slider-content">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">Memayu Hayu Ning Bhuwana Memayu Hayu Ning Budaya</h2>
                    <h5 style="color: rgb(211, 211, 211)" data-animation="fadeInLeft" data-delay="0.1s">Ingin Daftar Mitra Sanggar? Ingin Daftar Calon Siswa Sanggar? Mari Bergabung bersama kami Batari!</h5>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="/partnership">lihat Sanggar?</a></li>
                        <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="/termofservices">Cara daftar?</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </section>
    
        <div class="counter-area-2">
        <div class="container">
            <div class="counter-wrapper-2 bg_cover" style="background-image: url(assets/images/counter-bg-2.webp);">
                <div class="row">
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                            <span class="counter-count"><span class="count" data-count="3652">0</span> +</span>
                            <p>Siswa Sanggar</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <span class="counter-count"><span class="count" data-count="105">0</span> +</span>
                            <p>Mitra Sanggar</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                            <span class="counter-count"><span class="count" data-count="120">0</span> +</span>
                            <p>Kelas</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 counter-col">
                        <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                            <span class="counter-count"><span class="count" data-count="30">0</span> +</span>
                            <p>Daerah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
        <section class="notice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">Pelayanan Kami</h2>
                        <span class="line"></span>
                        <p>Dalam website ini kami menyediakan beberapa pelayanan bagi para calon mitra sanggar dan calon siswa sanggar</p>
                    </div>
                </div>
            </div>
            <div class="notice-content">
                <div class="single-notice">
                    <span class="number">01.</span>
                    <h3 class="notice-title">Pendaftaran Mitra Sanggar</h3>
                    <p>Kami menyediakan beberapa pelayanan bagi para mitra sanggar untuk meningkatkan eksistensi publikasi informasi dan peningkatan manajemen latihan</p>
                </div>
                <div class="single-notice">
                    <span class="number">02.</span>
                    <h3 class="notice-title">Pendaftaran Calon Siswa Sanggar</h3>
                    <p>Kami menyediakan pelayanan bagi para calon siswa sanggar untuk memudahkan dalam memilih calon sanggar yang diinginkan</p>
                </div>
            </div>
        </div>
        </section>

    <!--====== Slider Ends ======-->
    
    <!--====== Features Start ======-->


    <!--====== Top Courses Ends ======-->
    
    <!--====== Specialty Start ======-->


    
    <!--====== Newsletter Start ======-->
    <!--====== Newsletter Ends ======-->
    
    <!--====== Footer Start ======-->
    <section class="footer bg_cover" style="background-image: url(assets/images/counter-bg.webp);">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Our Company</h4>
                            <ul class="link-list">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="/termofservices">FaQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Services</h4>
                            <ul class="link-list">
                                <li><a href="#">Daftar mitra sanggar</a></li>
                                <li><a href="#">Daftar siswa sanggar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Partnership</h4>
                            <ul class="link-list">
                                <li><a href="our-courses-left-sidebar.html">Mitra Sanggar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Contact Info</h4>
                            <ul class="link-list">
                                <li>
                                    <p>Klangenan, Cirebon 45156. Indonesia</p>
                                </li>
                                <li>
                                    <p><a href="tel:+01254659874">+01254 659 874 </a></p>
                                </li>
                                <li>
                                    <p><a href="mailto://info@example.com">info@example.com</a></p>
                                    <p><a href="#">www.example.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright text-center">
                    <p>&copy; 2023 Made with <i class="fa fa-heart"></i> by <a href="#">Batari Team</a></p>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== All Plugins js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>
    

    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    
</body>

</html>
