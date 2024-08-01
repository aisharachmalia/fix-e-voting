@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')



    {{-- <div class="wrapper">
        <!-- Sidebar -->

        <!-- End Sidebar -->

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
                        <h3 class="fw-bold mb-3">Kandidat</h3>
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
                                <a href="{{ route('kandidat.index') }}">Kandidat</a>
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
                                    <h4 class="card-title">Kandidat</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('kandidat.create') }}"
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
                                                    <th>No. Urut</th>
                                                    <th>Nama Ketua</th>
                                                    <th>Nama Wakil</th>
                                                    <th>Kelas</th>
                                                    <th>Jurusan</th>
                                                    <th>Tahun_ajaran</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($kandidat as $data)
                                                    <tr>
                                                        <th>{{ $no++ }}</th>
                                                        <td>{{ $data->no_urut }}</td>
                                                        <td>{{ $data->nama_ketua }}</td>
                                                        <td>{{ $data->nama_wakil }}</td>
                                                        <td>{{ $data->kelas }}</td>
                                                        <td>{{ $data->jurusan }}</td>
                                                        <td>{{ $data->tahun_ajaran }}</td>
                                                        </td>
                                                        <form action="{{ route('kandidat.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <td>
                                                                <a href="{{ route('kandidat.edit', $data->id) }}"
                                                                    class="btn btn-success">Ubah</a>
                                                                <a href="{{ route('kandidat.show', $data->id) }}"
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
    <!--   Core JS Files   -->
    <div class="card mt-5">
        <div class="card-header">
            <div class="float-start">
                <h5>Kandidat</h5>
            </div>
            <div class="float-end">
                <a href="{{ route('kandidat.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Urut</th>
                            <th>Nama Ketua</th>
                            <th>Nama Wakil</th>
                            <th>Kelas</th>
                            <th>Tahun_ajaran</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $no = 1; @endphp
                        @foreach ($kandidat as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->no_urut }}</td>
                            <td>{{ $data->nama_ketua }}</td>
                            <td>{{ $data->nama_wakil }}</td>
                            <td>{{ $data->kelas }}</td>
                            {{-- <td>{{ $data->jurusan }}</td> --}}
                            <td>{{ $data->tahun_ajaran }}</td>
                            </td>
                            <form action="{{ route('kandidat.destroy', $data->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <td class="d-flex align-items-start ">
                                    <a href="{{ route('kandidat.edit', $data->id) }}"
                                        class="btn btn-success">Ubah</a>
                                    <a href="{{ route('kandidat.show', $data->id) }}"
                                        class="btn btn-warning" style="margin-left: 5px">Lihat</a>
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
