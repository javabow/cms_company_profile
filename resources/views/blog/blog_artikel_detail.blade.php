@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>{{ $data_artikel->judul }}</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Blog</li>
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
			<!--=          Blog Area Start          =-->
			<!--=====================================-->
			<section class="section-padding-md">
				<div class="container">
					<div class="row gutters-50">
						<div class="col-lg-8">
							<div class="fxt-single-blog-layout1">
								<div class="item-img">
									<img style="width: 750px; height: 370px;" src="{{ $data_artikel->image }}" alt="blog">
								</div>
								<div class="item-content">
									<div class="entry-meta">
										<ul>
											<li><i class="far fa-calendar-alt"></i>{{ $data_artikel->created_at->format('d F Y') }}</li>
											<li><i class="far fa-user"></i>Admin</li>
											<li><i class="fas fa-tags"></i>{{ $data_artikel->nama_label }}</li>
										</ul>
									</div>
									<h2 class="item-title">{{ $data_artikel->judul }}</h2>
									{!! $data_artikel->isi !!}
									<div class="bottom-content">
										<div class="row">
											<div class="col-lg-6">
												<div class="item-tag">Category:
													<a href="{{ url::to('artikel/label/'.str_replace(' ', '-', strtolower($data_artikel->nama_label))) }}">{{ $data_artikel->nama_label }}</a>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="item-social">Share on:
													<a href="#"><i class="fab fa-facebook-f"></i></a>
													<a href="#"><i class="fab fa-twitter"></i></a>
													<a href="#"><i class="fab fa-instagram"></i></a>
													{{-- <a href="#"><i class="fab fa-google-plus-g"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-4 template-sidebar">
							{{-- <div class="widget widget-border-box widget-search-box">
								<div class="widget-heading">
									<h3 class="item-title">Search</h3>
								</div>
								<div class="input-group stylish-input-group">
									<input type="text" class="form-control" placeholder="Search Keywords">
									<span class="input-group-addon">
                            <button type="submit">
                                <span class="flaticon-magnifying-glass" aria-hidden="true"></span>
									</button>
									</span>
								</div>
							</div> --}}
							<div class="widget widget-border-box widget-category-2">
								<div class="widget-heading">
									<h3 class="item-title">Categories</h3>
								</div>
								<div class="category-list">
									<ul>
                                        @foreach ($data_label as $label)

                                        <li><a href="{{ url::to('artikel/label/'.str_replace(' ', '-', strtolower($label->nama_label))) }}">{{ $label->nama_label }}</a></li>

                                        @endforeach
									</ul>
								</div>
							</div>
							<div class="widget widget-border-box widget-recent-post">
								<div class="widget-heading">
									<h3 class="item-title">Recent News</h3>
								</div>
								<div class="post-box-wrap">

                                    @foreach ($data_side_artikel as $side_artikel)
                                    <div class="post-box">
										<div class="item-img">
											<a href="{{ url::to('/') }}/artikel/{{ $side_artikel->url }}"><img style="width: 80px;height: 70px;" src="{{ $side_artikel->image }}" alt="{{ $side_artikel->judul }}"></a>
										</div>
										<div class="item-content">
											<a style="font-size: 12px;" href="{{ url::to('artikel/label/'.str_replace(' ', '-', strtolower($side_artikel->nama_label))) }}" class="item-tag">{{ $side_artikel->nama_label }}</a>
											<br><span class="item-date">{{ $side_artikel->created_at->format('d F Y') }}</span>
											<h4 class="item-title"><a href="{{ url::to('/') }}/artikel/{{ $side_artikel->url }}">{{ $side_artikel->judul }}</a></h4>
										</div>
									</div>
                                    @endforeach

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Blog Area End            =-->
			<!--=====================================-->
@include('blog.blog_footer')
