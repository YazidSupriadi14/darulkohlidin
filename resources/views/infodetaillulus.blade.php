@extends('layouts.siswa')

@section('content')
  
  <!-- Page Heading -->

  <div class="p-3 bg-success text-light">
        
           <h1 class="display-6 text-center">Info Kelulusan Siswa Darul Kholidin Tahun Ajaran 2021/2022 </h1>
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

                     
                   </div>
                   <div class="p-2 bg-success text-light">
          @if($siswa->status == "lulus")
           <h3 class="display-6 text-center">Selamat Anda dinyatakan <span class='font-weight-bold'>{{strtoupper($siswa->status)}}</span> pada tahun ajaran 2021/2022 </h3>
          @else

          @endif
          </div>
          @forelse($administrasi as $item)
     @if($item->status_lunas == '' or $item->status_lunas = 0)

     @else
          <table class="table m-3">
         <td class="text-center font-weight-bold">Nilai Siswa</td>
                                    <td>
                                   
                            <tbody>
                                @forelse($siswa->nilai_mapel as $item)
                                <tr>
                                    <td class="bg-success text-white">{{$item->mapel->nama_mapel}}: </td>
                                    <td>{{$item->nilai}}</td>
                               
                                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
           @endforeach
                        <a href="/" class="btn btn-sm btn-primary btn-block">Kembali ke home</a> 
        
         
@endsection