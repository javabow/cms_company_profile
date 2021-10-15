<?php
include ('../enhaii/header.php');
?>
<!-- Page Title
============================================= -->
<section class=" bg-overlay bg-overlay-gradient pb-0">
	{{-- <div class="bg-section" >
		<img src="https://www.enhaiimandiri.com/assets/images/page-title/4.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title title-1 text-center">
					<div class="title">
						<h2>Artikel</h2>
					</div>
				</div>
				<!-- .page-title end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div> --}}
	<!-- .container end -->
</section>

<!-- Blogs
============================================= -->
<section class="blog">
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-30-xs">
                <center><h2>{{ $data_artikel->judul }}</h2></h2></center>
                <nav aria-label="breadcrumb bg-transparent" style="background: #fff;">
                    <ol class="breadcrumb bg-transparent" style="background: #fff;">
                        <li class="breadcrumb-item"><a href="https://www.enhaiimandiri.com">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Artikel</a></li>
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}/{{ str_replace(' ', '-', strtolower($data_label->nama_label)) }}">{{ $data_label->nama_label }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data_artikel->judul }}</li>
                    </ol>
                </nav>
                <hr>
            </div>
			<div class="articles col-xs-12 col-sm-12 col-md-8 mb-30-xs">
				<div class="row">
                    <!-- Entry Article #1 -->

					<div class="col-xs-12 col-sm-12 col-md-12 entry">
                        <div style="font-size: 20px;padding-top: 10px;padding-bottom: 10px;"><div style="float: left !important;">{{ $data_artikel->created_at->format('F Y') }}</div> <div style="float: right !important;"><span style="color: black;">Label: </span><span>{{ $data_label->nama_label }}</span></div></div>
                        <img style="width: 100%;height: 400px;" src="{{ $data_artikel->image }}" alt="title"/>

                        <div style="padding-top: 30px;" class="entry-content">
						    {!! $data_artikel->isi !!}
						</div>

                        <hr>

					</div>
					<!-- .entry end -->

				</div>
				<!-- .row end -->
			</div>
			<!-- entry articles end -->
<?php
include ('../enhaii/widget1.php');
?>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>

<?php
include ('../enhaii/footer.php');
?>
