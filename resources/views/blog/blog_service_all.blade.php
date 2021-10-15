@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>Layanan</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Layanan</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Main Banner End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Service Area Start        =-->
			<!--=====================================-->
			<section class="section2-padding-md bg-color-accent4">
				<div class="container">
					<div class="row">
                        @foreach ($data_service as $service)

						<div class="col-lg-4 col-md-6 col-12">
							<div class="fxt-service-box-layout2">
								<div class="item-img">
									<img src="{{ $service->image }}" alt="services">
								</div>
								<div class="item-content">
									<div class="item-icon">
										<i class="flaticon-worker"></i>
									</div>
									<h3 class="item-title"><a href="{{ URL::to('/service') }}/{{ $service->url }}">{{ $service->judul }}</a></h3>
									<p></p>
								</div>
							</div>
                        </div>

                        @endforeach
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Service Area End         =-->
            <!--=====================================-->
@include('blog.blog_footer')
