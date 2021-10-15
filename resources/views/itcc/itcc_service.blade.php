@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/27001_index.jpg') }}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Layanan</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Beranda</a></li>
                        <li style="color: white;">Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

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
            @foreach ($data_label as $label)
                @isset($data_service[$label->id_label][0]['id_artikel'])
                                    <div class="col-md-12 services-gallery-item" style="padding-top: 25px;">
                                        <h3 class="title" style="font-weight: bold;">Layanan {{ $label->nama_label }}</h3>
                                    </div>
                @isset($data_service[$label->id_label])



                    @foreach ($data_service[$label->id_label] as $service)


            <div class="col-lg-4 col-sm-6 mt-30">
                <div class="single-portfolio-wrap" data-aos="fade-up" data-aos-delay="300">
                    <figure class="portfolio-thumb hover-style position-relative m-0">
                        <a href="{{ url::to('/service') }}/{{ $service->url }}">
                            <img style="height: 350px;" src="{{ $service->image }}" alt="Portfolio Image">
                            <div class="overlay-1"></div>
                        </a>
                        <figcaption class="portfolio-details">
                            <div class="port-info">
                                <h3 class="title" style="font-weight: bold;"><a href="{{ url::to('/service') }}/{{ $service->url }}">{{ $service->judul }}</a></h3>
                                <nav class="nav portfolio-cate">
                                    <a href="{{ url::to('/service') }}/{{ $service->url }}">{{ $service->nama_label }}</a>
                                </nav>
                            </div>
                        </figcaption>
                    </figure>
                    <hr/>
                    <h3 style="text-align: center;font-weight: bold;"><a href="portfolio-details.html">{{ $service->judul }}</a></h3>
                </div>

            </div>
                    @endforeach

                @endisset

                @endisset
            @endforeach

        </div>
    </div>
</div>
<!-- Portfolio Section End Here -->

@include('itcc.itcc_footer')
