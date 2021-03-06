<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- JQuery for TreeView -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
      <link rel="icon" sizes="192x192" href="image/profile.png">
      <!--Chrome, Firefox OS and Opera-->
      <meta name="theme-color" content="#1de9b6">
      <!--Windows Phone-->
      <meta name="msapplication-navbutton-color" content="#1de9b6">
      <!--iOS Safari-->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="#1de9b6">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a href="#!" style="color:#ef6926;"><h3><img class="logos" src="/storage/cover_images/noimage.jpg"> Pace Tutorial</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}" style="color:#ef6926;">Dashboard<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/posts') }}" style="color:#ef6926;">Blog<span class="sr-only">(current)</span></a>
                        </li>
                        @if(!Auth::guest())
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ef6926;">
                              Activities
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" class="nav-item dropdown">Sports</a>
                              <a class="dropdown-item" class="nav-item dropdown">Plays</a>
                              <a class="dropdown-item" class="nav-item dropdown">Dance</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ef6926;">
                              Subjects
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item">Maths</a>
                              <a class="dropdown-item">SPCC</a>
                              <a class="dropdown-item">DWM</a>
                              <a class="dropdown-item">ML</a>
                              <a class="dropdown-item">SE</a>
                            </div>
                          </li>
                        @endif
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color:#ef6926;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#ef6926;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#ef6926;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
<!-- footer -->
<footer class="py-sm-5 py-4">
	<div class="container py-md-3">
		<div class="footer-grids text-center" style="color:#ef6926;">
			<a href="#!" style="color:#ef6926;"><h3><img class="logos" src="/storage/cover_images/noimage.jpg"> Pace Tutorial</h3></a>
		</div>
		<!-- to top -->
		<div class="top-icon text-center mt-2">
			<a href="#" class="move-top text-center"><span class="fa fa-angle-double-up" aria-hidden="true"></span> Go to top</a>
		</div>
		<!-- //to top -->
		<div class="middle mt-3">
			<ul class="social mb-4">
				<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
                <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                <li><a href="#"><span class="fa fa-envelope-square"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
			</ul>
		</div>
        <div class="text-center">
            <span class="copyright">Copyright &copy; This Website 2019</span>
        </div>  
        <div class="intro text-center">
                <h5>Hi, this is Kamlesh Gupta. Contact me for your application.</h5>
        </div>
        <div class="middle text-center">
			<ul class="social mb-4">
                <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
				<li><a href="#"><span class="fa fa-envelope-square"></span></a></li>
			</ul>
		</div>
        </div>
</footer>
    
</body>
</html>
