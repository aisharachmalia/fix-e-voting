
@extends('layouts.admin')
@section('content')

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
                                <a href="#">Tambah Data</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah data</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('kandidat.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="no_urut">No. Urut</label>
                                                    <input type="number" class="form-control" name="no_urut" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_ketua">Nama ketua</label>
                                                    <input type="text" class="form-control" name="nama_ketua" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_wakil">Nama wakil</label>
                                                    <input type="text" class="form-control" name="nama_wakil" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" name="kelas" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="visi">Visi</label>
                                                    <textarea class="form-control" name="visi">
                                                </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="misi">Misi</label>
                                                    <textarea class="form-control" name="misi">
                                                </textarea>
                                            </div>
                                                <div class="form-group">
                                                    <label for="jurusan" class="form-label">Jurusan</label>
                                                    <select id="jurusan" name="jurusan" class="form-select" required>
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="RPL">RPL</option>
                                                        <option value="TKRO">TKRO</option>
                                                        <option value="TBSM">TBSM</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                                    <input type="text" class="form-control" name="tahun_ajaran" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Foto</label>
                                                    <input type="file" class="form-control" name="foto" />
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <a href="{{ url('admin/kandidat') }}" class="btn btn-danger">Kembali</a>
                                    <form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                {{ __('E-voting') }}
                            </div>
                            <div class="float-end">
                                <a href="{{ route('kandidat.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('kandidat.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_urut">No. Urut</label>
                                            <input type="number" class="form-control" name="no_urut" />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_ketua">Nama ketua</label>
                                            <input type="text" class="form-control" name="nama_ketua" />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_wakil">Nama wakil</label>
                                            <input type="text" class="form-control" name="nama_wakil" />
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <input type="text" class="form-control" name="kelas" />
                                        </div>
                                        <div class="form-group">
                                            <label for="visi">Visi</label>
                                         <div class="col-sm-9">
                                    <textarea class="form-control" name="visi" id="putih" rows="4" required></textarea>
                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="misi">Misi</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="misi" id="putih" rows="4" required></textarea>
                                            </div>
                                    </div>
                                        {{-- <div class="form-group">
                                            <label for="jurusan" class="form-label">Jurusan</label>
                                            <select id="jurusan" name="jurusan" class="form-select" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="RPL">RPL</option>
                                                <option value="TKRO">TKRO</option>
                                                <option value="TBSM">TBSM</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="tahun_ajaran">Tahun Ajaran</label>
                                            <input type="text" class="form-control" name="tahun_ajaran" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Foto</label>
                                            <input type="file" class="form-control" name="foto" />
                                        </div>
                                        <div class="card-action btn-sm d-flex justify-content-end mt-2">
                                            <button class="btn btn-success" type="submit" style="margin-right: 5px">Tambah</button>
                                            <a href="{{ url('admin/kandidat')}}" class="btn btn-danger">Kembali</a>

                                        </div>
                                    </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->


        @endsection
