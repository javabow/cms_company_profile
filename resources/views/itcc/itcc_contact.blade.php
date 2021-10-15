@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/header_global.jpg') }}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Kontak</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Beranda</a></li>
                        <li style="color: white;">Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<!-- Header Section Start Here -->
<div class="blog-section pt-90">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                <h3 class="title">Kontak Kami</h3>
                <h4 class="sub-title">Hubungi kami untuk mendapatkan info lanjut mengenai sertifikasi, kami akan senang untuk menjawab setiap pertanyaan anda.</h4>
            </div>
        </div>
    </div>
</div>
<!-- Header Section End Here -->
<!-- Contact Information And Title Area Start -->
<div class="contact-info mt-5 pt-20 pb-90">
    <div class="container">
        <div class="row mb-n10">
            <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="100">
                <div class="info">
                    <div class="info-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Lokasi</h4>
                        <span class="info-text"> Jakarta.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="300">
                <div class="info">
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Telepon</h4>
                        <br/>


                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="600">
                <div class="info">
                    <div class="info-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Email</h4>
                        <span class="info-text">
                        <br/>
                        <a href="mailto:info@itccinternational.org">hfarhandika@gmail.com</a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Information End -->
<!-- Contact Map Start -->
<div class="contac-map pb-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--Google Map Area Start-->
                <div class="google-map-area">
                    {{-- <iframe class="contact-map" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3199287328675!2d106.80963081533794!3d-6.607109195221993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5dd0ea4b823%3A0x8cdb7e194a650fb9!2sITCC%20International%20Ltd.!5e0!3m2!1sen!2sid!4v1616635700068!5m2!1sen!2sid"></iframe> --}}
                </div>
                <!--Google Map Area Start-->
            </div>
        </div>
    </div>
</div>
<!-- Contact Map End -->

@include('itcc.itcc_footer')
