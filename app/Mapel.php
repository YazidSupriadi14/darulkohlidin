<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
    protected $table = 'nilai_mapel';
    protected $fillable = ['id','agama','pkn','bahasa_indonesia','mtk','sejarah','bahasa_inggris',
    'seni_budaya','pjok','prkw','bahasa_sunda','mtk_peminatan','biologi','fisika','kimia','bahasa_arab','siswa_id'];
   
    public function siswa(){
    	return $this->belongsTo(Siswa::class);
    }
}
