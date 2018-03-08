<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">

    <title>Fortune Ladies</title>
  </head>
  <body>
    {{--  NAVBAR  --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navku">
        <a class="navbar-brand mr-auto" href="{{url('/')}}"><img src="images/logo.png" class="img-fluid" alt="Responsive image">Fortune Ladies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="linku">
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li class="linku">
                  <a href="{{url('products')}}">Products</a>
                </li>
                <li class="linku">
                  <a href="{{url('about')}}">About Us</a>
                </li>
                @if (Auth::check())
                <li class="linku">
                  <a href="{{url('home')}}">Dashboard</a>
                </li>
                <li class="linku">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </li>
                @else
                <li class="linku">
                  <a href="{{url('login')}}">Login</a>
                </li>
                @endif
              </ul>
        </div>
    </nav>
        {{--  END NAVBAR  --}}
    @yield('content')

    {{--  FOOTER  --}}
    <div class="footer">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <div class="col-xs-12 col-md-4">
                    <a href="{{url('/')}}"><img src="images/logo.png" class="img-fluid" alt="Responsive image"></a>
                    <p>Fortune Ladies is a store that sells various women's goods like shoes, clothes, cosmetics and many more. We provide high quality goods.
                    Out store was established in 19 Ferbruary 2018. We will serve customer with passion & love :).
                </div>
                <div class="col-xs-12 col-md-4">
                  <h5 class="garis1" style="margin-top:5vh;">FORTUNE LADIES</h5>
                  <div>
                      <a href="{{url('/')}}">Home</a><br>
                      <a href="{{url('products')}}">Products</a><br>
                      <a href="{{url('about')}}">About</a><br>
                      <a href="{{url('login')}}">Login</a>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h5 class="garis1" style="margin-top:5vh;">CONTACT US</h5>
                    <p>Rosenthalerstrasse<br> 72A 10437<br> Berlin
                      Phone: +49 (0)30 55578595<br>
                      Email: timurasaindonesia@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer2 text-center">
          2018 © Fortune Ladies - All rights reserved
      </div>
    </div>
    {{--  END FOOTER  --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out-sine',
        delay: 190,
      });
    </script>
  </body>
</html>