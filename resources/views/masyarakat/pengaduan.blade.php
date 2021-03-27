@extends('layouts.app')

@section('content')
<div class="content">
      <main id="main">

        <section id="faq" class="faq section-bg">
            <div class="container">
      
              <div class="section-title">
                <h2 data-aos="fade-in">Frequently Asked Questions</h2>
                <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                        <option value="depok">Depok</option>
                        <option value="bogor">Bogor</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bekasi">Bekasi</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Foto Bukti</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
      
            </div>
        </section><!-- End Frequently Asked Questions Section -->

    
      </main><!-- End #main -->
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
@endsection
