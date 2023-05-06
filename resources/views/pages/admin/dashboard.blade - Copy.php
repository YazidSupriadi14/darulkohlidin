@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="jumbotron bg-success text-light">
           <h1 class="display-4 text-center">Selamat Datang di Website Buku Induk Siswa Pondok Pesantren Darul Kholidin </h1>
          </div>
          <!-- Content Row -->
          <div class="row">
      
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas SMP</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kelas SMA</div>
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

      
          
          </div>
        
         
@endsection