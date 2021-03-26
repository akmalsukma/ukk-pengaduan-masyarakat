<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboardAdmin()
    {
        return view('dashboard.admin');
    }
    public function dashboardMasyarakat()
    {
        return view('dashboard.masyarakat');
    }
    public function dashboardPetugas()
    {
        return view('dashboard.petugas');
    }
}
