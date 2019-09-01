<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery - Blog_Luthfi</title>
    <meta charset="UTF-8">
    <meta name="description" content="LaokProduction18-19">
    <meta name="keywords" content="luthfialiqodri, luthfiali, luthfi, portofolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/icon.png')}}" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,600" rel="stylesheet">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="{{asset('img/beatls.png')}}" alt="" width="250">
            <h2>Hey wait a minute !</h2>
        </div>
    </div>


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="{{asset('img/logoo.png')}}" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <ul class="menu-list">
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('profile') }}">Profil</a></li>
            <li><a href="{{ url('portofolio') }}">Portofolio</a></li>
            <li><a href="{{ url('blog') }}">Artikel</a></li>
            <li class="active"><a href="{{ url('gallery') }}">Gallery</a></li>
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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
				<h2>Gallery</h2>
				<div class="page-links">
					<a href="{{ url('home') }}">Home</a>
					<span>Gallery</span>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="alert alert-dismissible alert-info">
  <strong>Don't forget to see this info!</strong> this is info about <a href="{{ url('galleries') }}" class="alert-link"> Data Image</a>, Have Fun And Chillin.
  </div> -->
	<!-- Page header end -->

<!-- services card section-->
<div class="services-card-section spad">
		<div class="container-fluid">
            <div class="section-title dark">
				<h2>Get in <span>Gallery</span> and see my all picture</h2>
			</div>
			<div class="row">
				<!-- Single Card -->
                @foreach ($galleries as $gallery)
				<div class="col-md-4 col-sm-6">
                
					<div class="sv-card">
						<div class="card-img">
							<img src="{{ url('uploadsgallery/'.$gallery->foto) }}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$gallery['judul']}}</h2>
							<p>{{$gallery['deskripsi']}}</p>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->





    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2018-2019 All rights reserved. Designed by <a href="/copyright" target="_blank">LaokProduction</a></h2>
    </footer>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
