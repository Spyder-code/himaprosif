<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $fillable = [
        'nama', 'nim', 'angkatan','nomor','instagram','motto','image','status'
    ];
}
