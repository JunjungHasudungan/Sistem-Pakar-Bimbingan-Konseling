<?php

namespace App\Models;
use App\Models\Relasi;
use App\Models\Solusi;
use Illuminate\Database\Eloquent\Model;

class Permasalahan extends Model
{
    protected $guarded = [];
    protected $table = 'permasalahan';
    protected $fillable = ['kodePermasalahan','keteranganPermasalahan'];

    
    public function rules()
    {
    	return $this->belongsTo(Rules::class);
    }

    public function gejala()
    {
    	return $this->hasMany(Gejala::class);
    }

    public function solusi()
    {
        return $this->hasMany(Solusi::class);
    }
}
