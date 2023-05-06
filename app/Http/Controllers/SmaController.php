<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Administrasi;
use App\NilaiMapel;
use App\Mapel;
use DB;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
class SmaController extends Controller
{
    //
    public function index()
    {   
        $siswas = Siswa::where('tingkat_pendidikan','=','SMA')->get();
        return view('pages.admin.sma.index',compact('siswas'));
    }
    public function add()
    {   
        return view('pages.admin.sma.add');
    }

    public function detail($id){
        $siswa = Siswa::find($id);
        $administrasi = Administrasi::where('siswa_id','=',$id)->get();
        return view('pages.admin.sma.detail',compact('siswa','administrasi'));

    }

    public function viewbytahunlulus($tahun_lulus){
        $siswas = DB::table('siswa')->where('tahun_lulus','=',$tahun_lulus)->paginate(5);

        return view('pages.admin.sma.index',compact('siswas'));

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
   
    public function storelunas(Request $request){
        $administrasi = $request->all();
        Administrasi::create($administrasi);
        return redirect()->back();
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

    public function searchbyname(Request $request){
        $search = $request->get('search_name');
        $siswas = DB::table('siswa')->where('name','like','%'.$search.'%')->paginate(5);
        return view('pages.admin.sma.index',compact('siswas'));
    }

    public function mapeladd($id){
        $siswa = Siswa::find($id);
        $mapels = Mapel::all();
        return view('pages.admin.sma.mapeladd',compact('siswa','mapels'));

    }
    public function mapelstore(Request $request){
        $mapel = $request->all();
        NilaiMapel::create($mapel);
        return redirect('/sma/siswa/detail/'.$request->siswa_id);
    }
    public function mapeldelete($mapelid){
        $mapel = NilaiMapel::find($mapelid);

        $mapel->delete();
        return redirect('/sma/index');
    }

    public function makelunas($id)
    {
        $status_lunas = Administrasi::find($id);
        if($status_lunas->status_lunas == 0 || $status_lunas->status_lunas == ""){
            $change_status = '1';
        }
        else {
            $change_status = '0';
        }

        Administrasi::where('id',$id)->update(['status_lunas' => $change_status]);
        return redirect()->back();
    }

    public function indexsmp(){
        $siswas = Siswa::where('tingkat_pendidikan','=','SMP')->get();
        return view('pages.admin.smp.index',compact('siswas'));
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 

 
		// alihkan halaman kembali
		return redirect('/sma/index');
	}
}
