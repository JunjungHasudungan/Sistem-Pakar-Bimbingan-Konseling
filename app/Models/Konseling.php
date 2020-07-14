<?php

namespace App\Models;
use App\Models\Gejala;
use App\Models\permasalahan;
use App\Models\Bimbingan;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $table = 'Konselling';
    protected $fillable = ['bimbingan_id', 'permasalahan_id', 'gejala_id'];

    public function permasalahan()
    {
    	return $this->belongsTo(permasalahan::class);
    }

    public function gejala()
    {
    	return $this->belongsTo(Gejala::class);
    }

    public function bimbingan()
    {
        return $this->belongsTo(Bimbingan::class, 'bimbingan_id');
    }
}
