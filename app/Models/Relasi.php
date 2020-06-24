<?php

namespace App\Models;
use App\Models\Gejala;
use App\Models\Permasalahan;
use App\Models\Bimbingan;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'gejalaPermasalahan';
    protected $fillable = ['gejala_id', 'permasalahan_id'];
    protected $guarded = [];

    public function permasalahan()
    {
    	$this->belongsToMany(Permasalahan::class, 'gejalaPermasalahan');
    }

    public function gejala()
    {
        $this->belongsToMany(Gejala::class, 'gejalaPermasalahan');
    }

    public function bimbingan()
    {
    	$this->belongsToMany(Bimbingan::class);
    } 
}
