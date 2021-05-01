<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use DB;
class SmaController extends Controller
{
    //
    public function index()
    {   
        $siswas = Siswa::all();
        return view('pages.admin.sma.index',compact('siswas'));
    }
    public function add()
    {   
        return view('pages.admin.sma.add');
    }

    public function detail($id){
        $siswa = Siswa::find($id);
        return view('pages.admin.sma.detail',compact('siswa'));

    }
    
    public function mapeladd($id){
        $siswa = Siswa::find($id);
        return view('pages.admin.sma.mapeladd',compact('siswa'));

    }

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('pages.admin.sma.edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        //
        $siswa = $request->all();
        $item = Siswa::findOrFail($id);
         $item->update($siswa);
        return redirect('/sma/index');
    
    }
    public function store(Request $request){
        $siswa = $request->all();
        Siswa::create($siswa);
        return redirect('/sma/index');
    }
    
    public function mapelstore(Request $request){
        $mapel = $request->all();
        Mapel::create($mapel);
        return redirect('/sma/index');
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/sma/index');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $siswas = DB::table('siswa')->where('nisn','like','%'.$search.'%')->paginate(5);
        return view('pages.admin.sma.index',compact('siswas'));
    }
    public function mapeldelete($mapelid){
        $mapel = Mapel::find($mapelid);

        $mapel->delete();
        return redirect('/sma/index');
    }
}
