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
                  <label>Agama</label>
                  <input type="text" class="form-control" name="agama" placeholder="Masukan Nilai Agama" value="{{old('agama')}}">
                </div>
                <div class="form-group">
                  <label>Pendidikan Kewarganegaraan</label>
                  <input type="text" class="form-control" name="pkn" placeholder="Masukan Nilai PKN" value="{{old('pkn')}}">
                </div>
                <div class="form-group">
                  <label>Bahasa Indonesia</label>
                  <input type="text" class="form-control" name="bahasa_indonesia" placeholder="Masukan Nilai Bahasa Indonesia" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Matematika</label>
                  <input type="text" class="form-control" name="mtk" placeholder="Masukan Nilai Matematika" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Sejarah</label>
                  <input type="text" class="form-control" name="sejarah" placeholder="Masukan Nilai Sejarah" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Bahasa Inggris</label>
                  <input type="text" class="form-control" name="bahasa_inggris" placeholder="Masukan Nilai Bahasa Inggris" value="{{old('name')}}">
                </div>
            
                <div class="form-group">
                  <label>Seni Budaya</label>
                  <input type="text" class="form-control" name="seni_budaya" placeholder="Masukan Nilai Seni Budaya" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Pendidikan Jasmani Olahraga dan Kesehatan</label>
                  <input type="text" class="form-control" name="pjok" placeholder="Masukan Nilai PJOK" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>PRKW</label>
                  <input type="text" class="form-control" name="prkw" placeholder="Masukan Nilai PRKW" value="{{old('name')}}">
                </div>
                
                <div class="form-group">
                  <label>Bahasa Sunda</label>
                  <input type="text" class="form-control" name="bahasa_sunda" placeholder="Masukan Nilai Bahasa Sunda" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Matematika Peminatan</label>
                  <input type="text" class="form-control" name="mtk_peminatan" placeholder="Masukan Nilai Matematika Peminatan" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Biologi</label>
                  <input type="text" class="form-control" name="biologi" placeholder="Masukan Nilai Biologi" value="{{old('name')}}">
                </div>
                
                <div class="form-group">
                  <label>Fisika</label>
                  <input type="text" class="form-control" name="fisika" placeholder="Masukan Nilai Fisika" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Kimia</label>
                  <input type="text" class="form-control" name="kimia" placeholder="Masukan Nilai Kimia" value="{{old('name')}}">
                </div>
                
                <div class="form-group">
                  <label>Bahasa Arab</label>
                  <input type="text" class="form-control" name="bahasa_arab" placeholder="Masukan Nilai Bahasa Arab" value="{{old('name')}}">
                </div>
                <input type="hidden" class="form-control" name="siswa_id" value="{{$siswa->id}}">
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         
@endsection