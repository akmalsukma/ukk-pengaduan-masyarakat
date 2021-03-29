<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pengaduan;
use App\Tanggapan;
use PDF;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin.user',compact('users'));
    }
    public function pengaduan()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.pengaduan',compact('pengaduans'));
    }

    public function pdfuser()
    {
        $users = User::all();
        $data=compact('users');
        $pdf = PDF::loadview('admin.pdf.user',$data)->setPaper('A4','potrait');
        return $pdf->stream();
    }
    public function pdfpengaduan()
    {
        $pengaduans = Pengaduan::all();
        $data = compact('pengaduans');
        $pdf = PDF::loadview('admin.pdf.pengaduan',$data)->setPaper('A4','potrait');
        return $pdf->stream();
    }
    public function pdfusers()
    {
        $users = User::all();
        return view('admin.pdf.user',compact('users'));
    }
    public function pdfpengaduans()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.pdf.pengaduan',compact('pengaduans'));
    }

    public function tanggapan($id)
    {
        $data_pengaduan=Pengaduan::find($id);
        // $id_pengaduan = $id;
        return view('admin.tanggapan',compact('data_pengaduan'));
    }
    public function tanggapi(Request $req, $id)
    {
        Tanggapan::create([
            'id_pengaduan' => $req->id_pengaduan,
           'id_petugas' => $req->id_petugas,
           'isi_tanggapan' => $req->isi_tanggapan,
           'tgl_tanggapan' => $req->tgl_tanggapan,            
        ]);
        $data = Pengaduan::find($id);
        $data->update([
            'status' => $req->status,
        ]);
        return redirect()->route('listpengaduanadmin');
    }
}
