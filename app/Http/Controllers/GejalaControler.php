<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solusi;
use App\Models\Gejala;
use App\Models\Permasalahan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GejalaControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gejala = Gejala::all();
        $gejala = DB::table('gejala')->paginate(5);
        return view('gejala.index',compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $gejala = Gejala::all();
        $permasalahan = Permasalahan::orderBy('keteranganPermasalahan')->get();
        // $solusi = Solusi::orderBy('keteranganSolusi')->get();
        return view('gejala.create',compact('permasalahan','gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'kodeGejala' => 'required',
            'namaGejala' => 'required',
            'permasalahan_id' =>'required'
        ]);
 
       $gejala = Gejala::create($request->all());
       return redirect()->route('gejala.index')->with('status', 'Dat Gejala Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $gejala = Gejala::find($id);
        return view('gejala.detail', compact('gejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $gejala = Gejala::find($id);
        return view('gejala.edit',compact('gejala'));
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
        
            $this->validate($request,[
            'kodeGejala' => 'required',
            'namaGejala' => 'required',
            'permasalahan_id' =>'required'
        ]);

        $gejala = Gejala::find($id);
        $gejala->update($request->all());
        return redirect()->route('gejala.index')->with('status', 'Dat Gejala Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $gejala = Gejala::find($id);
        $gejala->delete();

        return redirect()->back()->with('status', 'Dat Gejala Berhasil di Dihapus');
    }
}
