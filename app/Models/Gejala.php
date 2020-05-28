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
    protected $fillable = ['kodeGejala','namaGejala','permasalahan_id', 'jawaban'];

    public function permasalahan()
    {
    	return $this->belongsTo(Permasalahan::class);
    }
    
    public function bimbingan()
    {
    	return $this->hasMany(Bimbingan::classs,'gejala_id','id');
    }

    public function solusi()
    {
        return $this->belongsToMany(Solusi::class);
    }

    public function relasi()
    {
        return $this->belongsTo(Relasi::class);

    }
}
