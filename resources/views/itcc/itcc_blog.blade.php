@include('itcc.itcc_header')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/header_global.jpg') }}) no-repeat;">
    <div id="heroparticles" style="height: 150px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Blog</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Beranda</a></li>
                        <li style="color: white;">Blog</li>
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
            <div class="section-title text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                <h3 class="title">Blog Terkait ISO</h3>
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
                            <i class="fas fa-user"></i><span> Admin ITCC</span>
                            <span><i class="fas fa-clock-o"></i> {{ $artikel->created_at->format('d F Y') }}</span>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Section End Here -->
<div class="pagination-wrap" style="text-align: center;padding-top: 50px;" class="col-12 text-center">
    <div style="display:inline-block;">
    @if ($data_artikel->lastPage() > 1)
    <ul class="pagination">
        <li style="padding-right: 0px;" class="{{ ($data_artikel->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="pagination-link" href="{{ $data_artikel->url(1) }}"><i class="fa fa-angle-left"></i></a>
        </li>
        @for ($i = 1; $i <= $data_artikel->lastPage(); $i++)
            <li style="padding-right: 0px;" class="{{ ($data_artikel->currentPage() == $i) ? ' active' : '' }}">
                <a class="pagination-link" href="{{ $data_artikel->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li style="padding-right: 0px;" class="{{ ($data_artikel->currentPage() == $data_artikel->lastPage()) ? ' disabled' : '' }}">
            <a class="pagination-link" href="{{ $data_artikel->url($data_artikel->currentPage()+1) }}" ><i class="fa fa-angle-right"></i></a>
        </li>
    </ul>
    @endif
    </div>
</div>
<!--// .pagination-wrap //-->

@include('itcc.itcc_footer')
