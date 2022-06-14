<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
class MapelController extends Controller
{
    //


    public function index()
    {   
        $mapels = Mapel::all();
        return view('pages.admin.mapel.index',compact('mapels'));
    }
    public function add()
    {   
        return view('pages.admin.mapel.add');
    }

    public function edit($id){
        $mapel = Mapel::find($id);
        return view('pages.admin.mapel.edit',compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        //
        $mapel = $request->all();
        $item = Mapel::findOrFail($id);
         $item->update($mapel);
        return redirect('/sma/mapel');
    
    }
    public function store(Request $request){
        $mapel = $request->all();
        Mapel::create($mapel);
        return redirect('/sma/mapel');
    }
   
    public function delete($id){
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('/sma/mapel');
    }
}
