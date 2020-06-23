<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Solusi;
use App\Models\Gejala;

class Permasalahan extends Model
{
    protected $guarded = [];
    protected $table = 'permasalahan';
    protected $fillable = ['kodePermasalahan','keteranganPermasalahan', 'solusi'];

    public function gejala()
    {
    	return $this->belongsToMany(Gejala::class, 'gejalaPermasalahan')->withTimestamps();;
    }

    public function attachGejala($gejala_id) {
        $gejala = Gejala::find($gejala_id);
        return $this->gejala()->attach($gejala);
    }
    
    public function solusi()
    {
        return $this->hasMany(Solusi::class);
    }
}
