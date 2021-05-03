<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['id','name','nisn','nis','noskl','tmp_lahir','tgl_lahir','gender','status','user_id'];
   
    public function asdos() { 
        return $this->belongsTo(User::class,'user_id','id'); 
    }
    public function mapel(){
    	return $this->hasMany(Mapel::class);
    }
}
