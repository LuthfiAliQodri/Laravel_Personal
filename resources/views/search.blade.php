<!DOCTYPE html>
<html lang="en">
<head>
	<title>Artikel - Blog_Luthfi</title>
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
		<ul class="menu-list">
				<li><a href="{{ url('home') }}">Home</a></li>
				<li><a href="{{ url('profile') }}">Profil</a></li>
				<li><a href="{{ url('portofolio') }}">Portofolio</a></li>
				<li class="active"><a href="{{ url('blog') }}">Artikel</a></li>
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
				<h2>Artikel</h2>
				<div class="page-links">
					<a href="{{ url('home') }}">Home</a>
					<span>Artikel</span>
				</div>
			</div>
		</div>
	</div>
	<div class="alert alert-dismissible alert-info">
  <strong>Don't forget to see this info!</strong> this is info about <a href="{{ url('categories') }}" class="alert-link"> Categories</a>, Have Fun And Chillin.
  </div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($src as $d)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{ url('uploads/'.$d->foto) }}" alt="">
						</div>
						<div class="post-content"> 
							<h2 class="post-title">{{$d->judul}}</h2>
							<div class="post-meta">
								<a href="">Written By: {{$d->penulis}}</a>
								<a href="">Category: {{$d->categorie['qty']}}</a>
								<a href="">Created At: {{Carbon\Carbon::parse($d->created_at)->format('d, M Y ') }}</a>
								<a href="">Update At: {{Carbon\Carbon::parse($d->updated_at)->format('l, d F Y H:i ') }}</a>
							</div>
							<p class="content" style="width:100%;
							overflow:hidden;
							text-overflow:ellipsis;
							white-space:nowrap;">{{$d->deskripsi}}</p>
							<a href="{{action('BlogController@show', $d->id)}}" class="read-more">Read More</a>
						</div>
					
					
					</div>
					@endforeach
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="{{ route('search.src') }}" class="search-form" method="POST">
						@csrf
							<input type="text" placeholder="Search!" name="search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">New Article</h2>
						@foreach ($all->slice(0,5) as $e)
						<ul>
						<a href="{{action('BlogController@show', $e->id)}}"><li>{{$e->judul}}</li></a>
						</ul>
						@endforeach
					</div>
					
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						@foreach ($kt as $w)
						<ul class="tag">
							<li><a href="{{url('/blog/filter', $w->id)}}">{{$w->qty}}</a></li>
						</ul>
						@endforeach
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


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
	<script src="js/main.js"></script>
</body>
</html>


