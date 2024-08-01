@extends('layouts.admin')
@section('content')

{{-- <div class="wrapper">

    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../index.html" class="logo">
                        <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                            height="20" />
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
                    <h3 class="fw-bold mb-3">Pemilih</h3>
                    <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                            <a href="{{ url('admin') }}">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Tabel</a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pemilih.index') }}">Pemilih</a>
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
                                <h4 class="card-title">Pemilih</h4>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('pemilih.create') }}"
                                        class="btn btn-primary btn-round ms-auto" data-bs-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($pemilih as $data)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->nis }}</td>
                                                    <td>{{ $data->kelas }}</td>
                                                    <td>{{ $data->jurusan }}</td>
                                                    <td>
                                                        @if ( $data->status == 1)
                                                            <p class="text-success">Sudah Pilih</p>
                                                        @else
                                                            <p class="text-danger">Belum pilih</p>
                                                        @endif
                                                    </td>
                                                    </td>
                                                    <form action="{{ route('pemilih.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <td>
                                                            <a href="{{ route('pemilih.edit', $data->id) }}"
                                                                class="btn btn-success">Ubah</a>
                                                            <a href="{{ route('pemilih.show', $data->id) }}"
                                                                class="btn btn-warning">Lihat</a>
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                                Hapus
                                                            </button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


               </div>

</div> --}}

<div class="container">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Pemilih</h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5>Pemilih</h5>
            </div>
            <div class="float-end">
                <a href="{{route('pemilih.create')}}" class="btn btn-sm btn-primary">
                    Add
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nonwrap">
                <table class="table" id="example">
                    <thead>
                        <tr>

                                <th>#</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pemilih as $data)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->kelas }}</td>

                                <td>
                                    @if ( $data->status == 1)
                                        <p class="text-success">Sudah Pilih</p>
                                    @else
                                        <p class="text-danger">Belum pilih</p>
                                    @endif
                                </td>
                                </td>
                                <form action="{{ route('pemilih.destroy', $data->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td class="d-flex align-item-end">
                                        <a href="{{ route('pemilih.edit', $data->id) }}"
                                            class="btn btn-success" style="margin-left: 5px">Ubah</a>
                                        {{-- <a href="{{ route('pemilih.show', $data->id) }}"
                                            class="btn btn-warning" style="margin-left: 5px">Lihat</a> --}}
                                        <button type="submit" class="btn btn-danger" style="margin-left: 5px"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                            Hapus
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
