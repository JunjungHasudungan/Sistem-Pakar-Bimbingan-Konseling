<?php

namespace App\Models;

use App\Models\Permasalahan;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $guarded = [];
    protected $table = 'solusi';
    protected $fillable = ['kodeSolusi','keteranganSolusi','permasalahan_id'];


    public function permasalahan()
    {
    	return $this->belongsTo(Permasalahan::class);
    }
}
