@extends('layouts.siswa')

@section('content')
  
  <!-- Page Heading -->
          <div class=" jumbotron bg-success text-light">
           <h1 class=" text-center">Info Kelulusan SMA Darul Kholidin </h1>
          </div>
          <!-- Content Row -->
          <div class="row">

          <table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nisn</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1 ?>
  @forelse($siswas as $item)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->nisn}}</td>
      
      <td>
      
      <a href="{{url('sma/detaillulus',$item->id)}}"  class="btn btn-sm btn-info" title="">View</a>
      
      </td>
    </tr>
   
    @empty
    
      <tr>      
            <td class="text-center" colspan="7">Siswa Tidak Ditemukan
                  <a href="/sma/ceklulus" class="btn btn-sm btn-primary btn-block mt-5">Kembali</a> </td>
       </tr> 
            <tr>
            <div class="alert alert-danger" role="alert">
              Nama Siswa Tidak Berhasil Ditemukan . Mohon untuk cek kembali NISN dan password yang dimasukan!
            </div>
           </tr>
            
    @endforelse
  </tbody>
</table>
            
          </div>
        
         
@endsection