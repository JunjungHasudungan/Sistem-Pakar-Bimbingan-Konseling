<?php

namespace App\Http\Controllers;
use App\Models\Konselling;
use App\Models\Bimbingan;
use App\Models\Gejala;
use App\Models\Relasi;
use App\Models\Permasalahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konselling =DB::table('konselling')->paginate(5);
        $relasi = Relasi::all();
        $gejala = Gejala::all();
        $permasalahan = Permasalahan::all();
        return view('Konselling.index', compact('konselling', 'relasi', 'gejala', 'permasalahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gejala = Gejala::all();
        return view('konselling.create', compact('gejala'));   
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
