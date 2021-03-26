<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png')}}" rel="icon">
        <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
        <header id="header">
            <div class="container d-flex align-items-center">
        
              <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html">Bocor<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
              </div>
              <nav class="navbar navbar-expand-md nav-menu d-none d-lg-block">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
             
                    </div>
                </div>
              </nav>
        </div>
        {{-- <div class="flex-center position-ref full-height">
           --}}
     
        
    </div>
</header><!-- End Header -->

            <div class="content">
                <section id="hero">

                    <div class="container">
                      <div class="row d-flex align-items-center"">
                      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h1>Your new digital experience with Bocor</h1>
                        <h2>We are team of talented designers making websites with Bootstrap</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                      </div>
                      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
                      </div>
                    </div>
                    </div>
                
                  </section><!-- End Hero -->
                
                  <main id="main">
            
                
                    <!-- ======= About Section ======= -->
                    <section id="about" class="about section-bg">
                      <div class="container">
                
                        <div class="row">
                          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                            <div class="content d-flex flex-column justify-content-center">
                              <h3 data-aos="fade-in" data-aos-delay="100">Voluptatem dignissimos provident quasi</h3>
                              <p data-aos="fade-in">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                              </p>
                              <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                  <i class="bx bx-receipt"></i>
                                  <h4><a href="#">Corporis voluptates sit</a></h4>
                                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-cube-alt"></i>
                                  <h4><a href="#">Ullamco laboris nisi</a></h4>
                                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                  <i class="bx bx-images"></i>
                                  <h4><a href="#">Labore consequatur</a></h4>
                                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                  <i class="bx bx-shield"></i>
                                  <h4><a href="#">Beatae veritatis</a></h4>
                                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                              </div>
                            </div><!-- End .content-->
                          </div>
                        </div>
                
                      </div>
                    </section><!-- End About Section -->
                
                
                    <!-- ======= Features Section ======= -->
                    <section id="features" class="features section-bg">
                      <div class="container">
                
                        <div class="section-title">
                          <h2 data-aos="fade-in">Features</h2>
                          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5" data-aos="fade-right">
                            <img src="{{asset('img/features-1.svg')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-7 pt-4" data-aos="fade-left">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="font-italic">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                              magna aliqua.
                            </p>
                            <ul>
                              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            </ul>
                          </div>
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                            <img src="{{asset('img/features-2.svg')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                            <h3>Corporis temporibus maiores provident</h3>
                            <p class="font-italic">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                              magna aliqua.
                            </p>
                            <p>
                              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                              culpa qui officia deserunt mollit anim id est laborum
                            </p>
                          </div>
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5" data-aos="fade-right">
                            <img src="{{asset('img/features-3.svg')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-7 pt-5" data-aos="fade-left">
                            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                            <ul>
                              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                            </ul>
                          </div>
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                            <img src="{{asset('img/features-4.svg')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                            <p class="font-italic">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                              magna aliqua.
                            </p>
                            <p>
                              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                              culpa qui officia deserunt mollit anim id est laborum
                            </p>
                          </div>
                        </div>
                
                      </div>
                    </section><!-- End Features Section -->
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact section-bg">
                      <div class="container">
                
                        <div class="section-title">
                          <h2 data-aos="fade-in">Contact</h2>
                          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>
                
                        <div class="row">
                
                          <div class="col-lg-6">
                
                            <div class="row">
                              <div class="col-md-12">
                                <div class="info-box" data-aos="fade-up">
                                  <i class="bx bx-map"></i>
                                  <h3>Our Address</h3>
                                  <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-envelope"></i>
                                  <h3>Email Us</h3>
                                  <p>info@example.com<br>contact@example.com</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-phone-call"></i>
                                  <h3>Call Us</h3>
                                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                              </div>
                            </div>
                
                          </div>
                
                          <div class="col-lg-6 mt-4 mt-lg-0">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
                              <div class="form-row">
                                <div class="col-md-6 form-group">
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                  <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                  <div class="validate"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                              </div>
                              <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                              </div>
                              <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                              </div>
                              <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                          </div>
                
                        </div>
                
                      </div>
                    </section><!-- End Contact Section -->
                
                  </main><!-- End #main -->
                
                  <!-- ======= Footer ======= -->
                  <footer id="footer">
                
                    <div class="footer-top">
                
                      <div class="container" data-aos="fade-up">
                
                        <div class="row  justify-content-center">
                          <div class="col-lg-6">
                            <h3>Bocor</h3>
                            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                          </div>
                        </div>
                
                        <div class="row footer-newsletter justify-content-center">
                          <div class="col-lg-6">
                            <form action="" method="post">
                              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                            </form>
                          </div>
                        </div>
                
                        <div class="social-links">
                          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                
                      </div>
                    </div>
                
                    <div class="container footer-bottom clearfix">
                      <div class="copyright">
                        &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
                      </div>
                      <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                
                  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            </div>
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
