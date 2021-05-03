<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use DB;
class SiswaController extends Controller
{
    //
    public function ceklulus()
    {
        return view('kelulusan');
    }

    public function login(Request $request){
        
        $nisn = $request->get('nisn');
        $nis = $request->get('nis');
        $siswas = DB::table('siswa')->where('nisn','=',$nisn)->where('nis','=',$nis)->get();
        return view('infolulus',compact('siswas'));
    }

    
    public function detaillulus($id){
        $siswa = Siswa::find($id);
        return view('infodetaillulus',compact('siswa'));

    }
}
