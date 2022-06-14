@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class=" jumbotron bg-success text-light">
           <h1 class=" text-center">Info Kelulusan SMA Darul Kholidin </h1>
          </div>
          <!-- Content Row -->
          <a href="{{url('sma/mapel/add')}}"  class="btn btn-sm btn-primary" title="">Tambah Mapel</a>

          <table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mata Pelajaran</th>
      <th scope="col">KKM</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1 ?>
  @forelse($mapels as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$item->nama_mapel}}</td>
      <td>{{$item->kkm}}</td>
      
      <td class="text-white mt-3 ml-3 font-weight-bold p-1 badge badge-success text-wrap">{{$item->status}}</td>
      <td>
      
      <a href="{{url('sma/mapel/edit',$item->id)}}"  class="btn btn-sm btn-success" title="">Edit</a>

<form action="{{url('sma/mapel/delete',$item->id)}}" method="post" class="d-inline">
  @csrf
  @method('delete')
  <button class="btn btn-sm btn-danger" onclick="return confirm('are you sure to delete this data?')"></i>Delete</button>
</form>
      </td>
    </tr>
   
    @empty
            <tr>
                <td class="text-center" colspan="7">Data Kosong</td>
           </tr> 
    @endforelse
  </tbody>
</table>
            
          </div>
        
         
@endsection