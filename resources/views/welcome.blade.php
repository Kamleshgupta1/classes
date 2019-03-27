<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Custom fonts for this template -->
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

        <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("mainNav").style.padding = "0px 0px";
            //document.getElementById("logo").style.fontSize = "25px";
          } else {
            document.getElementById("mainNav").style.padding = "30px 10px";
           // document.getElementById("logo").style.fontSize = "35px";
          }
        }
        </script>
    </head>
    <body id="page-top">
        
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><h3><img class="logos" src="/storage/cover_images/noimage.jpg"> Pace Tutorial</h3></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#how">Scope</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/posts') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            @auth
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
              </li>
                @else
              <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
              </li>

                @if (Route::has('register'))
              <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
              </li>
                @endif
            @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/storage/cover_images/img1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>.hgdfh..</h5>
        <p>..fhfh.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/cover_images/img2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>.fhdf..</h5>
        <p>..fghdf.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/cover_images/img3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>..fdgfdgfhfg.</h5>
        <p>.hhhf..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/cover_images/img4.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>..fdgfdgfhfg.</h5>
        <p>.hhhf..</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        
  
<div class="row m-5" id="services">
            <div class="col-8">
				<h4>We provide the best service...</h4>
				<div class="tab-main mx-auto">

					<input id="tab1" type="radio" name="tabs" checked>
					<label for="tab1"><span class="fa fa-cogs" aria-hidden="true"></span> Mission</label>

					<input id="tab2" type="radio" name="tabs">
					<label for="tab2"><span class="fa fa-cogs" aria-hidden="true"></span> Vision</label>

					<input id="tab3" type="radio" name="tabs">
					<label for="tab3"><span class="fa fa-cogs" aria-hidden="true"></span> Values</label>


					<section id="content1">
						<h5 class="mb-3 text-capitalize">We are the Service Provider</h5>	
						<p>Each and every person should get best service.</p>
					</section>

					<section id="content2">
						<h5 class="mb-3 text-capitalize">We are the Service Provider</h5>
						<p>Each and every person should get best service at cheap cost.</p>
					</section>

					<section id="content3">
						<h5 class="mb-3 text-capitalize">We are the Service Provider </h5>
						<p>Each and every person should get best service at earliest time.</p>
					</section>

				</div>
            </div>
			<div class="col-4">
		
				<img src="/storage/cover_images/noimage.jpg" alt="about image" class="img-fluid" />
                
            </div>
        </div>
  
        <!-- how we work -->
<section class="how py-5" id="how">
	<div class="container">
		<div class="inner-grid py-5">
			<h3 class="heading text-center mb-3">Why Choose Us</h3>
			<div class="row text-center">
				<div class="col-md-4 how-icon mt-4">
					<span class="fa fa-universal-access" aria-hidden="true"></span>
					<div class=" how-grid">
						<h3 class="mt-3">Trust</h3>
						
					</div>
				</div>
				<div class="col-md-4 how-icon1 mt-4">
					<span class="fa fa-tty" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Best Service</h3>
						
					</div>
				</div>
				<div class="col-md-4 how-icon2 mt-4">
					<span class="fa fa-trophy" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Best Quality</h3>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 
<!-- Professior info-->   
<div class="teacher" id="about"> 
    <div class="intro" style="color:purple">
        <br><br>
        <h5>Our Professior</h5>
    </div>
<div class="row">      
<div class="col-2 mb-1">       
<div class="flip-card teacher1 mb-1">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
</div>
<div class="col-2">     
<div class="flip-card teacher2">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>   
</div>
<div class="col-2">     
<div class="flip-card teacher3">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>   
</div> 
<div class="col-2">     
<div class="flip-card teacher4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>   
</div>    
<div class="col-2"> 
<div class="flip-card teacher5">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>         
</div>    
<div class="col-2"> 
<div class="flip-card teacher6">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/storage/cover_images/noimage.jpg" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>         
</div>    
</div>  
</div>              
<!-- Professior info-->        
        
        
<!-- subscribe -->
<section class="subscribe" id="contact">
	<div class="subscribe-overlay py-1">
		<div class="container py-md-5">
			<div class="row subscribe-grids">
				<div class="col-lg-6">
				   <h5 class="heading intro">Let's move together for better future.</h5><br>
                   <br><br>
                   <h3>Contact via following...</h3>
                   <div class="row mt-5">
                        <div class="col-3">
                            <a href="https://wa.me/+919833395359/?"><span class="fa fa-whatsapp" style="font-size:60px;color:green;background-color:white;border-radius:10%;padding:7px"></span></a>
                        </div>
                        <div class="col-3">
                            <a href="mailto:kamleshguptaom@gmail.com?cc=kamleshguptaom@gmail.com"><span class="fa fa-envelope-square" style="font-size:60px;color:red;background-color:white;border-radius:10%;padding:7px"></span></a>
                        </div>
                   </div>    
				</div>
				<div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4">
					
					<h5 class="mb-4 intro">Get involved and stay up to date with what's happening.</h5>
					@if(Session::has('success'))
                        <div class="alert alert-success">
                          {{ Session::get('success') }}
                        </div>
                    @endif


                    {!! Form::open(['route'=>'contactus.store']) !!}


                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Name:') !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>


                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>


                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            {!! Form::label('Message:') !!}
                            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-success">Contact US!</button>
                        </div>


                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>
              
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
