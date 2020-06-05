<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Permasalahan;
use App\Models\Gejala;
use App\Models\Relasi;
use App\Models\Konselling;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        $bimbingan = Bimbingan::all();
        $permasalahan = Permasalahan::all();
        $relasi = Relasi::all();
        $gejala = Gejala::all();
        $konselling = Konselling::all();
        return view('admin.home',compact('bimbingan', 'gejala', 'permasalahan', 'relasi', 'konselling'));
    }
}
