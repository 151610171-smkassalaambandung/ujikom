<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
		protected $table = 'siswas';
	protected $primaryKeys = 'id';
     protected $fillable = ['nama','kelas','jurusan','cover'];
    protected $visible = ['nama','kelas','jurusan','cover'];
    public  $timestamps = true;
       public function author()
      {
    	return $this->hasMany('App\Author');
    }
}
