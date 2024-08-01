@extends('layouts.admin')

@section('content')
    {{-- <div class="wrapper"> --}}
        <!-- Sidebar -->

        <!-- End Sidebar -->

        {{-- <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../index.html" class="logo">
                            <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->

                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Kandidat</h3>
                        <ul class="breadcrumbs mb-3">
                            <li class="nav-home">
                                <a href="{{ url('/admin') }}">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kandidat.index') }}">Kandidat</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Ubah data</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                 @if (session('success'))
                                            <div class="alert alert-success fade show" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                <div class="card-header">
                                    <div class="card-title">Detail data</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('kandidat.update', $kandidat->id) }}" method="POST"
                                        >
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_urut">No. Urut</label>
                                                    <input type="number" class="form-control" name="no_urut"
                                                    value="{{$kandidat->no_urut}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_ketua">Nama ketua</label>
                                                    <input type="text" class="form-control" name="nama_ketua"
                                                    value="{{$kandidat->nama_ketua}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_wakil">Nama wakil</label>
                                                    <input type="text" class="form-control" name="nama_wakil"
                                                     value="{{$kandidat->nama_wakil}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" name="kelas"
                                                     value="{{$kandidat->kelas}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="visi">Visi</label>
                                                    <textarea class="form-control" name="visi"  >
                                                        {{$kandidat->visi}}
                                                </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="misi">Misi</label>
                                                    <textarea class="form-control" name="misi" >
                                                        {{$kandidat->misi}}
                                                </textarea>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="jurusan">Jurusan</label>
                                                    <input type="text" class="form-control" name="jurusan"
                                                    value="{{$kandidat->jurusan}}" />
                                                </div> --}}
                                                {{-- <div class="form-group">
                                                    <label for="jurusan" class="form-label">Jurusan</label>
                                                    <select id="jurusan" name="jurusan" class="form-select" required>
                                                        <option value="" disabled selected>{{$kandidat->jurusan}}</option>
                                                        <option value="RPL">RPL</option>
                                                        <option value="TKRO">TKRO</option>
                                                        <option value="TBSM">TBSM</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                                    <input type="text" class="form-control" name="tahun_ajaran"
                                                    value="{{$kandidat->tahun_ajaran}}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Foto</label><br>
                                                    <input type="file" class="form-control" name="foto"
                                                    value="{{$kandidat->foto}}"/><br>
                                                    <img src="{{ asset('/images/kandidat/' . $kandidat->foto) }}"
                                                         width="500px">
                                                </div>
                                                <div class="card-action">
                                                    <button class="btn btn-success" type="submit">Ubah</button>
                                                    <a href="{{ url('admin/kandidat') }}" class="btn btn-danger">Kembali</a>
                                                    <form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> --}}

         {{-- </div> --}}

         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                {{ __('Edit Kandidat') }}
                            </div>
                            <div class="float-end">
                                <a href="{{ route('kandidat.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('kandidat.update', $kandidat->id) }}" method="POST"
                                >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="no_urut">No. Urut</label>
                                            <input type="number" class="form-control" name="no_urut"
                                            value="{{$kandidat->no_urut}}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_ketua">Nama ketua</label>
                                            <input type="text" class="form-control" name="nama_ketua"
                                            value="{{$kandidat->nama_ketua}}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_wakil">Nama wakil</label>
                                            <input type="text" class="form-control" name="nama_wakil"
                                             value="{{$kandidat->nama_wakil}}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <input type="text" class="form-control" name="kelas"
                                             value="{{$kandidat->kelas}}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="visi">Visi</label>
                                            <input type="textarea" class="form-control" name="visi" value="{{$kandidat->visi}}"


                                        </div>
                                        <div class="form-group">
                                            <label for="misi">Misi</label>
                                            <input type="textarea" class="form-control" name="misi" value="{{$kandidat->misi}}"


                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="jurusan" class="form-label">Jurusan</label>
                                            <select id="jurusan" name="jurusan" class="form-select" required>
                                                <option value="" disabled selected>{{$kandidat->jurusan}}</option>
                                                <option value="RPL">RPL</option>
                                                <option value="TKRO">TKRO</option>
                                                <option value="TBSM">TBSM</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="tahun_ajaran">Tahun Ajaran</label>
                                            <input type="text" class="form-control" name="tahun_ajaran"
                                            value="{{$kandidat->tahun_ajaran}}"/>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Foto</label><br>
                                            <input type="file" class="form-control" name="foto"
                                            value="{{$kandidat->foto}}"/><br>
                                            <img src="{{ asset('/images/kandidat/' . $kandidat->foto) }}"
                                                 width="1px">
                                        </div>
                                        <div class="card-action d-flex justify-content-end">
                                            <button class="btn btn-success" type="submit" style="margin-right: 5px">Ubah</button>
                                            <a href="{{ url('admin/kandidat') }}" class="btn btn-danger">Kembali</a>
                                            <form>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
