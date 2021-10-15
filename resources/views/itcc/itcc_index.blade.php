@include('itcc.itcc_header')

    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section">
        <div class="intro11-slider swiper-container marketing-about-thumb">
            <div class="swiper-wrapper" style="background-color: black;opacity: 0.7;color: white;">
                <div class="single-slide-wrapper swiper-slide slide-1 slide-bg-1 bg-position" style="background: url({{ url::to('/media/homepage/9001_index.jpg') }}) no-repeat;">
                    <!-- Intro Content Start -->
                    <div class="slider-content text-center">
                        <h2 class="title" data-splitting>ISO 9001</h2>
                        <h4 class="sub-title">Starting and growing your own business is one thing. Growing pains are an inevitable part of any successful small business. </h4>
                        <a href="#" class="btn btn-outline-light btn-lg">Discover More</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="single-slide-wrapper swiper-slide slide-2 slide-bg-1 bg-position" style="background: url({{ url::to('/media/homepage/27001_index.jpg') }}) no-repeat;">
                    <!-- Intro Content Start -->
                    <div class="slider-content text-center">
                        <h2 class="title" data-splitting>ISO 27001</h2>
                        <h4 class="sub-title">Starting any business takes a huge leap of faith. You’re jumping off of a mountain and hoping your parachute will open and lead you and your business to success.</h4>
                        <a href="#" class="btn btn-outline-light btn-lg">Discover More</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="single-slide-wrapper swiper-slide slide-3 slide-bg-1 bg-position" style="background: url({{ url::to('/media/homepage/37001_index.jpg') }}) no-repeat;">
                    <!-- Intro Content Start -->
                    <div class="slider-content text-center">
                        <h2 class="title title-space" data-splitting>ISO 37001</h2>
                        <h4 class="sub-title">For a word that suggests as little as possible, so many different things fall under the label of minimalism at the moment. </h4>
                        <a href="#" class="btn btn-outline-light btn-lg">Discover More</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="fa fa-arrow-circle-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="fa fa-arrow-circle-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <!-- About Section Start Here -->
    <div class="about-section pt-20 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 offset-md-3" style="padding-bottom: 50px;padding-top:10px;">
                    <p style="text-align: center;">Cek sertifikat anda melalui form berikut</p>
                    <div class="newsletter-form-wrap pt-1">
                        <form class="mc-form d-flex position-relative" action="#" method="get">
                            <input type="text" class="form-control email-box rounded-0" placeholder="Certificate Number / Nomor Sertifikat" name="number" required>
                            <button class="btn newsletter-btn position-absolute" type="submit" formtarget="_blank"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 order-1 m-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="restaurant-about-content section-title">
                        <h2 class="title mb-5">Selamat datang di Lembaga Penailaian dan Sertifikasi ISO <br/><span style="color: rgb(5, 2, 175);">TestingInternational</span></h2>
                        <p class="desc-content mb-7">Lembaga TestingInternational merupakan badan sertifikasi yang memiliki layanan dalam ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO 13485, dan ISO/TS 16949</p>
                        <a href="{{ url::to('/about-company') }}" class="btn btn-dark btn-hover-primary">Lebih Lanjut Tentang Kami</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-0 order-lg-1" data-aos="fade-up" data-aos-delay="300">
                    <figure class="marketing-about-thumb mb-md-40 mb-sm-40">
                        <img class="fit-image" src="{{ url::to('/media/homepage/about_index.jpg') }}" alt="About">
                        <figcaption class="about-video-btn">
                            <a href="#" class="btn-play btn-video-popup video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End Here -->

    <!-- Service Section Start Here -->
    <div class="service-section pt-20 pb-90">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-4 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Akreditasi</h4>
                            <p class="desc-content">TestingInternational diakreditasi oleh Layanan Akreditasi untuk Badan Sertifikasi (Eropa) - ASCB (E).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fa fa-codepen"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Full Scope</h4>
                            <p class="desc-content">TestingInternational telah mencapai Cakupan Penuh akreditasi pada QMS, EMS, FSMS, OHSAS, dll., Dari ASCB (E).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Auditor Profesional</h4>
                            <p class="desc-content">Auditor kami berpengalaman dan ahli di bidang ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO 13485 dan ISO TS 16949.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End Here -->

    <!-- Portfolio Section Start Here -->
    <div class="portfolio-section pt-90">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="title">Layanan Kami</h3>
                    <h4 class="sub-title">Sertifikasi bisnis anda dan dapatkan layanan terbaik kami</h4>
                </div>
            </div>
            <div class="row mt-n6">
                @foreach ($data_service as $service)


                <div class="col-lg-4 col-sm-6 mt-30">
                    <div class="single-portfolio-wrap" data-aos="fade-up" data-aos-delay="300">
                        <figure class="portfolio-thumb hover-style position-relative m-0">
                            <a href="portfolio-details.html">
                                <img style="height: 350px;" src="{{ $service->image }}" alt="Portfolio Image">
                                <div class="overlay-1"></div>
                            </a>
                            <figcaption class="portfolio-details">
                                <div class="port-info">
                                    <h3 class="title"><a href="portfolio-details.html">{{ $service->judul }}</a></h3>
                                    <nav class="nav portfolio-cate">
                                        <a href="portfolio-details.html">{{ $service->nama_label }}</a>
                                    </nav>
                                </div>
                            </figcaption>
                        </figure>
                        <hr/>
                        <h3 style="text-align: center;font-weight: bold;"><a href="portfolio-details.html">{{ $service->judul }}</a></h3>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio Section End Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section pt-90">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="title">Blog</h3>
                    <h4 class="sub-title">Pelajari lebih lanjut mengenai ISO melalui blog kami</h4>
                </div>
            </div>
            <div class="row mb-n10">
                @foreach ($data_artikel as $artikel)
                <div class="col-md-4 mb-10">
                    <!-- Single Blog Post Start -->
                    <div class="single-blog-post-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-thumbnail">
                            <a href="{{ url::to('/artikel') }}/{{ $artikel->url }}">
                                <img class="fit-image" src="{{ $artikel->image }}" alt="Blog Thumb">
                                <img class="btn-plus" src="{{ asset('assets/template') }}/images/icon/plus.svg" alt="Plus Icons">
                            </a>
                        </div>
                        <div class="blog-post-details pt-5">
                            <h3 class="title">
                                <a href="{{ url::to('/artikel') }}/{{ $artikel->url }}">{{ $artikel->judul }}</a>
                            </h3>
                            <div class="post-meta mb-3 mt-3">
                                <i class="fas fa-user"></i> <span>Admin ITCC</span>
                                <span><i class="fas fa-clock-o"></i> {{ $artikel->created_at->format('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Post End -->
                </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="support-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title text-center">
                        </div>
                        <div class="support-button">
                            <a class="btn btn-dark btn-hover-primary" href="{{ url::to('/artikel') }}">Artikel Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End Here -->

@include('itcc.itcc_footer')
