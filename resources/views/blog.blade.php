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
	<!-- <div class="alert alert-dismissible alert-info">
  <strong>Don't forget to see this info!</strong> this is info about <a href="{{ url('categories') }}" class="alert-link"> Categories</a>, Have Fun And Chillin.
  </div> -->
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($blogs as $blog)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{ url('uploads/'.$blog->foto) }}" alt="">
							<div class="post-date">
								<h2>{{Carbon\Carbon::parse($blog->created_at)->format('d') }}</h2>
								<h3>{{Carbon\Carbon::parse($blog->created_at)->format('M Y') }}</h3>
							</div>
						</div>
						<div class="post-content"> 
							<h2 class="post-title">{{$blog->judul}}</h2>
							<div class="post-meta">
								<a href="">Written By: {{$blog->penulis}}</a>
								<a href="">Category: {{$blog->categorie['qty']}}</a>
								<!-- <a href="">Created At: {{Carbon\Carbon::parse($blog->created_at)->format('d, M Y ') }}</a> -->
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
						<form action="{{ route('search.src') }}" class="search-form" method="POST">
						@csrf
							<input type="text" placeholder="Search!" name="search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">New Article</h2>
						@foreach ($blogs as $blog)
						<ul>
						<a href="{{action('BlogController@show', $blog->id)}}"><li>{{$blog->judul}}</li></a>
						</ul>
						@endforeach
					</div>
					
					<!-- <div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						@foreach ($blogs as $blog)
						<ul>
						<a href="{{action('BlogController@show', $blog->id)}}"><li>{{$blog->judul}}</li></a>
						</ul>
						@endforeach
					</div> -->
					<!-- Single widget -->
					<!-- <div class="widget-item">
						<h2 class="widget-title">Archives</h2>
						@foreach ($blogs as $blog)
						<ul>
							<li><a href="">{{$blog->created_at}}</a></li>
						</ul>
						@endforeach
					</div> -->
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categorie</h2>
						@foreach ($categories as $categorie)
						<ul class="tag">
							<li><a href="{{url('/blog/filter', $categorie->id)}}">{{$categorie->qty}}</a></li>
						</ul>
						@endforeach
					</div>
					@guest
					<div>
                        <a class="nav-link" href="{{ route('login') }}"></a>
                            @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}"></a>
						</div>
                            @endif
                        @else
                    <!-- <div class="widget-item">
                    	<h2 class="widget-title">Option</h2>
                    		<button class="btn btn-success"><a href="{{action('BlogController@create')}}" style="text-decoration: none; color: white;">Tambah Data</a></button>
                   				 <button class="btn btn-info"><a href="{{ url('blogs') }}" style="text-decoration: none; color: white;">Show All</a></button>
                    </div> -->
                            		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
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








