<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use App\Models\Relasi;
use App\Models\Gejala;
use App\Models\Permasalahan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class relasiController extends Controller
{
       public function index()
    {
        $gejala = Gejala::all();
        $permasalahan = Permasalahan::all();
        $relasi = DB::table('gejalaPermasalahan')->paginate(10);
        return view('relasi.index',compact('permasalahan','gejala', 'relasi'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permasalahan = Permasalahan::find($id);
        return view('relasi.detail', compact('permasalahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permasalahan $permasalahan)
    {       
        $permasalahan = Permasalahan::all();
        $gejala = Gejala::all();
        return view('permasalahan.edit',compact('gejala','permasalahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Relasi::find($id)->delete();
        // return redirect()->route('relasi.index')->with('status','Data Berhasil di Hapus');
    }
}
