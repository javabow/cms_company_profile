@php
    header('Access-Control-Allow-Origin: *');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TestingDevelopment</title>
    <link rel="icon" href="" type="image/x-icon">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('assets/template') }}/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('assets/template') }}/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="{{ asset('assets/template') }}/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />

</head>

<body>
    <div id="preloader">
        <div class="preloader">
            <div class="spinner-border text-primary"></div>
        </div>
    </div>

    <!-- Header Area Start Here -->
    <header class="main-header-area header-transparent header-sticky">
        <!-- Main Header Area Start -->
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                        <div class="header-logo d-flex align-items-center">
                            <a href="{{ url::to('/') }}">
                                <img class="nonsticky-logo img-full" src="#" alt="Header Logo">
                                <img class="sticky-logo img-full" src="#" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-6 d-flex justify-content-end">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="{{ url::to('/') }}">
                                        <span class="menu-text">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url::to('/about-company') }}">
                                        <span class="menu-text">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url::to('/service') }}">
                                        <span class="menu-text"> Service</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url::to('/artikel') }}">
                                        <span class="menu-text"> Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url::to('/contact') }}">
                                        <span class="menu-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </li>
                                <li class="search-box-menu d-block d-lg-none">
                                    <a href="#" class="off-canvas-search-btn">
                                        <span class="btn-search"><i class="fas fa-search"></i></span>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-block d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas mobile menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fas fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="offcanvas-widget-area">
                        <!-- Start Serach Box -->
                        <div class="search-box-wrap off-canvas-item">
                            <h4>Cek Sertifikat</h4>
                            <div class="newsletter-form-wrap pt-1">
                            <form class="mc-form d-flex position-relative" action="#" method="get">
                                <input type="text" class="form-control email-box rounded-0" placeholder="Certificate Number" name="number" required>
                                <button class="btn newsletter-btn position-absolute" type="submit" formtarget="_blank"><i class="fa fa-search"></i></button>
                            </form>
                            </div>
                        </div>
                        <!-- End Search Box -->
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    {{-- <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="{{ url::to('/') }}">
                                            <span class="menu-text">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url::to('/about-company') }}">
                                            <span class="menu-text">About</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url::to('/service') }}">
                                            <span class="menu-text"> Service</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url::to('/artikel') }}">
                                            <span class="menu-text"> Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url::to('/contact') }}">
                                            <span class="menu-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <!-- Soclial Link Start -->
                        <div class="widget-social">
                            <a title="facebook" href="#"><i class="fas fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fas fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fas fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fas fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fas fa-vimeo"></i></a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- Offcanvas Serach Start -->
        <aside class="off-canvas-search-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <h4>Cek Sertifikat</h4>
                    <div class="newsletter-form-wrap pt-1">
                        <form class="mc-form d-flex position-relative" action="#" method="get">
                            <input type="text" class="form-control email-box rounded-0" placeholder="Certificate Number" name="number" required>
                            <button class="btn newsletter-btn position-absolute" type="submit" formtarget="_blank"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Offcanvas Search End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <!-- Start Serach Box -->
                        <div class="search-box-wrap off-canvas-item">
                            <h4>Cek Sertifikat</h4>
                            <div class="newsletter-form-wrap pt-1">
                                <form class="mc-form d-flex position-relative" action="#" method="get">
                                    <input type="text" class="form-control email-box rounded-0" placeholder="Certificate Number" name="number" required>
                                    <button class="btn newsletter-btn position-absolute" type="submit" formtarget="_blank"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- End Search Box -->
                        <ul class="menu-top-menu">
                            <li><span>Mengenai Kami</span></li>
                        </ul>
                        <p class="desc-content">Lembaga Testing International merupakan badan sertifikasi yang memiliki layanan dalam ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO 13485, dan ISO/TS 16949</p>
                        <ul class="useful-link">
                            <li><a href="{{ url::to('/') }}">Home</a></li>
                            <li><a href="{{ url::to('/service') }}">Service</a></li>
                            <li><a href="{{ url::to('/artikel') }}">Blog</a></li>
                            <li><a href="{{ url::to('/about-company') }}">About Us</a></li>
                            <li><a href="{{ url::to('/contact') }}">Contact Us</a></li>
                        </ul>
                        <div class="widget-social">
                            <ul class="menu-top-menu">
                                <li><span>Connect With Us</span></li>
                            </ul>
                            <a title="fascebook" href="#"><i class="fas fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fas fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fas fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fas fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fas fa-vimeo"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
                <div class="btn-close-off-canvas">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->
