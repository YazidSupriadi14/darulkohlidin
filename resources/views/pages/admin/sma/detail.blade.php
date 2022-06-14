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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Administrasi status
</button>

<table class="table m-3">
<tr>
    @foreach($administrasi as $item)
                                    <td class="bg-success text-white">Status Lunas Administrasi: </td>
                                    @if($item->status_lunas == '' or $item->status_lunas == 0)
                                    <td>Belum Lunas</td>
                                    @else
                                    <td>Lunas</td>
                                    @endif

                                    <td>@if($item->status_lunas == '1')
            <a href="{{url('sma/siswa/administrasi-lunas/'.$item->id)}}" class="btn btn-primary btn-sm">Make belum Lunas</a>
          @else
            <a href="{{url('sma/siswa/administrasi-lunas/'.$item->id)}}" class="btn btn-danger btn-sm ">Make Lunas</a>
         @endif
      </td>
                                </tr>
                                        
        @endforeach
</table>
          <table class="table m-3">
          <a href="{{url('sma/siswa/detail/mapeladd',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah Nilai Siswa </a>
          <td class="text-center font-weight-bold">Nilai Siswa</td>
                                    <td>
                                   
                            <tbody>
                                @forelse($siswa->nilai_mapel as $item)
                                <tr>
                                    <td class="bg-success text-white">{{$item->mapel->nama_mapel}}: </td>
                                    <td>{{$item->nilai}}</td>
                               
                                     <td>
                                    <form action="{{url('sma/siswa/detail/mapel/delete',$item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger"></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
            
          </div>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Administrasi Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/sma/siswa/administrasi-lunas/store')}}" method="post" >
                @csrf
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" value="{{$siswa->name}}" name="name" placeholder="Masukan Nama Siswa" disabled >
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="hidden" class="form-control" value="{{$siswa->id}}" name="siswa_id" placeholder="Masukan Nama Siswa" >
                </div>
                
                
                <div class="form-group">
                     
                        <label for="slug">Status Lunas Administrasi</label>
                          <select name="status_lunas" class="form-control">
                        
                          
                          <option value="">Pilih Status Lunas</option>
                              
                              <option value="0">Lunas</option>
                              <option value="1">Belum Lunas</option>

                          </select>
                      
                      </div>
              
   
                          
                     
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
</div>
         
@endsection