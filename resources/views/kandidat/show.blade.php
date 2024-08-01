@extends('layouts.admin')
@section('content')

<div class="wrapper">

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
                                    <div class="card-title">Detail data</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('kandidat.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_urut">No. Urut</label>
                                                    <input type="number" class="form-control" name="no_urut"
                                                    value="{{$kandidat->no_urut}}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_ketua">Nama ketua</label>
                                                    <input type="text" class="form-control" name="nama_ketua"
                                                    value="{{$kandidat->nama_ketua}}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_wakil">Nama wakil</label>
                                                    <input type="text" class="form-control" name="nama_wakil"
                                                     value="{{$kandidat->nama_wakil}}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" name="kelas"
                                                     value="{{$kandidat->kelas}}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="visi">Visi</label>
                                                    <input type="text" class="form-control" name="visi" value="{{$kandidat->visi}}" disabled>

                                                </div>
                                                <div class="form-group">
                                                    <label for="misi">Misi</label>
                                                    <input type="text" class="form-control" name="misi" value="{{$kandidat->misi}}" disabled>


                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="jurusan">Jurusan</label>
                                                    <input type="text" class="form-control" name="jurusan"
                                                    value="{{$kandidat->jurusan}}" disabled/>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                                    <input type="text" class="form-control" name="tahun_ajaran"
                                                    value="{{$kandidat->tahun_ajaran}}" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Foto</label><br>
                                                    <img src="{{ asset('/images/kandidat/' . $kandidat->foto) }}"
                                                         width="500px">
                                                         <div class="card-action btn-sm d-flex justify-content-end">
                                                            <a href="{{ url('admin/kandidat') }}" class="btn btn-danger">Kembali</a>
                                                            <form>
                                                        </div>
                                                </div>
                                                {{-- <div class="card-action btn-sm d-flex justify-content-end">
                                                    <a href="{{ url('admin/kandidat') }}" class="btn btn-danger">Kembali</a>
                                                    <form>
                                                </div> --}}

                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        </div>

        @endsection
