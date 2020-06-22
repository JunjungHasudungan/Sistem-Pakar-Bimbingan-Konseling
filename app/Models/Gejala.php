<?php

namespace App\Models;
use App\Models\Relasi;
use App\Models\Solusi;
use App\Models\Bimbingan;
use App\Models\Permasalahan;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $guarded = [];
    protected $table = 'gejala';
    protected $fillable = ['namaGejala'];

    public function permasalahan()
    {
    	return $this->belongsTo(Permasalahan::class, 'basepengetahuan');
    }
    
    public function bimbingan() {
        return $this->belongsToMany(Bimbingan::class, 'tmpGejala');
    }

    public function relasi()
    {
        return $this->belongsToMany(Relasi::class, 'basepengetahuan');

    }
}
