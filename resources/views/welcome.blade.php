<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Home
                </div>
            </div>
            <div class="content-fluid">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjIvNqTqJDhAhXWbSsKHUc4DGIQjRx6BAgBEAU&url=https%3A%2F%2Fwww.elastic.co%2Fblog%2Fcategorizing-images-with-deep-learning-into-elasticsearch&psig=AOvVaw0RMDFNKEMXCl3Yi9bmchcy&ust=1553157328473642" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjIvNqTqJDhAhXWbSsKHUc4DGIQjRx6BAgBEAU&url=https%3A%2F%2Fwww.elastic.co%2Fblog%2Fcategorizing-images-with-deep-learning-into-elasticsearch&psig=AOvVaw0RMDFNKEMXCl3Yi9bmchcy&ust=1553157328473642" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjIvNqTqJDhAhXWbSsKHUc4DGIQjRx6BAgBEAU&url=https%3A%2F%2Fwww.elastic.co%2Fblog%2Fcategorizing-images-with-deep-learning-into-elasticsearch&psig=AOvVaw0RMDFNKEMXCl3Yi9bmchcy&ust=1553157328473642" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </body>
</html>
