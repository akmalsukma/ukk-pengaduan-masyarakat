<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class MasyarakatController extends Controller
{
    public function pengaduan()
    {
        return view('masyarakat.pengaduan');
    }
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('masyarakat.Listpengaduan',compact('pengaduans'));
    }
    public function store(Request $req)
    {
        $req->validate([
            'judul_pengaduan'=>'required',
            'tgl_pengaduan' => 'required',
            'isi_laporan' => 'required|min:10',
            'kota' => 'required|in:depok,jakarta,bogor,bekasi',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ]);
        $imageName = $req->image->getClientOriginalName(). '-' . time() . '.' . $req->image->extension();
        $req->image->move(public_path('pengaduan'), $imageName);

        Pengaduan::create([
            'nik' => $req->nik,
            'judul_pengaduan' => $req->judul_pengaduan,
            'isi_pengaduan' => $req->isi_laporan,
            'tgl_pengaduan' => $req->tgl_pengaduan,
            'kota' => $req->kota,
            'foto' => $imageName,
            'status' => 'proses'
        ]);
        return redirect('/pengaduan/list');
    }
}
