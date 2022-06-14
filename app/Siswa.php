<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['id','name','nisn','nis','noskl','tmp_lahir','tgl_lahir','gender','status','user_id','tahun_lulus'];
   
    public function user() { 
        return $this->belongsTo(User::class,'user_id','id'); 
    }
    public function nilai_mapel(){
    	return $this->hasMany(NilaiMapel::class);
    }

    
    public function administrasi(){
    	return $this->hasOne(Administrasi::class);
    }
}
