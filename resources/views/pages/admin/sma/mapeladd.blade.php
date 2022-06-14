@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Nilai Mata Pelajaran Siswa</h1>
          </div>

          @if($errors ->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
          <!-- Content Row -->
          <div class="card-shadow">
            <div class="card-body">
              <form action="{{url('/sma/siswa/detail/mapeladd/store',$siswa->id)}}" method="post" >
                @csrf
               
                
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" disabled value="{{$siswa->name}}">
                </div>
              
                <div class="form-group">
                     
                     <label for="slug">Mata Pelajaran</label>
                       <select name="mapel_id" class="form-control" required>
                     
                       
                       <option value="">Pilih Nama Mata Pelajaran</option>
                           @foreach($mapels as $mapel)
                           <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                           @endforeach
                       </select>
                   
                   </div>
                   <div class="form-group">
                  <label>Nilai</label>
                  <input type="text" class="form-control" name="nilai" placeholder="Masukan Nilai Siswa" value="{{old('name')}}">
                </div>
                <input type="hidden" class="form-control" name="siswa_id" value="{{$siswa->id}}">
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         
@endsection