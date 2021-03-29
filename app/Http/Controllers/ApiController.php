<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ApiController extends Controller
{
    public function index()
    {
        $pengaduan=Pengaduan::all();
        return response()->json($pengaduan, 200);
    }

    public function getMasyarakat()
    {

        $masyarakat = Masyarakat::all();
        return response()->json($masyarakat, 200);

    }
    public function TulisPengaduan(Request $request)
    {
        if ($request->hasFile('foto')) {
            $original_filename = $request
                ->file('foto')
                ->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = './pengaduan';
            $image = 'I-' . time() . '.' . $file_ext;
            $request->file('foto')->move($destination_path, $image);
            $fotolaporan = $image;
        }

        // get data
        $judulPengaduan = $request->input('judul_pengaduan');
        $nik = $request->input('nik');
        $tglpengaduan = $request->input('tgl_pengaduan');
        $isipengaduan = $request->input('isi_pengaduan');
        $lokasi_kota = $request->input('kota');

        // data
        $data = [
            'judul_pengaduan' => $judulPengaduan,
            'nik' => $nik,
            'isi_pengaduan' => $isipengaduan,
            'tgl_pengaduan' => $tglpengaduan,
            'kota' => $lokasi_kota,
            'foto' => $fotolaporan,
        ];

        if (Pengaduan::create($data)) {
            return response()->json(
                [
                    'success' => true,
                    'status' => 200,
                    'message' => 'Pengaduan was created successfully',
                    'data' => $data,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'status' => 404,
                    'message' => 'Pengaduan created failed',
                    'data' => $data,
                ],
                200
            );
        }
    }



    public function login(Request $request)
    {
        $credentials = Masyarakat::where('email',$request->email)->first();
        if(!$credentials){
            return response()->json(['status'=>404, 'message'=>'user not found!']);
        }
        if (!Hash::check($request->password, $credentials->password)) {
            return response()->json(['status'=>401, 'message'=>'please check your password!']);
        }
        $credentials->update(['api_token'=> Str::random(20)]);
        return response()->json(['status'=>200, 'message'=>'Success Login', 'user'=>$credentials]);
    }


    public function index1()
    {
        $pengaduan = Pengaduan::all();

        return $this->sendResponse($pengaduan->toArray(), 'peng$pengaduan retrieved successfully.');
    }


    public function register(Request $request)
    {
        try {
            $masyarakat = New Masyarakat;
            $masyarakat->nik =$request->nik;
            $masyarakat->nama =$request->nama;
            $masyarakat->email = $request->email;
            $masyarakat->password =bcrypt($request->password) ;
            $masyarakat->telp = $request->telp;
            $masyarakat->save();
        } catch (\Throwable $th) {
            return $th;
        }
        return response()->json(['status'=>200, 'message'=>'Success register', 'user'=>$masyarakat]);
    }

    public function tanggapan()

    {
        $tanggapan = Tanggapan::all();
        return response()->json($tanggapan, 200);
    }

    public function logout(Request $request)
    {
        $header = $request->header('Authorization');
        $token = explode(' ', $header)[1];
        $masyarakat = Masyarakat::where('api_token', $token)->first();
        $masyarakat->api_token = null;
        $masyarakat->save();
        return response()->json(['status'=>200, 'message'=>'Success logout', 'user'=>$masyarakat]);
    }
}
