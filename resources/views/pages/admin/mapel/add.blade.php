@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Mata Pelajaran Siswa</h1>
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
              <form action="{{url('/sma/mapel/store')}}" method="post" >
                @csrf
               
                
                <div class="form-group">
                  <label>Nama Mata Pelajaran</label>
                  <input type="text" class="form-control" placeholder="Masukan Nama Mata Pelajaran" name="nama_mapel">
                </div>
              
                
                <div class="form-group">
                  <label>KKM</label>
                  <input type="text" class="form-control" name="kkm" placeholder="Masukan Nilai KKM Siswa" value="{{old('name')}}">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         
@endsection