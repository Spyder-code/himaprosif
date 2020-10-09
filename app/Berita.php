<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
   protected $table = 'berita';

   public function getSlugAttribute()
   {
      return Str::slug($this->judul); 
   }
}
