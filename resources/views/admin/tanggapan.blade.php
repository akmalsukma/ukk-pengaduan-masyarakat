@extends('layouts.admin')

@section('content')
    
<div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h2 class="my-4"><center>Tanggapan Pengaduan</center></h2>
            <form action="{{ route('tanggapi',$data_pengaduan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="info-box" data-aos="fade-up">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Tanggapan</label>
                        <input type="date" name="tgl_tanggapan" class="form-control" id="exampleFormControlInput1">
                      </div>
                    <input type="hidden" name="id_petugas" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="id_pengaduan" value="{{ $data_pengaduan->id }}">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Tanggapan</label>
                        <textarea class="form-control" name="isi_tanggapan" id="exampleFormControlTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            @if ($data_pengaduan->status == 'proses')
                            <option value="{{$data_pengaduan->status}}" selected>{{$data_pengaduan->status}}</option>      
                            <option value="selesai">selesai</option>
                            @endif
                            @if ($data_pengaduan->status == 'selesai')
                            <option value="{{$data_pengaduan->status}}" selected>{{$data_pengaduan->status}}</option>
                          <option value="proses">proses</option>      
                            @endif
                        </select>
                      </div>
                      <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection