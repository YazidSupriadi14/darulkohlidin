@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class=" jumbotron bg-success text-light">
           <h1 class=" text-center">Info Kelulusan SMA Darul Kholidin </h1>
          </div>

          <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tahun Lulus SMA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      <a href="/sma/index/lulus/2021" class='btn btn-sm btn-success'>2021</a>
                      <a href="/sma/index/lulus/2022" class='btn btn-sm btn-success'>2022</a>
                   
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <a href="/sma/index/add" class="btn btn-primary btn-sm">Tambah Siswa</a>
            </div>
            <div class="col-md-3">
            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
            </div>
            <div class="col-md-3">
              <form action="/search" method="get">
              <div class="input-group">
                <input type="search" class="form-control rounded" name="search"placeholder="Cari siswa dengan NISN" aria-label="Search"
                  aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
              </div> 
              </form>
            </div>

            <div class="col-md-3">
              <form action="/search" method="get">
              <div class="input-group">
                <input type="search" class="form-control rounded" name="search_name"placeholder="Cari siswa dengan Nama" aria-label="Search"
                  aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
              </div> 
              </form>
            </div>
          <table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nisn</th>
      <th scope="col">Status</th>
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
      
      <td class="text-white mt-3 ml-3 font-weight-bold p-1 badge badge-success text-wrap">{{$item->status}}</td>
      <td>
      
      <a href="{{url('sma/siswa/detail',$item->id)}}"  class="btn btn-sm btn-info" title="">View</a>
      <a href="{{url('sma/siswa/edit',$item->id)}}"  class="btn btn-sm btn-success" title="">Edit</a>

<form action="{{url('sma/siswa/delete',$item->id)}}" method="post" class="d-inline">
  @csrf
  @method('delete')
  <button class="btn btn-sm btn-danger" onclick="return confirm('are you sure to delete this data?')"></i>Delete</button>
</form>
      </td>
    </tr>
   
    @empty
            <tr>
                <td class="text-center" colspan="7">Data Kosong</td>
           </tr> 
    @endforelse
  </tbody>
</table>
            
          </div>
          
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        
         
@endsection