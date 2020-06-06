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
        $relasi = DB::table('gejalaPermasalahan')->paginate(5);
        return view('Relasi.index',compact('permasalahan','gejala', 'relasi'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $relasi = new Relasi();
        $permasalahan = Permasalahan::all();
        $gejala = Gejala::all();
        return view('Relasi.create',compact('gejala', 'relasi', 'permasalahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $relasiModel = new Relasi();
        $request->validate([
            'kodeRelasi' => 'required',
            'permasalahan_id' => 'required',
            'gejala_id' => 'required',
            'nilai_mb' => 'required|numeric|between:0,1',
            'nilai_md' => 'required|numeric|between:0,1',
        ]);

        $check = Relasi::where([
            'permasalahan_id' => $request['permasalahan'],
            'gejala_id' => $request['gejala'],
            ])->first();

        if ($check !== null) {
            return \Response::json(array("errors" => ['permasalahan' => 'The Permasalahan and Gejala has already been taken.
            ', 'gejala' => 'The Permasalahan and Gejala has already been taken.']), 422);
        }

        // $relasi = [
        //     'permasalahan_id' => $request['permasalahan'],
        //     'gejala_id' => $request['gejala'],
        // ];
        $relasi = new Relasi();
        $relasi->kodeRelasi = $request->kodeRelasi;
        $relasi->permasalahan_id = $request->permasalahan_id;
        $relasi->gejala_id = $request->gejala_id;
        $relasi->nilai_mb = $request->nilai_mb;
        $relasi->nilai_md = $request->nilai_md;
        $relasi->nilai_cf = $request->nilai_cf['nilai_mb'] - $request->nilai_cf['nilai_md'];
        $relasi->save();
        return redirect()->route('relasi.index')->with('status','Data Relasi Berhasil di Tambah');
        // $relasi->save();

        // $result = Relasi::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relasi = Relasi::find($id);
        return view('relasi.detail', compact('relasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $relasi = new Relasi();
        $permasalahan = Permasalahan::all();
        $gejala = Gejala::all();
        $relasi =Relasi::find($id);
        return view('relasi.edit',compact('gejala', 'relasi', 'permasalahan'));
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
        Relasi::find($id)->delete();
        return redirect()->route('relasi.index')->with('status','Data Berhasil di Hapus');
    }
}
