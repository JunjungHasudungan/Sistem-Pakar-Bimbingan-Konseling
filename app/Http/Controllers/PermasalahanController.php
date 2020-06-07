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
    {   $permasalahan = Permasalahan::all();
        $permasalahan =DB::table('permasalahan')->paginate(5);
        return view('permasalahan.index', compact('permasalahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function create()
    {   $gejala = Gejala::all();
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
            'kodePermasalahan' => 'required',
            'keteranganPermasalahan' => 'required',
            'solusi' => 'required'
        ]);

        $permasalahan = Permasalahan::create($request->all());
        return redirect()->route('permasalahan.index')->with('status','Data Permasalahan Berhasil Di Tambah');      
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
    public function edit($id)
    {
        $permasalahan =Permasalahan::find($id);
        return view('permasalahan.edit', compact('permasalahan'));
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
        'kodePermasalahan' =>'required',
        'keteranganPermasalahan' => 'required'
        ]);

        $permasalahan = Permasalahan::find($id);
        $permasalahan->update($request->all());
        return redirect()->route('permasalahan.index')->with('status', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permasalahan::find($id)->delete();
        return redirect()->route('permasalahan.index')->with('status','Data Berhasil di Hapus');
    }
}
