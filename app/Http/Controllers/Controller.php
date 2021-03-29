<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Pengaduan;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function gmaps()
    {
        $pengaduan = Pengaduan::where('kota','bogor')->get();
        $countdata= count($pengaduan);
        return view('layouts.gmaps',['count' =>$countdata]);
    }
}
