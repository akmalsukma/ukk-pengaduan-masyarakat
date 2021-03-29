@extends('layouts.app')

@section('content')
<div class="content">
      <main id="main">

        <section id="faq" class="faq section-bg">
            <div class="container">
              <div class="section-title">
                <h2 data-aos="fade-in">Penulisan laporan</h2>
                <p data-aos="fade-in">Isi beberapa form berikut agar laporan anda lengkap dan dapat ditanggapi langsung oleh pemerintah.</p>
              </div>
            
            <form action="{{ route('nulispengaduan') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="info-box" data-aos="fade-up">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Pengaduan</label>
                    <input type="text" name="judul_pengaduan" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <input type="hidden" name="nik" value=" {{ Auth::user()->nik }}">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Isi Laporan</label>
                      <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tanggal Kejadian</label>
                      <input type="date" name="tgl_pengaduan" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kota Pengaduan</label>
                      <select name="kota" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Pilih Kota</option>
                        @foreach ($data as $d)
                        <option value="{{$d->nama}}">{{$d->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Foto Bukti</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
      
            </div>
        </section><!-- End Frequently Asked Questions Section -->

    
      </main><!-- End #main -->
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
<footer id="footer">
    
  <div class="footer-top">

    <div class="container" data-aos="fade-up">

      <div class="row  justify-content-center">
        <div class="col-lg-6">
          <h3>Laporin Aja</h3>
          <p>Jika anda ingin berlangganan dengan kami Laporin Aja</p>
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
