@extends('layouts.admin')
@section('content')


    {{-- <div class="wrapper">
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                              @if (session('success'))
                                            <div class="alert alert-success fade show" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                <div class="card-header">
                                    <h4 class="card-title">Suara</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('suara.create') }}"
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
                                                    <th>Pemilih</th>
                                                    <th>#</th>
                                                    <th>No. Urut</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($suara as $data)
                                                    <tr>
                                                        <th>{{ $no++ }}</th>
                                                        <td>{{ $data->pemilih->nama}}</td>
                                                        <td><h6>MEMILIH</h6></td>
                                                        <td>{{ $data->kandidat->no_urut }}</td>
                                                        </td>
                                                        <form action="{{ route('suara.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <td>
                                                                <a href="{{ route('suara.edit', $data->id) }}"
                                                                    class="btn btn-success">Ubah</a>
                                                                <a href="{{ route('suara.show', $data->id) }}"
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
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>siswa</h4>
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    <h5> siswa</h5>
                </div>
                <div class="float-end">
                    {{-- <a href="{{route('suara.create')}}" class="btn btn-sm btn-primary">
                        Add
                    </a> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nonwrap">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pemilih</th>
                                <th>#</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($suara as $data)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $data->pemilih->nama}}</td>
                                    <td><h6>MEMILIH</h6></td>
                                    </td>
                                    <form action="{{ route('suara.destroy', $data->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td class="d-flex align-item-end">
                                            <a href="{{ route('suara.edit', $data->id) }}"
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
