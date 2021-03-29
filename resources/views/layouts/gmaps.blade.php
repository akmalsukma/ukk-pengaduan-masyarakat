<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.css')}}">
    
    <style type="text/css">
        #map {
            width: 1000px;
            height: 600px;
        }
    </style>
</head>
<body>
    <div id="app">
        <header id="header">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto" data-aos="fade-right">
            <h1 class="text-light"><a href="{{route('landingpage')}}">Laporin aja<span>.</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav class="navbar navbar-expand-md nav-menu d-none d-lg-block">
              <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item" data-aos="fade-left">
                        <a class="nav-link" href="{{ route('gmaps') }}">Google Maps</a>
                    </li>
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item" data-aos="fade-left">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item" data-aos="fade-left">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item" data-aos="fade-left">
                    <a class="nav-link" href="{{ route('dashboardmasyarakat') }}">Tulis Laporan</a>
                  </li>
                  <li class="nav-item" data-aos="fade-left">
                    <a class="nav-link" href="{{ route('listpengaduan') }}">Seluruh Laporan</a>
                  </li>
                  <li class="drop-down" data-aos="fade-left">
                      <a href="#">
                          {{ Auth::user()->name }}
                      </a>
                      <ul>
                      <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                    </ul>
                  </li>
              @endguest
          </ul>
           
                  </div>
              </div>
            </nav>
      </div>

    </div>
</header>

                <div id="map"></div>
                {{$count}}
                
                <script>
            
                  function initMap() {
                    
                    // membuat objek untuk titik koordinat
                    var Bogor = {
                        lat:  -6.601220630687262,
                        lng: 106.80992672850724
                    };
                    
                    // membuat objek peta
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 9,
                      center: Bogor
                    });

                    var data= {!! json_encode($count) !!}
            
                    // mebuat konten untuk info window
                    var contentString = data;
            
                    // membuat objek info window
                    var infowindow = new google.maps.InfoWindow({
                      content: contentString,
                      position: Bogor
                    });
                    
                    // membuat marker
                    var marker = new google.maps.Marker({
                      position: Bogor,
                      map: map,
                      title: 'Kota Lombok'
                    });
                    
                    // event saat marker diklik
                    marker.addListener('click', function() {
                      // tampilkan info window di atas marker
                      infowindow.open(map, marker);
                    });
                    
                  }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?callback=initMap">
                </script>
<div class="py-4" style="background: #edffec">
  @yield('login')
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>