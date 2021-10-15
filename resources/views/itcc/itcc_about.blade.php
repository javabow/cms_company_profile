@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/27001_index.jpg') }}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Tentang Perusahaan</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Beranda</a></li>
                        <li style="color: white;">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- About Section Start Here -->
<div class="about-section pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-5 order-1 m-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="restaurant-about-content section-title" style="text-align: justify;">
                    <h2 class="title mb-5"><span style="color: rgb(5, 2, 175);">Testing International</span></h2>
                    <p class="desc-content mb-7">Lembaga Testing International merupakan badan sertifikasi yang memiliki layanan dalam ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO 13485, dan ISO/TS 16949</p>
                    <p class="desc-content mb-7">Testing International dioperasikan oleh Quality Assurance, Environmental and Safety Business Professionals yang memiliki pengalaman bertahun-tahun dalam banyak bisnis dan karena itu dapat menawarkan pemahaman yang benar tentang kebutuhan perusahaan Anda selama proses audit.</p>
                    <p class="desc-content mb-7">Semua Auditor kami telah bekerja dalam industri dengan lingkup ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO / TS 16949 & ISO 13485. Untuk informasi lebih lanjut, hubungi kami dan salah satu Auditor Utama kami yang berkualifikasi akan menanggapinya.</p>
                    <p class="desc-content mb-7">Testing International menyediakan berbagai layanan pendaftaran / sertifikasi ahli dan hemat biaya yang dirancang untuk mengoptimalkan peluang bisnis anda.</p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 order-0 order-lg-1" data-aos="fade-up" data-aos-delay="300" style="padding-bottom: 20px;">
                <img class="fit-image" src="{{ url::to('/media/about/Testing_about.jpg') }}" alt="About">
            </div>
        </div>
    </div>
</div>
<!-- About Section End Here -->
<hr/>
<!-- About 2 Section Start Here -->
<div class="about-section pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-7 order-0 order-lg-1" data-aos="fade-up" data-aos-delay="300" style="padding-bottom: 20px;">
                <img class="fit-image" src="{{ url::to('/media/about/Testing_about_2.jpg') }}" alt="About">
            </div>
            <div class="col-lg-6 col-xl-5 order-1 m-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="restaurant-about-content section-title" style="text-align: justify;">
                    <h2 class="title mb-5"><span style="color: rgb(5, 2, 175);">Akreditasi Kami</span></h2>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- About 2 Section End Here -->

<!-- Funfact Section Start Here -->
<div class="funfact-section d-flex flex-column justify-content-center" style="background: url({{ url::to('/media/about/counter_about.jpg') }}) no-repeat;">
    <div class="container-fluid p-0">
        <div class="row no-gutters counters align-items-center">
            <div class="col-lg-5 col-5">
                <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-area">
                        <strong class="counter">7</strong>
                    </div>
                    <div class="counter-content">
                        <h3 class="title">Layanan ISO</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-2">
                <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ url::to('/media/about/Testing_logo_white.png') }}" alt="Logo Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5 col-5 item">
                <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-area">
                        <strong class="counter">1000</strong><span class="text-white ml-2">+</span>
                    </div>
                    <div class="counter-content">
                        <h3 class="title">Sertifikat Dikeluarkan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Section End Here -->

@include('itcc.itcc_footer')
