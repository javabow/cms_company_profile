<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Two | Induslio</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/bootstrap/css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/animate-css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/fontawesome/css/all.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/flaticon/flaticon.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/nivo-slider/css/nivo-slider.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/meanmenu/css/meanmenu.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/magnific-popup/css/magnific-popup.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/owl.carousel/css/owl.carousel.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/template/dependencies/owl.carousel/css/owl.theme.default.min.css') }}" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/template/assets/css/app.css') }}" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,500,600,700&display=swap" rel="stylesheet">


</head>

<body>

	<div class="preloader active-gif">
		<ul class="preloader-custom-style">
			<li class="single-item"></li>
			<li class="single-item"></li>
			<li class="single-item"></li>
			<li class="single-item"></li>
		</ul>
		<div class="preloader-gif">
			<img src="media/preloader.gif" alt="Preloader">
		</div>
	</div>

	<div id="wrapper" class="wrapper">
		<a href="#main_content" data-type="section-switch" class="return-to-top">
			<i class="fas fa-angle-double-up"></i>
		</a>

		<div id="main_content">

			<!--=====================================-->
			<!--=            Navbar Start           =-->
			<!--=====================================-->
			<header class="sticky-fixed-after">
				<div id="topbar-wrap">
					<div class="topbar-layout2">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center">
								<div class="col-lg-9 d-flex justify-content-start">
									<ul class="header-address-info">
										<li class="single-item">Opening Hours: Monday - Saturday 9 am to 5 pm</li>
									</ul>
								</div>
								<div class="col-lg-3 d-flex justify-content-end">
									<ul class="header-social-info">
										<li class="single-item"><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="single-item"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="single-item"><a href="#" title="goodreads"><i class="fab fa-youtube"></i></a></li>
										<li class="single-item"><a href="#" title="pinterest"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="topbar-layout3 bg-color-light pt--20 pb--20">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center">
								<div class="col-lg-3 d-flex justify-content-start">
									<div class="temp-logo">
										<a href="index.html" class="default-logo" id="temp-logo">
						<img src="media/logo2.png" alt="logo" class="img-fluid">
					</a>
									</div>
								</div>
								<div class="col-lg-9 d-flex justify-content-end">
									<ul class="header-address-info">
										<li class="single-item">
											<div class="item-icon">
												<i class="flaticon-phone-call"></i>
											</div>
											<div class="item-content">
												<div class="item-title">Call Us</div>
												<div class="item-sub-title">+01 548 248 2548</div>
											</div>
										</li>
										<li class="single-item">
											<div class="item-icon">
												<i class="flaticon-email"></i>
											</div>
											<div class="item-content">
												<div class="item-title">E-mail</div>
												<div class="item-sub-title">demo@example.com</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sticky-placeholder"></div>
				<div id="navbar-wrap">
					<div class="menu-layout2 bg-color-light">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center">
								<div class="col-lg-8 d-flex justify-content-start possition-static">
									<nav id="dropdown" class="template-main-menu">
										<ul>
											<li>
												<a href="#">Home<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="index.html">Home 1</a></li>
													<li><a href="index2.html">Home 2</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Services<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="service-layout1.html">Service</a></li>
													<li><a href="single-service.html">Service Details</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Projects<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="project-layout1.html">Project Grid</a></li>
													<li><a href="project-layout2.html">Project Full Width</a></li>
													<li><a href="project-layout3.html">Project Masonry</a></li>
													<li><a href="single-project.html">Project Details</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="about-layout1.html">About 1</a></li>
													<li><a href="about-layout2.html">About 2</a></li>
													<li><a href="team-layout1.html">Team 1</a></li>
													<li><a href="team-layout2.html">Team 2</a></li>
													<li><a href="faq.html">Faq</a></li>
													<li><a href="404.html">404</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Blog<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="blog-layout1.html">Blog 1</a></li>
													<li><a href="blog-layout2.html">Blog 2</a></li>
													<li><a href="single-blog.html">Blog Details</a></li>
												</ul>
											</li>
											<li>
												<a href="contact.html">Contact</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="col-lg-4 d-flex justify-content-end">
									<ul class="header-action-items">
										<li class="single-item">
											<div class="search-wrap">
												<a href="#template-search" title="Search" class="search-icon">
								<i class="flaticon-magnifying-glass"></i>
							</a>
											</div>
										</li>
										<li class="single-item">
											<div class="minicart-wrap">
												<span class="cart-icon"><i class="flaticon-shopping-cart"></i></span>
												<span class="cart-quantity">2</span>
												<div class="minicart">
													<ul class="cart-items">
														<li class="d-flex">
															<div class="item-figure">
																<img src="media/shop/shop1.jpg" alt="Cart">
															</div>
															<div class="item-description">
																<span class="item-main-title">Learning Book</span>
																<span class="item-sub-title">TBC 521423HG</span>
																<span class="item-amount d-flex align-items-center"><span class="item-quantity">1</span>X<span class="item-price">$299.00</span></span>
															</div>
															<div class="item-dismiss">
																<a href="#"><i class="fas fa-times"></i></a>
															</div>
														</li>
														<li class="d-flex">
															<div class="item-figure">
																<img src="media/shop/shop2.jpg" alt="Cart">
															</div>
															<div class="item-description">
																<span class="item-main-title">Learning Book</span>
																<span class="item-sub-title">TBC 521423HG</span>
																<span class="item-amount d-flex align-items-center"><span class="item-quantity">1</span>X<span class="item-price">$299.00</span></span>
															</div>
															<div class="item-dismiss">
																<a href="#"><i class="fas fa-times"></i></a>
															</div>
														</li>
													</ul>
													<ul class="total-amount">
														<li>Total Amount</li>
														<li>$759.00</li>
													</ul>
													<ul class="action-buttons">
														<li><a href="#">View Cart</a></li>
														<li><a href="#">Checkout</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li class="single-item">
											<a href="#" class="item-btn btn-fill">GET A QUOTE</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--=====================================-->
			<!--=              Navbar End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section class="fxt-main-banner fxt-main-banner-layout2">
				<div class="bend niceties preview-1">
					<div id="ensign-nivoslider-1" class="slides">
						<img src="media/banner/banner2.jpg" alt="slider" title="#slider-direction-1" />
						<img src="media/banner/banner3.jpg" alt="slider" title="#slider-direction-2" />
						<img src="media/banner/banner4.jpg" alt="slider" title="#slider-direction-3" />
					</div>
					<div id="slider-direction-1" class="slider-direction slider-direction-1">
						<div class="slide slide-1">
							<div class="container d-flex align-items-center justify-content-center">
								<div class="content-box">
									<div class="banner-sub-text">GLOBAL AUTOMATIC</div>
									<h1 class="banner-big-text">Markets with Increasing Trends</h1>
									<p class="banner-paragraph">There are many variations of passages of Lorem Ipsum available but the dummy majority have suffered that alteration randomised words</p>
									<div class="banner-btns">
										<a href="#" class="item-btn btn-fill btn-light">LEARN MORE</a>
										<a href="#" class="item-btn btn-fill">OUR SERVICES</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-direction-2" class="slider-direction slider-direction-2">
						<div class="slide slide-2">
							<div class="container d-flex align-items-center justify-content-center">
								<div class="content-box">
									<div class="banner-sub-text">MECHANICAL</div>
									<h1 class="banner-big-text">To shine your brightest light.</h1>
									<p class="banner-paragraph">There are many variations of passages of Lorem Ipsum available but the dummy majority have suffered that alteration randomised words</p>
									<div class="banner-btns">
										<a href="#" class="item-btn btn-fill btn-light">LEARN MORE</a>
										<a href="#" class="item-btn btn-fill">OUR SERVICES</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-direction-3" class="slider-direction slider-direction-3">
						<div class="slide slide-3">
							<div class="container d-flex align-items-center justify-content-center">
								<div class="content-box">
									<div class="banner-sub-text">TECNICAL SOLUTIONS</div>
									<h1 class="banner-big-text">The Most Successful Design.</h1>
									<p class="banner-paragraph">There are many variations of passages of Lorem Ipsum available but the dummy majority have suffered that alteration randomised words</p>
									<div class="banner-btns">
										<a href="#" class="item-btn btn-fill btn-light">LEARN MORE</a>
										<a href="#" class="item-btn btn-fill">OUR SERVICES</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Main Banner End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=        About Section Start        =-->
			<!--=====================================-->
			<section class="section-padding-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">WELCOME TO</div>
						<h2 class="item-title">Induslio Company</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="row gutters-40">
						<div class="col-lg-5">
							<div class="fxt-about-box-layout8">
								<div class="item-img">
									<img src="media/about/about6.jpg" alt="about">
								</div>
							</div>
						</div>
						<div class="col-lg-7 d-flex align-items-center">
							<div class="fxt-about-box-layout9">
								<div class="row">
									<div class="col-lg-6">
										<div class="item-box">
											<div class="item-heading">
												<div class="item-icon">
													<i class="flaticon-manufacturer"></i>
												</div>
												<h3 class="item-title">Automobile Manufacturing</h3>
											</div>
											<p>There are many variations of the more passages of Lorem Ipsum.</p>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item-box">
											<div class="item-heading">
												<div class="item-icon">
													<i class="flaticon-oil"></i>
												</div>
												<h3 class="item-title">Energy Saver of Oil and Gas</h3>
											</div>
											<p>There are many variations of the more passages of Lorem Ipsum.</p>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item-box">
											<div class="item-heading">
												<div class="item-icon">
													<i class="flaticon-piston"></i>
												</div>
												<h3 class="item-title">Mechanical Engineering</h3>
											</div>
											<p>There are many variations of the more passages of Lorem Ipsum.</p>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item-box">
											<div class="item-heading">
												<div class="item-icon">
													<i class="flaticon-helmet"></i>
												</div>
												<h3 class="item-title">Construction & Engineering</h3>
											</div>
											<p>There are many variations of the more passages of Lorem Ipsum.</p>
										</div>
									</div>
								</div>
								<div class="row no-gutters mt-3 mt-lg-5">
									<div class="col-sm-4 col-12">
										<div class="fxt-progress-box-layout1">
											<div class="item-content">
												<div class="counting-text counter" data-num="1200">1200</div>
												<h3 class="counting-title">Projets</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-12">
										<div class="fxt-progress-box-layout1">
											<div class="item-content">
												<div class="counting-text counter" data-num="800">800</div>
												<h3 class="counting-title">Happy Clients</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-12">
										<div class="fxt-progress-box-layout1">
											<div class="item-content">
												<div class="counting-text counter" data-num="99">99</div>
												<h3 class="counting-title">Satisfaction</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=         About Section End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=       Service Section Start       =-->
			<!--=====================================-->
			<section class="section-padding-md bg-color-accent4">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">OUR</div>
						<h2 class="item-title">Latest Services</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="fxt-service-box-layout2">
								<div class="item-img">
									<img src="media/service/service1.jpg" alt="services">
								</div>
								<div class="item-content">
									<div class="item-icon">
										<i class="flaticon-car-parts"></i>
									</div>
									<h3 class="item-title"><a href="single-service.html">Automotive Manufacturing</a></h3>
									<p>There are many variations of passages of is to Lorem Ipsum available.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fxt-service-box-layout2">
								<div class="item-img">
									<img src="media/service/service2.jpg" alt="services">
								</div>
								<div class="item-content">
									<div class="item-icon">
										<i class="flaticon-engineer"></i>
									</div>
									<h3 class="item-title"><a href="single-service.html">Mechanical Engineering</a></h3>
									<p>There are many variations of passages of is to Lorem Ipsum available.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fxt-service-box-layout2">
								<div class="item-img">
									<img src="media/service/service6.jpg" alt="services">
								</div>
								<div class="item-content">
									<div class="item-icon">
										<i class="flaticon-worker"></i>
									</div>
									<h3 class="item-title"><a href="single-service.html">Industrial  Construction</a></h3>
									<p>There are many variations of passages of is to Lorem Ipsum available.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=        Service Section End        =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=       Project Section Start       =-->
			<!--=====================================-->
			<section class="fxt-project-wrap-layout2 section-padding-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">OUR WORKS</div>
						<h2 class="item-title">Latest Projects</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="isotope-wrap">
						<div class="isotope-classes-tab isotop-btn">
							<a href="#" class="current nav-item" data-filter=".all">All</a>
							<a href="#" class="nav-item" data-filter=".architecture">Branding</a>
							<a href="#" class="nav-item" data-filter=".art">Web Design </a>
							<a href="#" class="nav-item" data-filter=".design">UI/UX</a>
						</div>
						<div class="row featuredContainer">
							<div class="col-lg-4 col-sm-6 col-12 all art">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project39.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project39.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12 all design">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project40.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project40.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12 all art design">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project41.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project41.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12 all architecture design">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project43.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project43.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12 all architecture">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project42.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project42.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 col-12 all art design">
								<div class="fxt-project-box-layout1">
									<div class="item-img">
										<img src="media/project/project44.jpg" alt="Projects">
									</div>
									<div class="item-content">
										<div class="item-icon">
											<a href="media/project/project44.jpg" class="popup-zoom" data-fancybox-group="gallery"><i class="flaticon-add"></i></a>
										</div>
										<h3 class="item-title"><a href="#">Pre Construction</a></h3>
										<div class="item-catagory">Agriculture, Chemical</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mb--30 mt--20">
						<a href="project-layout3.html" class="item-btn btn-fill">LOAD MORE</a>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=       Project Section End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Inner Banner Section Start     =-->
			<!--=====================================-->
			<section class="fxt-inner-banner-wrap-layout2 bg-no-repeat bg-size-cover" data-bg-image="media/figure/bg-img2.jpg">
				<div class="container">
					<div class="fxt-inner-banner-box-layout2">
						<div class="item-subtitle">EXPLORE FEATURES</div>
						<h2 class="item-title">The best industrial company since 1983</h2>
						<a href="#" class="btn-fill">PURCHASE ORDER</a>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=    Inner Banner Section End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     Testimonial Section Start     =-->
			<!--=====================================-->
			<section class="fxt-testimonial-wrap-layout2 section-padding-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">WHAT</div>
						<h2 class="item-title">Clients Saying</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="rc-carousel" data-loop="true" data-items="30" data-margin="30" data-autoplay="true" data-autoplay-timeout="4000" data-smart-speed="1000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
					 data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="2"
					 data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="2" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
						<div class="fxt-testimonial-box-layout2">
							<div class="item-img">
								<img src="media/figure/testimonial4.jpg" alt="testimonial">
							</div>
							<div class="item-content">
								<div class="title-wrap">
									<div class="item-icon">
										<i class="flaticon-quotation-mark"></i>
									</div>
									<h3 class="item-title">Daphnee Schoen</h3>
								</div>
								<p>‘’ There are many variations of that passages of Lorem Ipsum dummy available but majority have to the alteration. ’’</p>
								<div class="item-rating">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="fxt-testimonial-box-layout2">
							<div class="item-img">
								<img src="media/figure/testimonial5.jpg" alt="testimonial">
							</div>
							<div class="item-content">
								<div class="title-wrap">
									<div class="item-icon">
										<i class="flaticon-quotation-mark"></i>
									</div>
									<h3 class="item-title">Jeanette Gottlieb</h3>
								</div>
								<p>‘’ There are many variations of that passages of Lorem Ipsum dummy available but majority have to the alteration. ’’</p>
								<div class="item-rating">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=      Testimonial Section End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Faq Section Start         =-->
			<!--=====================================-->
			<section class="fxt-faq-wrap-layout3 section-padding-top-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">ASK QESTION</div>
						<h2 class="item-title">Some FAQ’s</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-6 col-12 order-xl-2 compress-right-side">
							<div class="fxt-faq-box-layout3">
								<div id="accordion" class="accordion">
									<div class="card">
										<div class="card-header">
											<h3 class="heading-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">Which material types can you work with?</h3>
										</div>
										<div id="collapseOne" class="collapse show" data-parent="#accordion">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available to but the that majority have suffered alteration in that some form by injected humour which look even slightly believable.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="heading-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">Which types of works does manufacture?</h3>
										</div>
										<div id="collapseTwo" class="collapse" data-parent="#accordion">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available to but the that majority have suffered alteration in that some form by injected humour which look even slightly believable.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="heading-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">Industries control its manufacturing process?</h3>
										</div>
										<div id="collapseThree" class="collapse" data-parent="#accordion">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available to but the that majority have suffered alteration in that some form by injected humour which look even slightly believable.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="heading-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">Which parts do you most commonly machine</h3>
										</div>
										<div id="collapseFour" class="collapse" data-parent="#accordion">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available to but the that majority have suffered alteration in that some form by injected humour which look even slightly believable.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="heading-title collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">Industries control its manufacturing process?</h3>
										</div>
										<div id="collapseFive" class="collapse" data-parent="#accordion">
											<div class="card-body">
												There are many variations of passages of Lorem Ipsum available to but the that majority have suffered alteration in that some form by injected humour which look even slightly believable.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12 order-xl-1">
							<div class="fxt-faq-box-layout2">
								<div class="item-img">
									<img src="media/team/team8.png" alt="Team Member">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Faq Section End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=       Feature Section Start       =-->
			<!--=====================================-->
			<section class="fxt-features-wrap-layout1 section-padding-sm bg-no-repeat bg-size-cover" data-bg-image="media/figure/bg-img1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-12">
							<div class="fxt-features-box-layout1">
								<div class="item-icon">
									<i class="flaticon-creativity"></i>
								</div>
								<div class="item-content">
									<h3 class="item-title">Creative Ideas</h3>
									<p>There are many variations of the more passages of the Lorem.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="fxt-features-box-layout1">
								<div class="item-icon">
									<i class="flaticon-shield"></i>
								</div>
								<div class="item-content">
									<h3 class="item-title">Super Safety</h3>
									<p>There are many variations of the more passages of the Lorem.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="fxt-features-box-layout1">
								<div class="item-icon">
									<i class="flaticon-customer-service"></i>
								</div>
								<div class="item-content">
									<h3 class="item-title">24/7 Support</h3>
									<p>There are many variations of the more passages of the Lorem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=        Feature Section End        =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=          Team Area Start          =-->
			<!--=====================================-->
			<section class="section-padding-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">OUR</div>
						<h2 class="item-title">Awsome Team</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="fxt-team-box-layout2">
								<div class="item-img">
									<img src="media/team/team4.jpg" alt="team">
								</div>
								<div class="item-content">
									<h3 class="item-title"><a href="#">Destiny Waelchi</a></h3>
									<div class="item-subtitle">Constractor</div>
									<div class="item-social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="fxt-team-box-layout2">
								<div class="item-img">
									<img src="media/team/team5.jpg" alt="team">
								</div>
								<div class="item-content">
									<h3 class="item-title"><a href="#">Eloisa Champlin</a></h3>
									<div class="item-subtitle">Founder &amp; CEO</div>
									<div class="item-social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="fxt-team-box-layout2">
								<div class="item-img">
									<img src="media/team/team6.jpg" alt="team">
								</div>
								<div class="item-content">
									<h3 class="item-title"><a href="#">Ramon Abbott</a></h3>
									<div class="item-subtitle">Plumber</div>
									<div class="item-social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="fxt-team-box-layout2">
								<div class="item-img">
									<img src="media/team/team7.jpg" alt="team">
								</div>
								<div class="item-content">
									<h3 class="item-title"><a href="#">Eloisa Champlin</a></h3>
									<div class="item-subtitle">Constractor</div>
									<div class="item-social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=           Team Area End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Brand Area Start          =-->
			<!--=====================================-->
			<section class="section-padding-sm bg-color-accent2">
				<div class="container">
					<div class="rc-carousel" data-loop="true" data-items="30" data-margin="30" data-autoplay="false" data-autoplay-timeout="4000" data-smart-speed="1000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
					 data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="5"
					 data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="5" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
						<div class="fxt-brand-box-layout1">
							<img src="media/brand/brand1.png" alt="brand">
						</div>
						<div class="fxt-brand-box-layout1">
							<img src="media/brand/brand2.png" alt="brand">
						</div>
						<div class="fxt-brand-box-layout1">
							<img src="media/brand/brand3.png" alt="brand">
						</div>
						<div class="fxt-brand-box-layout1">
							<img src="media/brand/brand4.png" alt="brand">
						</div>
						<div class="fxt-brand-box-layout1">
							<img src="media/brand/brand5.png" alt="brand">
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Brand Area End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=           Blog Area Start         =-->
			<!--=====================================-->
			<section class="fxt-blog-wrap-layout2 section-padding-md">
				<div class="container">
					<div class="section-heading heading-layout2">
						<div class="item-subtitle">OUR</div>
						<h2 class="item-title">Latest Blog</h2>
						<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered that alteration by the injected words.</p>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-6 col-12">
							<div class="fxt-blog-box-layout2">
								<div class="item-img">
									<img src="media/blog/blog3.jpg" alt="blog">
								</div>
								<div class="item-content">
									<h3 class="item-title text-row-2"><a href="single-blog.html">To shine your brightest light be who you are.</a></h3>
									<div class="entry-meta">
										<ul>
											<li><i class="far fa-calendar-alt"></i>Jul 12, 2018</li>
											<li><i class="far fa-user"></i>By: <a href="#">Admin</a></li>
										</ul>
									</div>
									<p>There are many variations of the an on passages of Lorem Ipsum dumm is the available dummy text.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="fxt-blog-box-layout2">
								<div class="item-img">
									<img src="media/blog/blog4.jpg" alt="blog">
								</div>
								<div class="item-content">
									<h3 class="item-title text-row-2"><a href="single-blog.html">To shine your brightest light be who you are.</a></h3>
									<div class="entry-meta">
										<ul>
											<li><i class="far fa-calendar-alt"></i>Jul 12, 2018</li>
											<li><i class="far fa-user"></i>By: <a href="#">Admin</a></li>
										</ul>
									</div>
									<p>There are many variations of the an on passages of Lorem Ipsum dumm is the available dummy text.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 d-xl-block d-md-none">
							<div class="fxt-blog-box-layout2">
								<div class="item-img">
									<img src="media/blog/blog5.jpg" alt="blog">
								</div>
								<div class="item-content">
									<h3 class="item-title text-row-2"><a href="single-blog.html">To shine your brightest light be who you are.</a></h3>
									<div class="entry-meta">
										<ul>
											<li><i class="far fa-calendar-alt"></i>Jul 12, 2018</li>
											<li><i class="far fa-user"></i>By: <a href="#">Admin</a></li>
										</ul>
									</div>
									<p>There are many variations of the an on passages of Lorem Ipsum dumm is the available dummy text.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=            Blog Area End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Call To Action Area Start    =-->
			<!--=====================================-->
			<section class="fxt-action-wrap-layout2">
				<div class="container">
					<div class="fxt-action-box-layout1">
						<div class="row align-items-center">
							<div class="col-lg-5">
								<div class="contact-box">
									<div class="item-icon">
										<i class="flaticon-phone-call"></i>
									</div>
									<div class="item-content">
										<div class="item-text">CALL US ON</div>
										<div class="item-number">222-121-4562</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<form class="sign-up-form">
									<div class="row gutters-20">
										<div class="col-lg-9">
											<div class="row gutters-20">
												<div class="col-lg-6">
													<div class="form-group">
														<input type="text" placeholder="Name" class="form-control">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<input type="email" placeholder="E-mail Address" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group mb-0">
												<button type="submit" class="submit-btn">SIGN UP</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=       Call To Action Area End     =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Footer Area Start         =-->
			<!--=====================================-->
			<footer id="footer-wrap-layout1" class="footer-wrap-layout1">
				<div class="footer-top-layout1">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-3 col-md-6 col-12">
								<div class="footer-widgets">
									<div class="footer-logo-layout1">
										<a href="index.html"><img src="media/logo.png" alt="Logo"></a>
									</div>
									<p>There are many variations of the passages of the Lorem Ipsum more available but the an majority a have a suffered alteration.</p>
									<ul class="footer-social-layout1">
										<li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-md-6 col-12">
								<div class="footer-widgets">
									<h3 class="footer-widget-heading">Our Company</h3>
									<ul class="footer-menu-layout1">
										<li><a href="#">About Company</a></li>
										<li><a href="#">Latest From Blog</a></li>
										<li><a href="#">Our Testimonials</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Latest Projects</a></li>
										<li><a href="#">Get a Quote</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12">
								<div class="footer-widgets">
									<h3 class="footer-widget-heading">Our Solutions</h3>
									<ul class="footer-menu-layout1">
										<li><a href="#">Automotive Manufacturing</a></li>
										<li><a href="#">Industrial Construction</a></li>
										<li><a href="#">Mechanical Engineering</a></li>
										<li><a href="#">Bridge Construction</a></li>
										<li><a href="#">Petroleum and Gas</a></li>
										<li><a href="#">Oil &amp; Gas Energy</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 bg-size-contain bg-no-repeat bg-position-center" data-bg-image="media/elements/map.png">
								<div class="footer-widgets">
									<h3 class="footer-widget-heading">Contact Information</h3>
									<ul class="footer-contact-layout1">
										<li><span>Phone:</span> +1-605-722-2032</li>
										<li><span>Email:</span> example@mail.com</li>
										<li><span>Address:</span> Charlotte, North Carolina, United States</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-layout1">
					<div class="container">
						<div class="copy-right-wrap-layout1">
							<p class="copy-right-text">Induslio Copyright © 2019. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>
			<!--=====================================-->
			<!--=          Footer Area End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=       Template Search Start       =-->
			<!--=====================================-->
			<div id="template-search" class="template-search">
				<button type="button" class="close">×</button>
				<form class="search-form">
					<input type="search" value="" placeholder="Type here........" />
					<button type="submit" class="search-btn">
			<i class="flaticon-magnifying-glass"></i>
		</button>
				</form>
			</div>
			<!--=====================================-->
			<!--=        Template Search End        =-->
			<!--=====================================-->

		</div>
	</div>

	<!-- Dependency Scripts -->
	<script src="{{ asset('assets/template/dependencies/popper.js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/jquery.appear/jquery.appear.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/gmap3/js/gmap3.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/owl.carousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/counter-up/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/waypoints/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/meanmenu/js/jquery.meanmenu.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/nivo-slider/js/home.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/template/dependencies/validator/validator.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>

	<!-- Site Scripts -->
	<script src="assets/js/app.js"></script>

</body>

</html>
