@extends('layouts.admin')
@section('content')


    <div class="wrapper">
        <div class="main-panel">


            <div class="container">
                <div class="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah data</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('pemilih.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nis">NIS</label>
                                                    <input type="text" class="form-control" name="nis" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" name="kelas" required/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" required/>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="password_confirmation">Konfirmasi Password</label>
                                                    <input type="password" class="form-control" name="password_confirmation" required/>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select id="status" name="status" class="form-select" required>
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value=1>Sudah Memilih</option>
                                                        <option value=0>Belum Memilih</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-action btn-sm d-flex justify-content-end">
                                    <button class="btn btn-success" type="submit" >Tambah</button>
                                    <a href="{{ url('admin/pemilih') }}" class="btn btn-danger" style="margin-left: 5px">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


