@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class=" jumbotron bg-success text-light">
           <h1 class=" text-center">Info Kelulusan SMA Darul Kholidin </h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-6">
              <form action="/search" method="get">
                  <input type="text" name="search" class="form-control">
                  <span class="input-group-repend">
                    <button type="submit" class="btn btn-sm btn-primary">Cari Siswa</button>
                  </span>
              </form>
            </div>
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nisn</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1 ?>
  @forelse($posts as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->nisn}}</td>
      
      <td class="text-white mt-3 ml-3 font-weight-bold p-1 badge badge-success text-wrap">{{$item->status}}</td>
      <td>
      
      <a href="{{url('sma/siswa/detail',$item->id)}}"  class="btn btn-sm btn-info" title="">View</a>
      <a href="{{url('sma/siswa/edit',$item->id)}}"  class="btn btn-sm btn-success" title="">Edit</a>

<form action="{{url('sma/siswa/delete',$item->id)}}" method="post" class="d-inline">
  @csrf
  @method('delete')
  <button class="btn btn-sm btn-danger"></i>Delete</button>
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