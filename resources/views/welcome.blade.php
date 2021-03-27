@extends('layouts.app')

@section('content')
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
                  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            </div>
@endsection