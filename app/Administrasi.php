<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    //

    protected $table = 'administrasi';
    protected $fillable = ['id','status_lunas','siswa_id'];
    public $timestamps = false;
    public function siswa(){
    	return $this->belongsTo(Siswa::class);
    }

}
