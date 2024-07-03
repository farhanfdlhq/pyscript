<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <title>Unbin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/website/assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/website/assets/css/templatemo-space-dynamic.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/website/assets/css/animated.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/website/assets/css/owl.css') }}" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>Un<span>Bin</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Beranda</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#about">Tentang Kami</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#services">Layanan</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#portfolio">Portofolio</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#blog">Blog</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#contact">Kirim Pesan</a>
                            </li>
                            <li class="scroll-to-section">
                                <div class="main-red-button">
                                    <a href="#contact">Hubungi Sekarang</a>
                                </div>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($beranda as $item)
                        <!-- Menggunakan $item untuk setiap elemen beranda -->
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="1s">
                                    <h6>{{ $item->title }}</h6> <!-- Menampilkan title -->
                                    <h2>{{ $item->judul }}</h2> <!-- Menampilkan judul -->
                                    <p>{{ $item->deskripsi }}</p> <!-- Menampilkan deskripsi -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <img src="{{ URL::asset('assets/website/assets/images/' . $item->gambar) }}"
                                        alt="pertemuan tim" /> <!-- Menampilkan gambar dari database -->
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="assets\website\assets\images\about-left-image.png" alt="grafik orang" />
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="assets\website\assets\images\service-icon-01.png" alt="pelaporan" />
                                    </div>
                                    <div class="right-text">
                                        <h4>Analisis Data</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            ctetur aoi adipiscing eliter
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="assets/website/assets/images/service-icon-02.png" alt="" />
                                    </div>
                                    <div class="right-text">
                                        <h4>Laporan Data</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            ctetur aoi adipiscing eliter
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                        <img src="assets/website/assets/images/service-icon-03.png" alt="" />
                                    </div>
                                    <div class="right-text">
                                        <h4>Analitik Web</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            ctetur aoi adipiscing eliter
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="assets/website/assets/images/service-icon-04.png" alt="" />
                                    </div>
                                    <div class="right-text">
                                        <h4>Saran SEO</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            ctetur aoi adipiscing eliter
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="assets/website/assets/images/services-left-image.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>
                            Kembangkan situs web Anda dengan layanan <em>SEO</em> kami
                            &amp; <span>Ide Proyek</span>
                        </h2>
                        <p>
                            Template HTML5 Space Dynamic gratis untuk digunakan
                            untuk proyek situs web Anda. Namun, Anda tidak
                            diperbolehkan mendistribusikan ulang file ZIP template
                            di situs kumpulan template CSS. Silakan
                            hubungi kami untuk informasi lebih lanjut. Terima kasih atas
                            kerjasama baik Anda.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>Analisis Situs Web</h4>
                                <span>84%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>Laporan SEO</h4>
                                <span>88%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>Optimisasi Halaman</h4>
                                <span>94%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>
                            Lihat Apa yang Ditawarkan Agensi Kami &amp; Apa
                            yang Kami <span>Sediakan</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Analisis SEO</h4>
                                <p>
                                    Lorem ipsum dolor sit ameti ctetur aoi
                                    adipiscing eto.
                                </p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/website/assets/images/portfolio-image.png" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Laporan Situs Web</h4>
                                <p>
                                    Lorem ipsum dolor sit ameti ctetur aoi
                                    adipiscing eto.
                                </p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/website/assets/images/portfolio-image.png" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Uji Kinerja</h4>
                                <p>
                                    Lorem ipsum dolor sit ameti ctetur aoi
                                    adipiscing eto.
                                </p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/website/assets/images/portfolio-image.png" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Analisis Data</h4>
                                <p>
                                    Lorem ipsum dolor sit ameti ctetur aoi
                                    adipiscing eto.
                                </p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/website/assets/images/portfolio-image.png" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="our-blog section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>
                            Lihat Apa yang Sedang <em>Tren</em> di Berita
                            <span>Kami</span> Terbaru
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="top-dec">
                        <img src="assets/website/assets/images/blog-dec.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                        <a href="#"><img src="assets/website/assets/images/big-blog-thumb.jpg"
                                alt="Workspace Desktop" /></a>
                        <div class="info">
                            <div class="inner-content">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar"></i> 24
                                        Mar 2021
                                    </li>
                                    <li>
                                        <i class="fa fa-users"></i>
                                        TemplateMo
                                    </li>
                                    <li>
                                        <i class="fa fa-folder"></i>
                                        Branding
                                    </li>
                                </ul>
                                <a href="#">
                                    <h4>
                                        Agen SEO & Pemasaran Digital
                                    </h4>
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    dan sed doer ket eismod tempor
                                    incididunt ut labore et dolore magna...
                                </p>
                                <div class="main-blue-button">
                                    <a href="#">Temukan Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="right-list">
                        <ul>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 18
                                        Mar 2021</span>
                                    <a href="#">
                                        <h4>
                                            Situs Web Baru & Tautan Balik
                                        </h4>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amsecteturii
                                        dan sed doer ket eismod...
                                    </p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/website/assets/images/blog-thumb-01.jpg"
                                            alt="" /></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 14
                                        Mar 2021</span>
                                    <a href="#">
                                        <h4>
                                            Analisis SEO & Ide Konten
                                        </h4>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amsecteturii
                                        dan sed doer ket eismod...
                                    </p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/website/assets/images/blog-thumb-01.jpg"
                                            alt="" /></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 06
                                        Mar 2021</span>
                                    <a href="#">
                                        <h4>
                                            Tips SEO & Pemasaran Digital
                                        </h4>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amsecteturii
                                        dan sed doer ket eismod...
                                    </p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/website/assets/images/blog-thumb-01.jpg"
                                            alt="" /></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s"
                    data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>
                            Jangan ragu untuk mengirimkan pesan tentang kebutuhan situs web Anda
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed doer ket eismod tempor
                            incididunt ut labore et dolores
                        </p>
                        <div class="phone-info">
                            <h4>
                                Untuk pertanyaan apa pun, Hubungi Kami:
                                <span><i class="fa fa-phone"></i>
                                    <a href="#">010-020-0340</a></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nama"
                                        autocomplete="on" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Nama Belakang"
                                        autocomplete="on" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email Anda" required="" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">
                                        Kirim Pesan
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/website/assets/images/contact-decoration.png" alt="" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>
                        Hak Cipta © 2021 Space Dynamic Co. Semua Hak
                        Dilindungi.

                        <br />Desain:
                        <a rel="nofollow" href="https://templatemo.com">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->

    <script src="{{ URL::asset('assets\website\vendor\jquery\jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets\website\vendor\bootstrap\js\bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets\website\assets\js\owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('assets\website\assets\js\animation.js') }}"></script>
    <script src="{{ URL::asset('assets\website\assets\js\imagesloaded.js') }}"></script>
    <script src="{{ URL::asset('assets/website/assets/js/templatemo-custom.js') }}"></script>
</body>

</html>
