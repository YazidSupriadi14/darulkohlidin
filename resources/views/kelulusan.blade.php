@extends('layouts.app')

@section('content')
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('image/darulkholidinlogo.jpg')}}" alt="" srcset="" width="40px" height="30px">
                        <span id="logo" style="
	font-family:Roboto;
	text-transform:uppercase;
	font-weight:900;"class="ml-3">Darul Kholidin</span>
                    </a>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="/"style="
	font-family:Roboto;
	text-transform:uppercase;
	font-weight:900;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                  <a class="nav-link" href="/sma/ceklulus"style="
	font-family:Roboto;
	text-transform:uppercase;
	font-weight:900;">Info Kelulusan</a>
                </li>
              
              </ul>
            </div>
        </div>
      </nav>
<div class="row justify-content-center mt-3">
        <div class="col-md-8 bg-success">
            <div class="card">

                <div class="card-body">
                <img class="mx-auto d-block mb-3" src="{{ asset('image/darulkholidinlogo.jpg') }}" alt="" width="100px">
                <h4 class="text-center font-weight-bold text-success">YAYASAN PENDIDIKAN PONDOK PESANTREN DARUL KHOLIDIN</h4>
                 <p class="text-center font-weight-bold">Jln. Kp. Sasak RT 03 RW 08 Desa Tegal, Kec. Kemang, Kab. Bogor, Jawa Barat 16310</p>

                    <form method="POST" action="{{ route('smalogin') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">NISN</label>

                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control @error('email') is-invalid @enderror" name="nisn" value="{{ old('email') }}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="nis" type="password" class="form-control @error('password') is-invalid @enderror" name="nis" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-3">
                                
                                <button type="submit" class="btn btn-success  btn-sm btn-block">
                                    {{ __('Login') }}
                                </button>
                                                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
