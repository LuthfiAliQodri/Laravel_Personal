<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$blog->judul}} - Blog_Luthfi</title>
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
    <link rel="stylesheet" href="{{asset('css/iconshare.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>

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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a>
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
                <h2 style="font-size:50px;">Artikel</h2>
                <div class="page-links">
                    <a href="{{ url('home') }}">Home</a>
                    <span style="font-size:15px;">{{$blog->judul}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->


    <!-- page section -->
    <div class="container-fluid">
    
    </div>
    <div class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- icon -->
                    <!-- Sharingbutton Facebook -->
                    <a class="resp-sharing-button__link"
                        href="https://facebook.com/sharer/sharer.php?u={{ route('blogs.show',$blog->id) }}" target="_blank"
                        rel="noopener" aria-label="Facebook">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                                    </svg></div>Facebook
                        </div>
                    </a>

                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link"
                        href="https://twitter.com/intent/tweet/?text={{$blog->judul}};url={{ route('blogs.show',$blog->id) }}"
                        target="_blank" rel="noopener" aria-label="Twitter">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                                    </svg></div>Twitter
                        </div>
                    </a>

                   

                    <!-- Sharingbutton E-Mail -->
                    <a class="resp-sharing-button__link" href="mailto:?subject={{$blog->judul}};body={{ route('blogs.show',$blog->id) }}"
                        target="_blank" rel="noopener" aria-label="E-Mail">
                        <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--medium">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z" />
                                    </svg></div>Gmail
                        </div>
                    </a>

                    <!-- Sharingbutton WhatsApp -->
                    <a class="resp-sharing-button__link" href="whatsapp://send?text={{$blog->judul}} - {{ route('blogs.show',$blog->id) }}"
                        target="_blank" rel="noopener" aria-label="WhatsApp">
                        <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z" />
                                    </svg></div>WhatsApp
                        </div>
                    </a>
                    <br>
                        <div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="{{ route('blogs.show',$blog->id) }}" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
                        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                    

                    
                    <!-- tutup Icon -->
                    
                    <!-- Single Post -->
                    <div class="single-post">
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
                                <!-- <a href="">Created At:
                                    {{Carbon\Carbon::parse($blog->created_at)->format('d, M Y ') }}</a> -->
                                <a href="">Update At:
                                    {{Carbon\Carbon::parse($blog->updated_at)->format('l, d F Y H:i') }}</a>
                                <br>
                                
                            </div>
                            <p>{{$blog->deskripsi}}</p>
                            <i class="fa fa-tags"></i> Tags :
                                @foreach($blog->tags as $d)
                                <small> <a href=""> {{ $d->nama_tags }}</a></small>
                                @endforeach
                                
                        </div>

                        <!-- Post Comments -->
                        <div class="comments">
                            @guest
                            <a class="nav-link" href="{{ route('login') }}"></a>
                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"></a>
                            @endif
                            @else
                            <h2>Add Comments</h2>
                            <ul class="comment-list">
                                <li>
                                    <div class="commetn-text">
                                        <form action="{{ route('blog.comment.store') }}" class="form-horizontal"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $blog->id }}">
                                            <textarea name="message" id="" method="post" cols="30" rows="5"
                                                class="form-control" placeholder="Add Comment?Please Hahaha"></textarea>
                                            <br>
                                            <input type="submit" value="Komentar" class="btn btn-primary">

                                    </div>

                                    </form>
                                </li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest



                    @foreach ($come as $comment)
                    <div class="col">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>{{ $comment->user->name }}</strong> <span
                                    class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="panel-body">
                                {{ $comment->message }}
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                    @endforeach

                </div>

                <!-- Commert Form -->
                <!-- <div class="col-md-4 col-sm-5 sidebar">
                            @guest
							<div><a class="nav-link" href="{{ route('login') }}"></a>
                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"></a></div>
                            
                            @endif
                            @else
                            <div class="widget-item">
                                <h2 class="widget-title">Option</h2>
                                <button class="btn btn-warning"><a href="{{action('BlogController@edit', $blog['id'])}}"
                                        style="text-decoration: none; color: white;">Edit</a></button>
							
                                <form action="{{action('BlogController@destroy', $blog['id'])}}" method="post">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                    @endguest



        </div> -->
            </div>
            <!-- Sidebar area -->


            <!-- page section end-->



            <!-- Footer section -->
            <!-- <footer class="footer-section">
        <h2>2018-2019 All rights reserved. Designed by <a href="/copyright" target="_blank">LaokProduction</a></h2>
    </footer> -->
            <!-- Footer section end -->



            <!--====== Javascripts & Jquery ======-->
            <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
            <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
