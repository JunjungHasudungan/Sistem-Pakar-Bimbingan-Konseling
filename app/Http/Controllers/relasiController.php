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
    {   
        $relasi = new Relasi();
        $permasalahan = Permasalahan::all();
        $gejala = Gejala::all()->pluck('namaGejala', 'id');
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
            'permasalahan' => 'required',
            'gejala' => 'required'
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
            'permasalahan_id' => $request['permasalahan'],
            'gejala_id' => $request['gejala'],
        ];
            $arr = array();
              foreach ($relasi as $key => $value) {
                    if(is_array($value)) {
                        foreach($value as $val){
                            $arr[] = $val;
                        }
                    } else {
                        $arr[] = $value;
                    }
                }
                 $result = implode(" , ", $arr);
                dd($result);
        // $relasiHasil = implode(',', $checkRelasi);
        // dd($relasiHasil);
        //  Relasi::create($relasi);
        // return redirect()->route('relasi.index');
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
