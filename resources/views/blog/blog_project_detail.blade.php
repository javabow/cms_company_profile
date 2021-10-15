@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>{{ $data_project->judul }}</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Project</li>
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
			<!--=        Project Area Start         =-->
			<!--=====================================-->
			<section class="section2-padding-md">
				<div class="container">
					<div class="fxt-project-detail-layout1">
						<h2 class="item-title">{{ $data_project->judul }}</h2>
                        {!! $data_project->isi !!}
                        {{-- <div class="item-gallery">
							<div class="row">
								<div class="col-sm-6 col-12">
									<div class="item-img">
										<img src="{{ url::to('/media') }}/project/project7.jpg" alt="Project">
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="item-img">
										<img src="{{ url::to('/media') }}/project/project8.jpg" alt="Project">
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="item-img">
										<img src="{{ url::to('/media') }}/project/project9.jpg" alt="Project">
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="item-img">
										<img src="{{ url::to('/media') }}/project/project10.jpg" alt="Project">
									</div>
								</div>
							</div>
						</div> --}}
						<div class="why-choose-wrap">
							<h2 class="item-title">Semua Project Berdasarkan.</h2>
							<div class="row gutters-50">
								<div class="col-lg-6">
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-process"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Business Plan</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-clock-1"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Fast Building</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-helmet"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Latest Equipment</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-sketch"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Construction Designs</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-loft-with-windows"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">House Rebuilding</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
									<div class="why-choose-list">
										<div class="item-icon">
											<i class="flaticon-shield-1"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Safety Commitment</h3>
											<p>There are many variations of passages of Lorem available but the majority have suffered that alteration in that some form by injected humour or randomised.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=         Project Area End          =-->
            <!--=====================================-->
@include('blog.blog_footer')
