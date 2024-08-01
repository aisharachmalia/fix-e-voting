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
                                    <div class="card-title">Ubah data</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('suara.update', $suara->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Pemilih</label>
                                                    <select id="status" name="id_pemilih" class="form-select" required>
                                                        <option value=""></option>
                                                        @foreach ($pemilih as $data)
                                                            <option value="{{$data->id}}" {{ $data->id == $suara->id_pemilih ? 'selected' : '' }}>
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
                                                            <option value="{{$data->id}}" {{ $data->id == $suara->id_kandidat ? 'selected' : '' }}>
                                                                {{$data->nama_ketua}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit">Ubah</button>
                                    <a href="{{ url('admin/suara') }}" class="btn btn-danger">Kembali</a>
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
