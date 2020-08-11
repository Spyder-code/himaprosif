<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $fillable = [
        'icon', 'subjek', 'pesan','status','id_user'
    ];
}
