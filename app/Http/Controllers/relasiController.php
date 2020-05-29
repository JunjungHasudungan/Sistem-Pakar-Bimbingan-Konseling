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
        $relasi = DB::table('basePengetahuan')->paginate(5);
        return view('Relasi.index',compact('permasalahan','gejala', 'relasi'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $relasi = new Relasi();
        $permasalahan = Permasalahan::all();
        $gejala = Gejala::all();
        return view('Relasi.create',['gejala' => $gejala, 'relasi' => $relasi, 'permasalahan' => $permasalahan]);
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
            'permasalahan_id' => 'required',
            'gejala_id' => 'required'
        ]);


        $checkRelasi = Relasi::where([
            'permasalahan_id' => $request['permasalahan'],
            'gejala_id' => $request['gejala'],
        ])->first();

        if ($checkRelasi !== null) {
            return \Response::json(array("errors" => ['permasalahan' => 'The Penyakit and Gejala has already been taken.
            ', 'gejala' => 'The Penyakit and Gejala has already been taken.']), 422);
        }

        $relasi = [
            'permasalahan_id' => $request['penyakit'],
            'gejala_id' => $request['gejala'],
        ];

        return Relasi::create($relasi);
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
