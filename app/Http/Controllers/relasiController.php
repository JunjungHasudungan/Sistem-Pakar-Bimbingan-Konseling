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
        // $gejala =Gejala::all();
        // $relasi = Relasi::find(2);
        $gejala = Gejala::all();
        $permasalahan = Permasalahan::all();
        $relasi = DB::table('relasi')->paginate(5);
        $relasi = Relasi::all();
        return view('Relasi.index',compact('permasalahan','gejala', 'relasi'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $solusi = Solusi::all()->pluck('keteranganSolusi', 'id');
        $gejala = Gejala::all()->pluck('namaGejala','id');
        $permasalahan = Permasalahan::pluck('keteranganPermasalahan', 'id');
        $relasi = Relasi::all();
        return view('Relasi.create',compact('relasi', 'permasalahan', 'gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'kodeRelasi' =>'required',
            'permasalahan_id' => 'required'
        ]);

       $relasi = Relasi::create($request->all());
        return redirect('/relasi')->with('status', 'data relasi berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
