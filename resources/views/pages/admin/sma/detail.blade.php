@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="p-3 bg-success text-light">
           <h1 class="display-6 text-center">Info Kelulusan SMA Darul Kholidin </h1>
          </div>
          <!-- Content Row -->
          <div class="row">
          <table class="table m-3">
                            <tbody>
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
                                    <td class="bg-success text-white">NIS: </td>
                                    @if($siswa->gender == 'L')
                                    <td>Laki Laki</td>
                                    @elseif($siswa->gender == 'P')
                                    <td>Perempuan</td>
                                    @else
                                    
                                    @endif

                                    
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

            
          <table class="table m-3">
          <a href="{{url('sma/siswa/detail/mapeladd',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah Nilai Siswa </a>

                            <tbody>
                            @forelse($siswa->mapel as $item)
                                <tr>
                                    <td class="text-center font-weight-bold">Nilai Siswa</td>
                                    <td>
                                    
            
                                    <form action="{{url('sma/siswa/detail/mapel/delete',$item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger"></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Agama: </td>
                                    <td>{{$item->agama}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Pendidikan Kewarganegaraan: </td>
                                    <td>{{$item->pkn}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Bahasa Indonesia: </td>
                                    <td>{{$item->bahasa_indonesia}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Matematika: </td>
                                    <td>{{$item->mtk}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Sejarah: </td>
                                    <td>{{$item->sejarah}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Bahasa Inggris: </td>
                                    <td>{{$item->bahasa_inggris}}</td>
                                </tr>
                                
                                <tr>
                                    <td class="bg-success text-white">Seni Budaya: </td>
                                    <td>{{$item->seni_budaya}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Pendidikan Jasmani dan Olahraga: </td>
                                    <td>{{$item->pjok}}</td>
                                </tr>
                                
                                <tr>
                                    <td class="bg-success text-white">PRKW: </td>
                                    <td>{{$item->prkw}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Bahasa Sunda: </td>
                                    <td>{{$item->bahasa_sunda}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Matematika Peminatan: </td>
                                    <td>{{$item->mtk_peminatan}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Biologi: </td>
                                    <td>{{$item->biologi}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Fisika: </td>
                                    <td>{{$item->fisika}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Kimia: </td>
                                    <td>{{$item->kimia}}</td>
                                </tr>
                                
                                <tr>
                                    <td class="bg-success text-white">Bahasa Arab: </td>
                                    <td>{{$item->bahasa_arab}}</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white">Status: </td>
                                    <td>{{$siswa->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
            
          </div>
        
         
@endsection