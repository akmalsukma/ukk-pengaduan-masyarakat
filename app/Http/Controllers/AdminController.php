<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pengaduan;

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
    // public function users()
    // {
    //     $users = User::all();
    //     return view('admin.user',compact('users'));
    // }
}
