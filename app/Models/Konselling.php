<?php

namespace App\Models;
use App\Models\Gejala;
use App\Models\permasalahan;
use Illuminate\Database\Eloquent\Model;

class Konselling extends Model
{
    protected $table = 'Konselling';
    protected $fillable = ['bimbingan_id', 'permasalahan_id'];

    public function permasalahan()
    {
    	return $this->belongsTo(permasalahan::class);
    }

    public function gejala()
    {
    	return $this->belongsTo(Gejala::class);
    }
}
