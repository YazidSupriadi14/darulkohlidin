@extends('layouts.siswa')

@section('content')
  
  <!-- Page Heading -->
          <div class="p-3 bg-success text-light">
          @if($siswa->status == "lulus")
           <h1 class="display-6 text-center">Selamat Anda dinyatakan {{$siswa->status}} pada tahun ajaran 2020/2021 </h1>
          @else

          @endif
          </div>
          <!-- Content Row -->
          <div class="row">
          <table class="table m-3">
                            <tbody>
                            
                            <tr>
                                    <td class="bg-success text-white">Data Siswa </td>
                                    <td class="bg-success"></td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Nama: </td>
                                    <td>{{$siswa->name}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">NISN: </td>
                                    <td>{{$siswa->nisn}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">NIS: </td>
                                    <td>{{$siswa->nis}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">NO SKL: </td>
                                    <td>{{$siswa->noskl}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Tempat Lahir: </td>
                                    <td>{{$siswa->tmp_lahir}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Tanggal Lahir: </td>
                                    <td>{{$siswa->tgl_lahir}}</td>
                                </tr>
                                
                                <tr>
                                    <td class="bg-success text-white">Status: </td>
                                    <td>{{$siswa->status}}</td>
                                </tr>
                            </tbody>
                        </table>

                  <a href="/" class="btn btn-sm btn-primary btn-block">Kembali ke home</a> 
          </div>
        
         
@endsection