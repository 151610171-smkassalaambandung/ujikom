<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['nama'];

    public function siswa()
      {
    	return $this->hasMany('App\Siswa');
    }
}
