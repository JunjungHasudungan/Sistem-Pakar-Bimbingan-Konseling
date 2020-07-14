<?php

namespace App\Models;
use App\Models\Relasi;
use App\Models\Gejala;
use App\Models\Konseling;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    protected $table = 'bimbingan';
    protected $fillable = ['nim', 'namaLengkap', 'status', 'jenisKelamin'];
    protected $guarded = [];

    
    public function rules()
    {
    	return $this->belongsTo(Relasi::class);
    }

    public function gejala()
    {
    	return $this->hasMany(Gejala::class);
    }

    public function konseling()
    {
        return $this->hasOne(Konseling::class, 'bimbingan_id');
    }  
}
