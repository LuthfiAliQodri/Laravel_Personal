<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portofolio - Blog_Luthfi</title>
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
				<li><a href="{{ url('profile') }}">Profil</a></li>
				<li class="active"><a href="{{ url('portofolio') }}">Portofolio</a></li>
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
		<div class="container text-right">
			<div class="page-info">
				<h2>Portofolio</h2>
				<div class="page-links">
					<a href="{{ url('') }}">Home</a>
					<span>Portofolio</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="img/IMG_0792.jpg" alt=""></div>
						<h2><b>Luthfi Ali Qodri</b></h2>
						<h4 class="font-yellow">Web Designer | Photograpy | Music Collection</h4>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>Februari,2002</li>
							<li><b>EMAIL : </b>luthfiali45@gmail.com</li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://www.instagram.com/laok112/"><i class="ion-social-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/Laok112"><i class="ion-social-facebook"></i></a></li>
							<li><a href="https://twitter.com/laok112"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Gallery</b></h3>
						<h6 class="font-lite-black"><b>MY GALLERY</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".music"><b>MUSIC</b></a>
						<a href="#" data-filter=".cert"><b>CERTIFICATE</b></a><a href="#" data-filter=".ach"><b>COLLAB</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
			
			<div class="p-item cert">
				<a href="img/cert/certhtml.jpg" data-fluidbox>
					<img src="img/cert/certhtml.jpg" alt=""></a>
			</div><!-- p-item -->                                               
			<div class="p-item cert">
				<a href="img/cert/certphp.jpg" data-fluidbox>
					<img src="img/cert/certphp.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item cert">
			<a href="img/cert/certcss.jpg" data-fluidbox>
					<img src="img/cert/certcss.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/certjava.jpg" data-fluidbox>
					<img src="img/cert/certjava.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/0001.jpg" data-fluidbox>
					<img src="img/cert/0001.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/UC-0USXC5ZX.jpg" data-fluidbox>
					<img src="img/cert/UC-0USXC5ZX.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/UC-B6WVDRHL.jpg" data-fluidbox>
					<img src="img/cert/UC-B6WVDRHL.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/UC-F3M2MXD5.jpg" data-fluidbox>
					<img src="img/cert/UC-F3M2MXD5.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item cert">
			<a href="img/cert/UC-G4LTOP60.jpg" data-fluidbox>
					<img src="img/cert/UC-G4LTOP60.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item ach">
			<a href="img/ach.png" data-fluidbox>
					<img src="img/ach.png" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item p-item-2 music">
				<a class="img" href="img/8.jpg" data-fluidbox>
					<img src="img/8.jpg" alt=""></a>
				<a class="img" href="img/11.jpg" data-fluidbox>
					<img src="img/11.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item music">
				<a href="img/6.jpg" data-fluidbox>
					<img src="img/6.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item origin">
				<a href="img/10.jpg" data-fluidbox>
					<img src="img/10.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item music">
				<a href="img/2.jpg" data-fluidbox>
					<img src="img/2.jpg" alt=""></a>
			</div><!-- p-item -->
				
			<div class="p-item music">
				<a href="img/7.jpg" data-fluidbox>
					<img src="img/7.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item p-item-2 music">
				<a class="img" href="img/3.jpg" data-fluidbox>
					<img src="img/3.jpg" alt=""></a>
				<a class="img" href="img/4.jpg" data-fluidbox>
					<img src="img/4.jpg" alt=""></a>
			</div><!-- p-item -->
		
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
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
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".88">
									<div></div>
									<h6 class="progress-title">HTML & CSS</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".90">
									<div></div>
									<h6 class="progress-title">ADOBE PREMIRE</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".85">
									<div></div>
									<h6 class="progress-title">LARAVEL</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".80">
									<div></div>
									<h6 class="progress-title">CODEIGNITER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>My Skill</b></h3>
						<h6 class="font-lite-black"><b>ALL ABOUT FOR MY SKILL</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				
					<div class="experience margin-b-50">
					<ul>

					<li><strong>Diagram Software</strong>&nbsp;–&nbsp;<code>Gliffy</code></li><br>

					<li><strong>Mockup Software</strong>&nbsp;–&nbsp;<code>Adobe XD</code></li><br>

					<li><strong>Branding And Logo Designer</strong>&nbsp;–&nbsp;<code>Adobe Ilustrator</code>&nbsp;/&nbsp;<code>Adobe Photoshop</code></li><br>

					<li><strong>Video Editor</strong>&nbsp;–&nbsp;<code>Adobe Premire</code>&nbsp;/&nbsp;<code>Vegas Pro</code>&nbsp;/&nbsp;<code>Wondershare Video Converter</code></li><br>

					<li><strong>Audition Editor&nbsp;&nbsp;</strong>–&nbsp;<code>Adobe Audition</code>&nbsp;/&nbsp;<code>AudaCity</code>&nbsp;</li><br>

					<li><strong>Photo Editor&nbsp;</strong>–&nbsp;<code>Adobe Lightroom</code>&nbsp;&nbsp;</li><br>

					<li><strong>Microsoft Software&nbsp;</strong>–&nbsp;<code>Microsoft Word</code>&nbsp;/&nbsp;<code>Microsoft Power Point</code></li><br>


					<li><strong>Web Programming</strong>&nbsp;–&nbsp;<code>CSS</code>&nbsp;/&nbsp;<code>MYSQL</code>&nbsp;/&nbsp;<code>HTML</code>&nbsp;/&nbsp;<code>WordPress</code>&nbsp;/&nbsp;<code>CodeIgniter</code>&nbsp;/&nbsp;<code>Laravel</code>&nbsp;/&nbsp;<code>Java</code>&nbsp;/&nbsp;<code>PHP</code><br>&nbsp;/&nbsp;<code>Bootstarp</code></li>

					</ul>
					</div><!-- experience -->
					
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>TK Aisyiyah Bustanul Athfal 3 (Denpasar, Bali)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2007-2009(2 YEARS)</h6>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4><b>Sekolah Dasar 3 Muhammadiyah (Denpasar, Bali)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2009-2009(8 MOUNTH)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>Sekolah Dasar Muhammadiyah 30 (Banten, Tangerang)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2009-2010(4 MOUNTH)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>Sekolah Dasar Negeri Sukamaju Baru 3 (Sukamaju Baru, Depok)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2010-2015(5 YEARS)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SMP Negeri 11 Depok (Sukatani, Depok)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2015-2018(3 YEARS)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SMK Taruna Bhakti (Cimanggis, Depok)</b></h4>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN 2018-NOW(-)</h6>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="3">0</span></b></h1>
						<h5 class="desc"><b>Project UnCompleted</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="150">0</span></b></h1>
						<h5 class="desc"><b>Project Completed</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="3">0</span></b></h1>
						<h5 class="desc"><b>Website</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="157">0</span></b></h1>
						<h5 class="desc"><b>Finished Projects</b></h5>
					</div><!-- margin-b-30 -->
				</div><!-- col-md-3-->
				
			</div><!-- row-->
		</div><!-- container-->
    </section><!-- counter-section-->
	


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
	<script src="common-js/jquery-3.2.1.min.js"></script>
	<script src="common-js/tether.min.js"></script>
	<script src="common-js/bootstrap.js"></script>
	<script src="common-js/isotope.pkgd.min.js"></script>
	<script src="common-js/jquery.waypoints.min.js"></script>
	<script src="common-js/progressbar.min.js"></script>
	<script src="common-js/jquery.fluidbox.min.js"></script>
	<script src="common-js/scripts.js"></script>
</body>
</html>
