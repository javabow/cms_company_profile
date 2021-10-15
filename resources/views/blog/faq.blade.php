@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>Faq</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Faq</li>
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
			<!--=          Faq Area Start           =-->
			<!--=====================================-->
			<section class="section-padding-md">
				<div class="container">
					<div class="fxt-faq-box-layout1">
						<h2 class="item-title">Frequently Asked Questions</h2>
						<div id="accordion" class="accordion">
							<div class="row">
                                @foreach ($data_label as $label)

								<div style="padding-top: 25px;" class="col-lg-6">
                                    <h3>{{ $label->nama_label }}</h3>
                                    <hr>
                                    @isset($data_faq[$label->id_label])

                                        @foreach ($data_faq[$label->id_label] as $faq)

                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="heading-title collapsed" data-toggle="collapse" data-target="#collapse{{ $faq->id_faq }}" aria-expanded="false">{{ $faq->pertanyaan }}</h3>
                                            </div>
                                            <div id="collapse{{ $faq->id_faq }}" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ $faq->jawaban }}
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach

                                    @endisset
                                </div>

                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=           Faq Area End            =-->
            <!--=====================================-->
@include('blog.blog_footer')
