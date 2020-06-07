<?php

namespace App\Models;
use App\Models\Gejala;
use App\Models\Permasalahan;
use App\Models\Bimbingan;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'gejalaPermasalahan';
    protected $fillable = ['kodeRelasi', 'gejala_id', 'permasalahan_id', 'nilai_mb', 'nilai_md', 'nilai_cf'];
    protected $guarded = [];

    public function permasalahan()
    {
    	$this->belongsTo(Permasalahan::class, 'permasalahan_id');
    }

    public function gejala()
    {
        $this->belongsTo(Gejala::class, 'gejala_id');
    }

    public function bimbingan()
    {
    	$this->belongsTo(Bimbingan::class);
    } 
}
