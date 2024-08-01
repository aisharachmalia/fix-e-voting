<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi Kandidat</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e7ef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            text-align: center;
        }
        .container img {
            width: 200px;
            height: 200px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .details {
            display: flex;
            justify-content: space-around;

        }
        .details div {
            width: 45%;
        }
        .details h2 {
            font-size: 14;
            justify-content: start;
            margin-bottom: 10px;
        }
        .raur {
            margin-right: 340px;

        }
        .details p {
            font-size: 20px;
            color: gray;
        }
        .buttons {
            margin-top: 20px;
            margin-left: 380px
        }
        .buttons button {
            background-color: #4CAF50;
            color: white;
            width: 100px;
            height: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;


        }
        .buttons button:last-child {
            background-color: #8a8a8a;
        }
        .buttons button:hover {
            opacity: 0.9;
        }
    </style> --}}

</head>
<body>

            {{-- <img src="assets/images/apep.jpg" alt="Candidate Photo"> --}}
            <div>
                @foreach ($kandidat as $kandidat)


                <h3>Detail Kandidat</h3>
                <hr />
                <div class="row">
                   <div class="col-md-3">
                      <div class="callout text-center">
                         <img src="{{ asset('assets/img/kandidat/' . $kandidat->foto) }}" alt="{{ $kandidat->foto }}" class="img-responsive">
                      </div>
                   </div>
                   <div class="col-md-9" style="padding-top:20px;">
                      <table class="table table-striped">
                         <tbody>
                            <tr>
                               <td width="150">Nama Kandidat</td>
                               <td>: {{ $kandidat->nama_ketua }}</td>
                            </tr>
                            <tr>
                               <td width="150">Nama Kandidat</td>
                               <td>: {{ $kandidat->nama_wakil }}</td>
                            </tr>
                            <tr>
                               <td>Visi</td>
                               <td>: {{ $kandidat->visi }}</td>
                            </tr>
                            <tr>
                               <td>Misi</td>
                               <td>: {{ $kandidat->misi }}</td>
                            </tr>
                            <tr>
                               <td>Periode</td>
                               <td>: {{ $kandidat->periode }}</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
        @endforeach
        <div class="buttons">

            <button class="button btn">
            <a href="/" class="btn btn-sm ">KEMBALI
            </button>
            </a>
        </div>

    </div>
</body>
</html>
