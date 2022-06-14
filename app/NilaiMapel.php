<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiMapel extends Model
{
    //
    protected $table = 'nilai_mapel';
    protected $fillable = ['id','mapel_id','siswa_id','nilai'];
   
    public function siswa(){
    	return $this->belongsTo(Siswa::class);
    }

    public function mapel(){
    	return $this->belongsTo(Mapel::class);
    }
}
