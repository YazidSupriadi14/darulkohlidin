<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //

    protected $table = 'mapel';

    protected $fillable = ['id','nama_mapel','kkm'];

    public function nilai_mapel(){
    	return $this->hasMany(NilaiMapel::class);
    }


}
