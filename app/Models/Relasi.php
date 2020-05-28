<?php

namespace App\Models;
use App\Models\Gejala;
use App\Models\Bimbingan;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'relasi';
    protected $fillable = ['kodeRelasi', 'permasalahan_id', 'bimbingan_id', 'gejala_id'];
    protected $guarded = [];

    public function Relasi()
    {
    	$this->belongsTo(Relasi::class);
    }

    public function Permasalahan()
    {
    	$this->belongsTo(Relasi::class);
    }

    public function bimbingan()
    {
    	$this->belongsTo(Bimbingan::class);
    } 
}
