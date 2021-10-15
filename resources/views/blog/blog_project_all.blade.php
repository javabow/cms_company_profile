@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>Project Kami</h1>
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
			<section class="fxt-project-wrap-layout2 section-padding-md">
				<div class="container">
					<div class="isotope-wrap">
						<div class="isotope-classes-tab isotop-btn">
                            <a href="#" class="current nav-item" data-filter=".all">All</a>
                            @foreach ($data_label as $label)
                                @php
                                    $nama_label = $label->nama_label;
                                    $label->nama_label = str_replace('&', '', $label->nama_label);
                                    $label->nama_label = str_replace(' ', '', $label->nama_label);
                                @endphp
							    <a href="#" class="nav-item" data-filter=".{{ $label->nama_label }}">{{ $nama_label }}</a>
                            @endforeach
						</div>
						<div class="row featuredContainer">
                            @foreach ($data_project as $project)
                                @php
                                    $nama_label = $project->nama_label;
                                    $project->nama_label = str_replace('&', '', $project->nama_label);
                                    $project->nama_label = str_replace(' ', '', $project->nama_label);
                                @endphp
                            <div class="col-lg-4 col-sm-6 col-12 all {{ $project->nama_label }}">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="{{ $project->image }}" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="{{ URL::to('/project') }}/{{ $project->url }}" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="{{ URL::to('/project') }}/{{ $project->url }}">{{ $project->judul }}</a></h3>
										<div class="item-catagory">{{ $nama_label }}</div>
									</div>
								</div>
                            </div>

                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=         Project Area End          =-->
			<!--=====================================-->
@include('blog.blog_footer')
