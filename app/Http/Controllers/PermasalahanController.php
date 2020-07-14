<?php

namespace App\Http\Controllers;
use App\Models\Permasalahan;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermasalahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permasalahan =DB::table('permasalahan')->paginate(5);
        return view('permasalahan.index', compact('permasalahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function create()
    {   
        $gejala = Gejala::all()->pluck('keteranganGejala','kodeGejala','id');
        return view('permasalahan.Create', compact('gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   
        $permasalahan = new Permasalahan();
         $this->validate($request,[
            'keteranganPermasalahan' => 'required',
            'solusi' => 'required',
            'gejala' => 'required|min:2'
        ],
        [   'gejala.min' => 'Gejala yang di pilih minimal 2',
            'gejala.required' => 'Gejala wajib dipilih']);

        $permasalahan = Permasalahan::create($request->all());
        $permasalahan->save();
        foreach ($request->gejala as $gejala_id) {
            $permasalahan->attachGejala($gejala_id);
        }
        // dd($permasalahan);
        return redirect()->route('permasalahan.index')->with('status','Berhasil Di Tambah Kedalam basis Pengetahuan');      
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
        return view('permasalahan.detail', compact('permasalahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permasalahan $permasalahan)
    {   
        $gejala =Gejala::all();
        return view('permasalahan.edit', compact('gejala','permasalahan'));
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
        $permasalahan = new Permasalahan();
         $this->validate($request,[
            'keteranganPermasalahan' => 'required',
            'solusi' => 'required'
        ]);

        $permasalahan = Permasalahan::create($request->all());
        // Menempelkan nilai baru
        foreach ($request->gejala as $gejala_id) {
            $permasalahan->attachGejala($gejala_id);
        }
        // Memisahkan/Menggantikan nilai
        foreach ($request->gejala as $gejala_id) {
            $permasalahan->detachGejala($gejala_id);
        }
        // dd($permasalahan);
        $permasalahan->save();
        return redirect()->route('permasalahan.index')->with('status','Berhasil Di Update Kedalam basePengetahuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permasalahan $permasalahan)
    {
        $permasalahan->delete();
        foreach ($permasalahan->gejala as $gejala) {
            $permasalahan->detachGejala($gejala->id);
        }
        return redirect()->route('permasalahan.index')->with('status','Data  Berhasil di Hapus dari basePengetahuan');
    }
}
