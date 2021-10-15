@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->

<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/header_global.jpg') }}) no-repeat center center;background-color: dark;background-blend-mode: overlay;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Blog</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Beranda</a></li>
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/artikel') }}">Blog</a></li>
                        <li style="color: white;">{{ $data_artikel->judul }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Area End Here -->

<!-- Blog Section Start Here -->
<div class="blog-section pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 order-lg-1">
                <div class="row mb-n10">
                    <div class="col-12 mb-10">
                        <!-- Single Post Details Start -->
                        <div class="blog-details mb-10">
                            <!-- Image -->
                            <div class="image mb-6" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ $data_artikel->image }}" alt="Blog">
                            </div>
                            <!-- Single Post Details Content Start -->
                            <div class="content" data-aos="fade-up" data-aos-delay="300">
                                <!-- Title -->
                                <h2 class="title mb-3">{{ $data_artikel->judul }}</h2>
                                <!-- Meta -->
                                <div class="meta-list mb-3">
                                    <span>By Admin ITCC</span>
                                    <span class="meta-item date">{{ $data_artikel->created_at->format('d F Y') }}</span>
                                </div>
                                <!-- Description -->
                                <div class="desc">
                                    {!! $data_artikel->isi !!}
                                </div>
                            </div>
                            <!-- Single Post Details Content End -->
                            <!-- Single Post Details Footer Start -->
                            <div class="single-post-details-footer mt-10" data-aos="fade-up" data-aos-delay="300">
                                <!-- Shear Article Start -->
                                <div class="share-article">
                                    <h6 class="text-uppercase">Share artikel ini</h6>
                                </div>
                                <!-- Shear Article Start -->
                                <!-- Social Shear Start -->
                                <div class="widget-social d-flex justify-content-center border-top pt-3">
                                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <!-- Social Shear Start -->
                            </div>
                            <!-- Single Post Details Footer End -->
                        </div>
                        <!-- Single Post Details End -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 order-lg-2">
                <div class="sidebar-wrap">
                    <!--Sidebar Search Start-->
                    {{-- <div class="sidebar" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Enter Keywords" type="text">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div> --}}
                    <!--Sidebar Search End-->
                    <!--Sidebar Category Start-->
                    <div class="sidebar" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="sidebar-title">Kategori</h4>
                        <ul class="sidebar-link">

                            @foreach ($data_label as $label)
                            <div class="sidebar-tags">
                            <li><a href="#">{{ $label->nama_label }}</a></li>
                            </div>
                            @endforeach

                        </ul>
                    </div>
                    <!--Sidebar Category End-->
                    <!--Sidebar Post Start-->
                    <div class="sidebar" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="sidebar-title">recent post</h4>
                        <ul class="sidebar-blog">
                            @foreach ($data_side_artikel as $side_artikel)
                            <li>
                                <a href="{{ url::to('/artikel') }}/{{ $side_artikel->url }}" class="image"><img src="{{ $side_artikel->image }}" alt="{{ $side_artikel->judul }}"></a>
                                <div class="content">
                                    <a class="title" href="{{ url::to('/artikel') }}/{{ $side_artikel->url }}">{{ $side_artikel->judul }}</a>
                                    <span class="date">{{ $side_artikel->created_at->format('d F Y') }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Sidebar Post End-->
                    <!--Sidebar Tags Start-->
                    <div class="sidebar" data-aos="fade-up" data-aos-delay="500">
                        <h4 class="sidebar-title">tags</h4>
                        <div class="sidebar-tags">
                            @foreach ($tag as $tags)
                            <a href="#">{{ $tags->nama_tag }}</a>
                            @endforeach
                        </div>
                    </div>
                    <!--Sidebar Tags End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End Here -->

@include('itcc.itcc_footer')
