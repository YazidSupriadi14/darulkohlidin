@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Siswa</h1>
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
              <form action="{{url('/sma/siswa/update',$siswa->id)}}" method="post" >
              @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="name" placeholder="Masukan Nama Siswa" value="{{$siswa->name}}">
                </div>
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" class="form-control" name="nisn" placeholder="Masukan Nomor NISN" value="{{$siswa->nisn}}">
                </div>
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" placeholder="Masukan Nomor NIS" value="{{$siswa->nis}}">
                </div>
                
                <div class="form-group">
                  <label>NO SKL</label>
                  <input type="text" class="form-control" name="noskl" placeholder="Masukan Nomor SKL Siswa" value="{{$siswa->noskl}}">
                </div>
                
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tmp_lahir" placeholder="Masukan Tempat Lahir Siswa" value="{{$siswa->tmp_lahir}}">
                </div>
                
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir"  value="{{$siswa->tgl_lahir}}">
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
                              <option value="tidak lulus">Lulus</option>

                          </select>
                      
                      </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         
@endsection