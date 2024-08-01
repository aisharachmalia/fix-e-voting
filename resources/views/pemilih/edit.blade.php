@extends('layouts.admin')
@section('content')


    <div class="container mb-4 ">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Ubah data Pemilih</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('pemilih.update', $pemilih->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                    value="{{$pemilih->nama}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nis">NIS</label>
                                                    <input type="text" class="form-control" name="nis"
                                                    value="{{$pemilih->nis}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" name="kelas"
                                                    value="{{$pemilih->kelas}}"/>
                                                </div>
                                                 
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                    value="{{$pemilih->password}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select id="status" name="status" class="form-select" >
                                                        <option value="">{{$pemilih->status}}</option>
                                                        <option value=1 {{ $pemilih->status == 1 ? 'selected' : '' }}>Sudah Pilih</option>
                                                        <option value=0 {{ $pemilih->status == 2 ? 'selected' : '' }}>Belum Pilih</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-action btn-sm d-flex justify-content-end">
                                    <button class="btn btn-success" type="submit">Ubah</button>
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
