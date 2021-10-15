@include('itcc.itcc_header')
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p" style="background: url({{ url::to('/media/homepage/27001_index.jpg') }}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 style="color: white;" class="title">Not Found</h3>
                    <ul style="color: white;">
                        <li style="color: white;"><a style="color: white;" href="{{ url::to('/') }}">Kembali ke Beranda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<div style="padding-bottom: 30px;padding-top: 100px;" class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <p>404 Page Not Found</p>
                <p style="font-size: 25px;">Halaman yang anda cari tidak dapat ditemukan</p><br>
                <a class="btn btn-primary" href="{{ URL::to('/') }}"><i class="fa fa-arrow-left ml-xs"> Home Page</i></a>
            </center>
        </div>
    </div>
</div>
@include('itcc.itcc_footer')
