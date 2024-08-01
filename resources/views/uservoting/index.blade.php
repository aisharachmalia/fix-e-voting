<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    /* Add your CSS styling here */
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
</head>
<body>
    
<h1 class="text mb-5" style="text-align: center;">Daftar Calon Ketua OSIS Periode 2024 - 2025</h1>
<center><hr width="900"></center>
<div class="container">
    <div class="row">
        @foreach ($kandidat as $data)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="text-center votcard shadow-md bg-white p-4 pt-5 h-100">
                    <img class="shadow-md p-2" src="{{ asset('images/kandidat/' . $data->foto) }}" alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $data->no_urut }}</h4>
                    <h6 class="fs-7">Ketua :<span class="text-primary fw-bold">{{ $data->nama_ketua }}</span></h6>
                    <h6 class="fs-7">Wakil Ketua :<span class="text-primary fw-bold">{{ $data->nama_wakil }}</span></h6>
                    <p class="text-dark fs-8">Kelas : {{ $data->kelas }}</p>
                    <p class="text-dark mb-3 fs-8">Tahun ajaran : {{ $data->tahun_ajaran }}</p>
                    <a href="{{ route('uservoting.show', ['id' => $data->id]) }}" class="btn btn-primary fw-bolder fs-8">Visi & Misi</a>
                    @if ($pemilih->status == 0)
                        <form method="POST" action="{{ route('vote.store') }}" class="d-inline">
                            @csrf
                            <input type="hidden" name="id_pemilih" value="{{ $pemilih->id }}">
                            <input type="hidden" name="id_kandidat" value="{{ $data->id }}">
                            <button type="submit" class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                        </form>
                    @else
                        <button class="btn btn-secondary fw-bolder px-4 ms-2 fs-8" disabled>Already Voted</button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>     </div>
</div>

@if($selectedKandidat)
<!-- Modal -->
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Visi & Misi</h1>
                <a href="{{ route('uservoting.index') }}" class="btn-close" aria-label="Close"></a>
            </div>
            <div class="modal-body">
                <ul class="molist">
                    <h6>Visi</h6>
                    <li>{{ $selectedKandidat->visi }}</li>
                    <h6>Misi</h6>
                    <li>{{ $selectedKandidat->misi }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

<script>
    if (document.getElementById('exampleModal')) {
        var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
        modal.show();
    }
</script>
</body>
</html>
