<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bimbingan;
use App\Models\Gejala;
use App\Models\Relasi;
use Illuminate\Support\Facades\DB;
class BimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $bimbingan = DB::table('bimbingan')->paginate(5);
        return view('bimbingan.index',compact('bimbingan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bimbingan = Bimbingan::all();
        return view('bimbingan.create',compact('bimbingan'));
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
            'kodeBimbingan' => 'required',
            'nim' => 'required|size:7',
            'namaLengkap' => 'required',
            'status' => 'required',
            'jenisKelamin' => 'required'
        ]);

        $bimbingan = Bimbingan::create($request->all());
        return redirect()->route('konselling.create')->with('status', 'Mulai Konselling');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bimbingan = Bimbingan::find($id);
        return view('bimbingan.detail', compact('bimbingan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bimbingan = Bimbingan::find($id);
        return view('bimbingan.edit', compact('bimbingan'));
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
            'kodeBimbingan' => 'required',
            'nim' => 'required|size:7',
            'namaLengkap' => 'required',
            'status' => 'required',
            'jenisKelamin' => 'required'
        ]);

        $bimbingan = Gejala::find($id);
        $bimbingan = Bimbingan::create($request->all());
        return redirect()->route('konselling.create')->with('status', 'Mulai Konselling');
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