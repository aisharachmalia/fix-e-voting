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
                                    <form action="{{ route('suara.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Pemilih</label>
                                                    <select id="status" name="id_pemilih" class="form-select" required>
                                                        <option value=""></option>
                                                        @foreach ($pemilih as $data)
                                                            <option value="{{$data->id}}">
                                                                {{$data->nama}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Kandidat</label>
                                                    <select id="status" name="id_kandidat" class="form-select" required>
                                                        <option value=""></option>
                                                        @foreach ($kandidat as $data)
                                                            <option value="{{$data->id}}">
                                                                {{$data->nama_ketua}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-action btn-sm d-flex justify-content-end">
                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <a href="{{ url('admin/suara') }}" class="btn btn-danger" style="margin-left: 5px">Kembali</a>
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
