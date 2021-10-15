@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>{{ $data_service->judul }}</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Service</li>
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
			<!--=       Service Area Start          =-->
			<!--=====================================-->
			<section class="section-padding-md">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 order-lg-2">
							<div class="fxt-single-service-layout1">
								<div class="item-img">
									<img style="width: 760px; height: 370px;" src="{{ $data_service->image }}" alt="Service">
								</div>
								<div class="item-content">
                                    {!! $data_service->isi !!}
                                    <div class="why-choose-us">
										<h3 class="item-title">Why Choose Us</h3>
										<div class="row">
											<div class="col-lg-6">
												<div class="icon-box">
													<div class="item-icon">
														<i class="flaticon-latex"></i>
													</div>
													<div class="item-content">
														<h4 class="item-title">Clean Unpolluted</h4>
														<p>There are many passages of Lorem Ipsum suffered alteration.</p>
													</div>
												</div>
												<div class="icon-box">
													<div class="item-icon">
														<i class="flaticon-engineer"></i>
													</div>
													<div class="item-content">
														<h4 class="item-title">Easy and Affortable</h4>
														<p>There are many passages of Lorem Ipsum suffered alteration.</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="icon-box">
													<div class="item-icon">
														<i class="flaticon-car"></i>
													</div>
													<div class="item-content">
														<h4 class="item-title">Lasting &amp; Long Term</h4>
														<p>There are many passages of Lorem Ipsum suffered alteration.</p>
													</div>
												</div>
												<div class="icon-box">
													<div class="item-icon">
														<i class="flaticon-sprout"></i>
													</div>
													<div class="item-content">
														<h4 class="item-title">Generated From Nature</h4>
														<p>There are many passages of Lorem Ipsum suffered alteration.</p>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <h3 class="item-title">Project Terkait Service</h3>
									<div class="row gutters-10">

                                        @foreach ($data_project as $project)
                                                    @php
                                                        $nama_label = $project->nama_label;
                                                        $project->nama_label = str_replace('&', '', $project->nama_label);
                                                        $project->nama_label = str_replace(' ', '', $project->nama_label);
                                                    @endphp
                                                <div class="col-lg-6 col-sm-12 col-12 all {{ $project->nama_label }}">
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
									{{-- <div class="item-more-info">
										<h3 class="item-title">Research &amp; Development</h3>
										<p>There are many variations of passages of Lorem Ipsum available but the majority have that suffered dummy alteration in at that some form by injected. There are many variations of passages of Lorem Ipsum available but the majority in at that
											some form by injected.</p>
										<div class="features-list">
											<div class="row">
												<div class="col-lg-6">
													<ul>
														<li>There are many variations dummy it.</li>
														<li>Many variations of passages dummy it.</li>
														<li>The majority have suffered in that.</li>
													</ul>
												</div>
												<div class="col-lg-6">
													<ul>
														<li>There are many variations dummy it.</li>
														<li>Many variations of passages dummy it.</li>
														<li>The majority have suffered in that.</li>
													</ul>
												</div>
											</div>
										</div>
										<p>There are many variations of passages of Lorem Ipsum available but the majority have that suffered dummy alteration in at that some form by injected. There are many variations of passages of Lorem Ipsum available but the majority in at that
											some form by injected.</p>
									</div> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-4 order-lg-1 template-sidebar">
							{{-- <div class="widget widget-category">
								<ul>
									<li><a href="#">Agricultural Engineering</a></li>
									<li><a href="#">Power and Energy</a></li>
									<li><a href="#">Mechanical Engineering</a></li>
									<li><a href="#">Ship Building Industry</a></li>
									<li><a href="#">Construction &amp; Engineering</a></li>
									<li><a href="#">Aero Space Services</a></li>
								</ul>
							</div> --}}
							<div class="widget widget-download-brochure">
								<h3 class="item-title">Company Profile</h3>
								<p>Ketahui tentang kami lebih baik lagi.</p>
								<a href="#" class="download-btn">Download Company Profile <i class="fas fa-file-invoice"></i></a>
							</div>
							<div class="widget widget-contact-info">
								<h3 class="item-title">Hubungi Kami</h3>
                                <p>Silahkan untuk menghubungi kami melalui kontak berikut.</p>
								<div class="contact-method">
									<ul>
										<li><i class="flaticon-phone-call"></i>Telepon: +(62) 21 732 8399/8499</li>
										<li><i class="flaticon-email"></i>Email: mail@bkmprima.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=         Service Area End          =-->
            <!--=====================================-->
@include('blog.blog_footer')
