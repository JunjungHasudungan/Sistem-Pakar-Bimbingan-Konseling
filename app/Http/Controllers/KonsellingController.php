<?php

namespace App\Http\Controllers;
use App\Models\Konselling;
use App\Models\Permasalahan;
use App\Models\Bimbingan;
use App\Models\Gejala;
use App\Models\Relasi;
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
        $bimbingan_id = DB::table('tmpGejala')->get();
        $gejala = Gejala::all();
        return view('konselling.create', compact('gejala', 'bimbingan_id'));   
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
            'gejala' => 'required'
        ]);
        
        // Menggambil nilai dari form gejala
        $data = $request->all();
        $gejala = $data['gejala'];
        // dd($gejala);    

        $relasi = Relasi::select('permasalahan_id')
            ->whereIn('gejala_id', $gejala)
            ->groupBy('permasalahan_id')
            ->get();
        // dd($relasi);

        foreach ($relasi as $key => $value) {
            $permasalahan[] = $value->permasalahan_id;
        }
        // Menampilkan nilai pada Relasi
        // dd($permasalahan);

        foreach ($permasalahan as $key => $value){
            // dd($value);
            $count = 0;
            foreach ($gejala as $k => $v) {
                $cek = Relasi::select('nilai_cf')
                    ->where([
                        ['permasalahan_id', '=', $value],
                        ['gejala_id', '=', $v],
                    ])->get();
                // dd($value);
                // dd($gejala);

                if(!$cek->isEmpty()){
                    $nilai_cf[$value][] = $cek;
                    // dd($permasalahan);
                }
               
            }
        }
 foreach ($nilai_cf as $key => $value) {
            // dd($value);
            // var_dump(count($value));
            foreach ($value as $k => $v) {
                // var_dump(count($v));
                // dd($v);
                if(count($v) < 1){
                    $nilai_akhir_cf[$key] = $v1['nilai_cf'];
                } else {
                    foreach ($v as $k1 => $v1) {
                        // dd($v1['nilai_cf']);
                        $nilai_akhir_cf[$key][$k] = $v1['nilai_cf'];
                        // dd($nilai_akhir_cf);
                    }
                }
            } //untuk melakuakn perulangan dari nilai cf pada permasalahan
        }
 foreach ($nilai_akhir_cf as $key => $value) {
            if(count($nilai_akhir_cf[$key]) > 1){
                for($i = 0; $i < count($value) - 1; $i++) {
                    // echo 'permasalahan '.$key.'<br>';
                    $cf[$key] = $value[$i] + ($value[$i+1] * (1 - $value[$i]));
                    // echo $value[$i].' + '.$value[$i+1].' x '.(1 - $value[$i]).'<br>';
                    $value[$i+1] = $cf[$key];
                    // echo $cf[$key].'<br>';
                    $cf[$key] *= 100;
                }
            } else {
                $cf[$key] = $nilai_akhir_cf[$key][0] * 100;
            }
        }
    foreach($cf as $key => $value) {
             // echo $value.'<br>';
            $permasalahan = Permasalahan::find($key);
            $hasil_akhir[$key][0] = $permasalahan['keteranganPermasalahan'];
            $hasil_akhir[$key][1] = $value;
            $hasil_akhir[$key][2] = $permasalahan['solusi'];
         }
        //  dd($hasil_akhir);
         usort($hasil_akhir, function($a, $b) {
            return $b[1] <=> $a[1];
        });

         foreach ($gejala as $value) {
             $g = Gejala::find($value);
             $nama_gejala[]['namaGejala'] = $g['namaGejala'];
         }
         
        //  dd($hasil_akhir);
        //  dd($nama_gejala);
         return redirect('bimbingan.index', compact('hasil_akhir','nama_gejala'));
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
