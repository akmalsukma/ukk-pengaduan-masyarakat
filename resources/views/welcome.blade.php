@extends('layouts.app')

@section('content')
            <div class="content">
                <section id="hero">

                    <div class="container">
                      <div class="row d-flex align-items-center"">
                      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h1>Laporin Aja pengaduan.</h1>
                        <h2>Kami akan menindak lanjuti laporan anda.</h2>
                      <a href="{{route('dashboardmasyarakat')}}" class="btn-get-started scrollto">Laporin Aja.</a>
                      </div>
                      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <img src="{{asset('img/marketing.png')}}" class="img-fluid" alt="">
                      </div>
                    </div>
                    </div>
                
                  </section><!-- End Hero -->
                
                  <main id="main">
            
                
                    <!-- ======= About Section ======= -->
                    <section id="about" class="about section-bg">
                      <div class="container">
                
                        <div class="row">
                          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                            <div class="content d-flex flex-column justify-content-center">
                              <h3 data-aos="fade-in" data-aos-delay="100">Pengaduan masyarakat dapat dilihat langsung oleh pemerintah.</h3>
                              <p data-aos="fade-in">
                                Dengan nya dapat dilihat langsung lempaga pemerintah, laporan anda bisa :
                              </p>
                              <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                  <i class="bx bx-receipt"></i>
                                  <h4>Laporan mudah ditanggapi</h4>
                                  <p>Terdapat petugas pemerintah yang bisa menanggapi laporan anda.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                  <i class="bx bx-alarm"></i>
                                  <h4>Laporan cepat di ajukan</h4>
                                  <p>Laporan ini dapat ditanggapi pemerintah tidak perlu menunggu lama.</p>
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
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5" data-aos="fade-right">
                            <img src="{{asset('img/write a review.png')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-7 pt-4" data-aos="fade-left">
                            <h3>Menulis laporan dengan sangat mudah</h3>
                            <p class="font-italic">
                              Dengan beberapa mengisi form dan mengupload bukti dari laporan tersebut, laporan anda dapat:
                            </p>
                            <ul>
                              <li><i class="icofont-check"></i>Ditanggapi langsung oleh petugas pemerintah kami.</li>
                              <li><i class="icofont-check"></i>Menindak lanjuti juga laporan yang telah anda laporkan</li>
                            </ul>
                          </div>
                        </div>
                
                        <div class="row content">
                          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                            <img src="{{asset('img/build a community.png')}}" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-right">
                            <h3>Membuat komunitas dengan pelapor lainnya</h3>
                            <p>
                              Mungkin dengan adanya komunitas di seluruh indonesia laporan-laporan yang selama ini tidak tersampaikan, dengan LaporinAja ini dapat tersampaikan
                              dengan baik dan juga dapat langsung ditanggapin petugas pemerintah dari kami dan akan disampaikan dengan pemerintah terkait
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
                        </div>
                
                        <div class="row">
                
                          <div class="col-lg-6">
                
                            <div class="row">
                              <div class="col-md-12">
                                <div class="info-box" data-aos="fade-up">
                                  <i class="bx bx-map"></i>
                                  <h3>Alamat</h3>
                                  <p>Jln. Pekapuran Kel. Curug .
                                    Kec. Cimanggis Depok.
                                    Kode Pos : 16953</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-envelope"></i>
                                  <h3>Email</h3>
                                  <p>taruna@smktarunabhakti.net</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-phone-call"></i>
                                  <h3>Telepon</h3>
                                  <p>(021) 8744810<br>(021)-87743374</p>
                                </div>
                              </div>
                            </div>
                
                          </div>
                
                          <div class="col-lg-6 mt-4 mt-lg-0">
                            <form action="#" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
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
                  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            </div>
            <footer id="footer">
    
              <div class="footer-top">
          
                <div class="container" data-aos="fade-up">
          
                  <div class="row  justify-content-center">
                    <div class="col-lg-6">
                      <h3>Laporin Aja</h3>
                      <p>Jika anda ingin mendapatkan informasi dari kami</p>
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
                  &copy; Copyright <strong><span>Laporin Aja</span></strong>. All Rights Reserved
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
@endsection