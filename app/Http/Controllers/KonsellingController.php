<?php

namespace App\Http\Controllers;
use App\Models\Konseling;
use App\Models\Permasalahan;
use App\Models\Bimbingan;
use App\Models\Gejala;
use App\Models\Relasi;
use App\Models\TempKonselling;
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
    private function selectGejala($bimbingan_id) {
        $gejala = Gejala::all();
        return view('konselling.create', compact('gejala', 'bimbingan_id'));
    }

    public function create()
    {   
        $Konseling = Konseling::with('bimbingan')->get();
        $bimbingan_id = DB::table('tmpGejala')->get();
        $gejala = Gejala::all();
        return view('konselling.create', compact('gejala', 'bimbingan_id','Konseling'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'gejala' => 'required|min:2'
        ],

        [   'gejala.min' => 'Gejala yang di pilih minimal 2',
            'gejala.required' => 'Gejala wajib dipilih']
    );
        $gejala = DB::table('gejala')->whereIn('id', $request->input('gejala'))->get();
        $permasalahan = Permasalahan::orderBy('id', 'asc')->get();
        $countHubungan = DB::table('gejalaPermasalahan')->groupBy('permasalahan_id')->get(['permasalahan_id'])->count();
        $countPermasalahan = $permasalahan->count();
        if ($countPermasalahan != $countHubungan) {
            session()->flash('danger', 'alert-danger');
            session()->flash('notifikasi', 'Maaf, terjadi kesalahan. Silakan coba beberapa saat lagi.');

            // return redirect()->route('konsultasi.index');
        }

         $bimbingan_id = $request->bimbingan_id;
                foreach ($request->gejala as $gejala_id) {
                    $pasien = Permasalahan::find($bimbingan_id)->attachGejala($gejala_id);
                    $gejala = Gejala::find($gejala_id);
                    foreach ($gejala->permasalahan as $permasalahan) {
                        $temp_konselling = TempKonselling::where('bimbingan_id', $bimbingan_id)->where('permasalahan_id', $permasalahan->id);
                        $temp_diag = $temp_konselling->first();
                        if (!$temp_diag) {
                            $temp_diag = new TempKonselling;
                            $temp_diag->bimbingan_id = $bimbingan_id;
                            $temp_diag->permasalahan_id = $permasalahan->id;
                            $temp_diag->gejala = count($permasalahan->gejala);
                            $temp_diag->gejala_terpenuhi = 1;
                            $temp_diag->save();
                        } else {
                            $temp_diag = $temp_konselling->update(['gejala_terpenuhi' => $temp_diag->gejala_terpenuhi + 1]);
                        }
                    }
                }
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
