<!DOCTYPE html>
<html lang="en">
<head>
	<title>Artikel - Blog_Luthfi</title>
	<meta charset="UTF-8">
	<meta name="description" content="LaokProduction18-19">
	<meta name="keywords" content="luthfialiqodri, luthfiali, luthfi, portofolio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

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
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($blogFilter as $blog)
					<div class="post-item">
						<div class="post-thumbnail">
						<img src="{{ url('uploads/'.$blog->foto) }}" alt="">
						</div>
						<div class="post-content"> 
							<h2 class="post-title">{{$blog->judul}}</h2>
							<div class="post-meta">
								<a href="">Written By: {{$blog->penulis}}</a>
								<a href="">Category: {{$blog->qty}}</a>
								<a href="">Created At: {{Carbon\Carbon::parse($blog->created_at)->format('d, M Y ') }}</a>
								<a href="">Update At: {{Carbon\Carbon::parse($blog->updated_at)->format('l, d F Y H:i') }}</a>
							</div>
							<p class="content" style="width:100%;
							overflow:hidden;
							text-overflow:ellipsis;
							white-space:nowrap;">{{$blog->deskripsi}}</p>
							<a href="{{action('BlogController@show', $blog->id)}}" class="read-more">Read More</a>
						</div>
					
					
					</div>
					@endforeach
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search!">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">New Article</h2>
						@foreach ($blogFilter as $blog)
						<ul>
						<a href="{{action('BlogController@show', $blog->id)}}"><li>{{$blog->judul}}</li></a>
						</ul>
						@endforeach
					</div>
					<!-- Single widget -->
					<!-- <div class="widget-item">
						<h2 class="widget-title">Archives</h2>
						@foreach ($blogFilter as $blog)
						<ul>
							<li><a href="">{{$blog->created_at}}</a></li>
						</ul>
						@endforeach
					</div> -->
					<!-- Single widget -->
					<!-- <div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						
					</div> -->
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
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>


