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
                <center><h2>Artikel Terkini</h2></center>
                <nav aria-label="breadcrumb bg-transparent" style="background: #fff;">
                    <ol class="breadcrumb bg-transparent" style="background: #fff;">
                        <li class="breadcrumb-item"><a href="https://www.enhaiimandiri.com">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
                <hr>
            </div>
			<div class="articles col-xs-12 col-sm-12 col-md-8 mb-30-xs">
				<div class="row">
                    @php
                        // dd($data);
                    @endphp
                    <!-- Entry Article #1 -->
                    @foreach ($data as $artikel)

					<div class="col-xs-12 col-sm-12 col-md-12 entry">

                        <h2>{{ $artikel->judul }}</h2>
                        <img style="width: 100%;height: 400px;" src="{{ $artikel->image }}" alt="title"/>
                        <div style="font-size: 20px;padding-top: 10px;padding-bottom: 10px;"><div style="float: left !important;">{{ $artikel->created_at->format('F Y') }}</div> <div style="float: right !important;"><span style="color: black;">Label: </span><span><a href="{{ str_replace(' ', '-', strtolower($artikel->nama_label)) }}">{{ $artikel->nama_label }}</a></span></div></div>
                        <div class="entry-content">
							<p>{!! Str::limit($artikel->isi, 220) !!}[…]</p>
                            {{-- <a href="#" class="btn btn-primary">Read More</a> --}}
                            <a class="btn btn-secondary" href="{{ URL::to('/') }}/{{ str_replace(' ', '-', strtolower($artikel->nama_label)) }}/{{ $artikel->url }}">Read More<i class="fa fa-arrow-right ml-xs"></i></a>
						</div>

                        <hr>

					</div>
					<!-- .entry end -->
                    @endforeach
                    @if ($data->lastPage() > 1)
                    <ul class="pagination">
                        <li class="{{ ($data->currentPage() == 1) ? ' disabled' : '' }}">
                            <a href="{{ $data->url(1) }}">Previous</a>
                        </li>
                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                            <li class="{{ ($data->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $data->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="{{ ($data->currentPage() == $data->lastPage()) ? ' disabled' : '' }}">
                            <a href="{{ $data->url($data->currentPage()+1) }}" >Next</a>
                        </li>
                    </ul>
                    @endif
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
