@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ $data_service->header_image }}) no-repeat center center;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">{{ $data_service->judul }}</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Home</a></li>
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/service') }}">Layanan</a></li>
                        <li style="color: white;">{{ $data_service->judul }}</li>
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
            <div class="col-md-5 col-12">
                <!-- Portfolio Details Image Start -->
                <div class="portfolio-details-image mb-n6">
                    <div class="single-image mb-6" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ $data_service->image }}" alt="{{ $data_service->judul }}">
                    </div>
                </div>
                <!-- Portfolio Details Image End -->
                <!--Sidebar Post Start-->
                <div class="sidebar" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="sidebar-title">Artikel Terkait</h4>
                    <ul class="sidebar-blog">
                        @foreach ($data_side_artikel as $side_artikel)
                        <li>
                            <a href="{{ url::to('/artikel') }}/{{ $side_artikel[0]['url'] }}" class="image"><img src="{{ $side_artikel[0]['image'] }}" alt="{{ $side_artikel[0]['judul'] }} Image ITCC"></a>
                            <div class="content">
                                <a class="title" href="{{ url::to('/artikel') }}/{{ $side_artikel[0]['url'] }}">{{ $side_artikel[0]['judul'] }}</a>
                                <span class="date">{{ $side_artikel[0]->created_at->format('d F Y') }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--Sidebar Post End-->
            </div>
            <div class="col-md-7 col-12 mt-6 mt-md-0" id="sticky-sidebar">
                <!-- Portfolio Details Content Start -->
                <div class="portfolio-details-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-details-desc mb-8">
                        <h2 class="title mb-3">{{ $data_service->judul }}</h2>
                        {!! $data_service->isi !!}
                    </div>
                    <div class="portfolio-details-info">

                    </div>
                </div>
                <!-- Portfolio Details Content End -->
            </div>

        </div>
    </div>
</div>
<!-- Portfolio Section End Here -->

@include('itcc.itcc_footer')
