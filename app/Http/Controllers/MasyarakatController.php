<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Pengaduan;

class MasyarakatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pengaduan()
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32');
        $result =  json_decode($response);

        foreach ($result as $data) {
            return view('masyarakat.pengaduan', ['data' => $data]);
        }
    }
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('masyarakat.Listpengaduan',compact('pengaduans'));
    }
    public function store(Request $req)
    {
        // $req->validate([
        //     'judul_pengaduan'=>'required',
        //     'tgl_pengaduan' => 'required',
        //     'isi_laporan' => 'required|min:10',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        // ]);

        $imageName = $req->image->getClientOriginalName(). '-' . time() . '.' . $req->image->extension();
        $req->image->move(public_path('pengaduan'), $imageName);

        $kota = substr($req->kota,10);

        Pengaduan::create([
            'nik' => $req->nik,
            'judul_pengaduan' => $req->judul_pengaduan,
            'isi_pengaduan' => $req->isi_laporan,
            'tgl_pengaduan' => $req->tgl_pengaduan,
            'kota' => $kota,
            'foto' => $imageName,
            'status' => 'proses'
        ]);
        return redirect('/pengaduan/list');
    }
}
