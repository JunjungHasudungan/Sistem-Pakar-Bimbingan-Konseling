<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempKonselling extends Model
{
    protected $table = 'tmpKonselling';
    protected $fillable = ['bimbingan_id', 'permasalahan_id', 'gejala', 'gejalaTerpenuhi'];

    public $timestamps = false;
}
