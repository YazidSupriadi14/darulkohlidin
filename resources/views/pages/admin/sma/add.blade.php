@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Siswa</h1>
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
              <form action="{{url('/sma/siswa/store')}}" method="post" >
                @csrf
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="name" placeholder="Masukan Nama Siswa" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" class="form-control" name="nisn" placeholder="Masukan Nomor NISN" value="{{old('nisn')}}">
                </div>
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" placeholder="Masukan Nomor NIS" value="{{old('nis')}}">
                </div>
                
                <div class="form-group">
                  <label>NO SKL</label>
                  <input type="text" class="form-control" name="noskl" placeholder="Masukan Nomor SKL Siswa" value="{{old('noskl')}}">
                </div>
                
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tmp_lahir" placeholder="Masukan Tempat Lahir Siswa" value="{{old('tmp_lahir')}}">
                </div>
                
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" >
                </div>
                 
                <div class="form-group">
                     
                        <label for="slug">Tahun Lulus</label>
                          <select name="tahun_lulus" class="form-control">
                        
                          
                          <option value="">Pilih Tahun Lulus</option>
                              
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>

                          </select>
                      
                      </div>
                <div class="form-group">
                     
                        <label for="slug">Jenis Kelamin</label>
                          <select name="gender" class="form-control">
                        
                          
                          <option value="">Pilih Jenis Kelamin</option>
                              
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>

                          </select>
                      
                      </div>
              

                <div class="form-group">
                     
                        <label for="slug">Status Kelulusan</label>
                          <select name="status" class="form-control">
                        
                          
                          <option value="">Pilih Status Kelulusan</option>
                              
                              <option value="lulus">Lulus</option>
                              <option value="tidak lulus">Tidak Lulus</option>

                          </select>
                      
                      </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         
@endsection