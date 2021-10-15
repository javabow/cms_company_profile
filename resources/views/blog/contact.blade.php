@include('blog.blog_header')

            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="media/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>Contact Us</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Contact</li>
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
			<!--=          Map Area Start           =-->
			<!--=====================================-->
			<div class="google-map">
				<div class="map-layout1" data-lat="40.741895" data-lng="-73.989308" data-mrkr="{{ url::to('/assets/template') }}/assets/img/map-marker.png"></div>
			</div>

			<!--=====================================-->
			<!--=           Map Area End            =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=        Contact Area Start         =-->
            <!--=====================================-->
            <section class="fxt-contact-wrap-layout2 section-padding-md-equal" style="padding-top: 40px;padding-bottom: 10px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12">
                            <div class="section-heading heading-layout5">
                                <h2 class="item-title" style="text-align: center;">Chat</h2>
                                <p style="text-align: center;">Hubungi kami melalui chat whatsapp untuk respon yang lebih cepat dan mudah.</p>
                            </div>
                            <div style="margin-left: 41%;">
                                <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="whatsapp-float-2" target="_blank">
                                    <i class="fa fa-whatsapp my-whatsapp-float-2"></i>
                                    <span style="font-size:25px;">Whatsapp Me</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="fxt-contact-wrap-layout2 section-padding-md-equal" style="padding-top: 30px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6">
							<div class="fxt-contact-box-layout2">
								<div class="section-heading heading-layout5">
									<h2 class="item-title">Get In Touch</h2>
									<p>Contact kami melalui email.</p>
								</div>
								<form class="form-box" id="contact-form" method="POST">
									<div class="row">
										<div class="col-6 form-group">
											<input type="text" placeholder="Your Name" class="form-control" name="name" data-error="Name field is required" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="col-6 form-group">
											<input type="email" placeholder="Your E-mail" class="form-control" name="email" data-error="Email field is required" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="col-12 form-group">
											<textarea placeholder="Your message" class="textarea form-control" name="message" rows="6" cols="20" data-error="Message field is required" required></textarea>
											<div class="help-block with-errors"></div>
										</div>
										<div class="col-12 form-group">
											<button type="submit" class="btn-fill">SEND MESSAGE</button>
										</div>
									</div>
									<div class="form-response"></div>
								</form>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fxt-contact-box-layout2">
								<div class="section-heading heading-layout5">
									<h2 class="item-title">Contact info</h2>
									<p>Hubungi kami untuk info lebih lanjut.</p>
								</div>
								<ul class="address-box">
									<li>
										<div class="item-icon">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Alamat</h3>
											<p>Komplek Perkantoran Regia Boulevard Blok RB 2 No. 67 Kel. Pondok Kacang Barat Kec. Pondok Aren, Kota Tangerang Selatan–Banten 15226</p>
										</div>
									</li>
									<li>
										<div class="item-icon">
											<i class="far fa-envelope"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Email Address</h3>
											<p>info@bkmprima.com</p>
										</div>
									</li>
									<li>
										<div class="item-icon">
											<i class="fas fa-user-friends"></i>
										</div>
										<div class="item-content">
											<h3 class="item-title">Support</h3>
											<p>Telepon: +62-015-152-1002</p>
                                            <p>Fax: +62-215-152-0020</p>

										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=         Contact Area End          =-->
			<!--=====================================-->

@include('blog.blog_footer')
