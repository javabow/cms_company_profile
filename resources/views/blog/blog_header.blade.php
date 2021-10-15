<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Two | Induslio</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ url::to('/media') }}/favicon.png">

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/template/assets/css/app.css') }}" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,500,600,700&display=swap" rel="stylesheet">

    <style type="text/css">
        .whatsapp-float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:100px;
            right:10px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
        }

        .my-whatsapp-float{
            margin-top:16px;
        }

        .whatsapp-float-2{
            width:340px;
            height:140px;
            background-color:#25d366;
            color:#FFF;
            border-radius:30px;
            text-align:center;
            font-size:25px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
            text-decoration: none;
            padding: 10px;
        }

        .my-whatsapp-float-2{
            margin-top:10px;
        }
    </style>

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
			<img src="{{ url::to('/media') }}/preloader.gif" alt="Preloader">
		</div>
    </div>

    <a href="#" class="whatsapp-float" target="_blank">
        <i class="fa fa-whatsapp my-whatsapp-float"></i>
    </a>

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
										<li class="single-item">Jam Kerja: Senin - Sabtu 08:00 to 16:00</li>
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
				</div>
				<div id="sticky-placeholder"></div>
				<div id="navbar-wrap">
					<div class="menu-layout2 bg-color-light">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-4 d-flex justify-content-start possition-static">
                                    <div class="temp-logo">
                                        <a href="index.html" class="default-logo" id="temp-logo">
                                            <img src="{{ url::to('/media') }}/logobkm.png" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
								<div class="col-lg-7 d-flex justify-content-end possition-static">
									<nav id="dropdown" class="template-main-menu">
										<ul>
											<li>
												<a href="{{ url::to('/') }}">Home</a>
											</li>
											<li>
												<a href="{{ url::to('/service') }}">Service</a>
											</li>
											<li>
												<a href="{{ url::to('/project') }}">Project</a>
                                            </li>
                                            <li>
												<a href="{{ url::to('/artikel') }}">Artikel</a>
											</li>
											<li>
												<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
												<ul class="dropdown-menu-col-1">
													<li><a href="{{ url::to('/about-company') }}">Tentang Kami</a></li>
													<li><a href="{{ url::to('/faq') }}">Pertanyaan Umum</a></li>
												</ul>
											</li>
											<li>
												<a href="{{ url::to('/contact') }}">Contact</a>
                                            </li>
										</ul>
									</nav>
								</div>
								<div class="col-lg-1 d-flex justify-content-end">
									<ul class="header-action-items">
										<li class="single-item">
											<div class="search-wrap">
												<a href="#template-search" title="Search" class="search-icon">
								<i class="flaticon-magnifying-glass"></i>
							</a>
											</div>
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
