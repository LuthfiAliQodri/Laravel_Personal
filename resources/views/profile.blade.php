<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil - Blog_Luthfi</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/icon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">


	 <!-- Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/beatls.png" alt="" width="250">
			<h2>Hey wait a minute !</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logoo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="{{ url('home') }}">Home</a></li>
				<li class="active"><a href="{{ url('profile') }}">Profil</a></li>
				<li><a href="{{ url('portofolio') }}">Portofolio</a></li>
				<li><a href="{{ url('blog') }}">Artikel</a></li>
				<li><a href="{{ url('gallery') }}">Gallery</a></li>
                <!-- Authentication Links -->
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right" style="background-image: img_3504.jpg;">
			<div class="page-info">
				<h2>Profil</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Profil</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->

	<section class="about-section section" style="background-color: white;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>Humans who are learning for their good</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">Seorang yang biasa saja yang sekolah di SMK Taruna Bhakti dengan jurusan di bidang Rekayasa Perangkat Lunak di Sebuah Sekolah swasta di daerah cimanggis kota depok. Saya yang menimba ilmu beserta adventure dari Bali, Tangerang dan yang terakhir di Depok. Dan semoga kita akan membahas ilmu yang saya bisa di blog ini, Okey!</p>
					
					
		</div><!-- container -->
	</section><!-- about-section -->


	<!-- Google map -->
	<div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0578085920133!2d106.80772401474712!3d-6.2561150954716505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f178e43d6311%3A0x623693b04941b93c!2sHotel+Monopoli!5e0!3m2!1sid!2sid!4v1548922678361" width="1510" height="650" frameborder="0" style="border:0" allowfullscreen></iframe></div>


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2018-2019 All rights reserved. Designed by <a href="copyright" target="_blank">LaokProduction</a></h2>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
