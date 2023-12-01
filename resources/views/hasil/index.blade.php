<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasil Diagnosa</title>
</head>

<body>
    <div class="container mt-4">
        <div class="text-center">
            <h1>HASIL DIAGNOSA</h1>
        </div>
        <div class="card">
            <div class="card-body">
                @foreach ($hasil as $item)
                    <div class="row">
                        <h3 class="text-center ">Data Pasien {{ $item->id }} {{ $item->nama }}</h3>
                        <div class="col-md-3 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <p>Nama : {{ $item->nama }}</p>
                                    <p>Alamat : {{ $item->alamat }}</p>
                                    <p>Agama : {{ $item->agama }}</p>
                                    <p>Usia : {{ $item->usia }}</p>
                                    <p>Jenis Kelamin : {{ $item->jenis_kelamin }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-2">
                            <div class="card">
                                <h2 class="text-center">IWL (Influence of Water Loss)</h2>
                                <div class="card-body">
                                    <p>Total Cairan : {{ $item->total_cairan }}</p>
                                    <p>Waktu : {{ $item->waktu }} Jam</p>
                                    <p>Berat Badan : {{ $item->berat_badan }}</p>
                                    <p>Total cairan tubuh adalah :
                                        {{ number_format($item->total_cairan / $item->waktu, 2) }} </p>
                                    <p>Jika dalam 24 jam : {{ number_format($item->waktu * 24, 2) }} liter/jam</p>
                                    <p>Jika meminum obat 3 kali dalam 24 jam:
                                        {{ number_format(($item->waktu * 24) / 3, 2) }} liter/jam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="card">
                            <h1 class="text-center"> IWL Kenaikan Suhu</h1>
                            <div class="card-body">
                                <p>Jumlah Cairan Masuk : {{ number_format($item->jumlah_cairan, 2) }}</p>
                                <p>Jumlah Kenaikan Suhu : {{ $item->jumlah_suhu_naik }}°</p>
                                <p>IWL Normal : {{ number_format($item->iwl_normal, 2) }} /jam </p>
                                <p>Total IWL : {{ number_format((0.1 * $item->jumlah_cairan) / 24, 2) }} /jam </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
        <a href="{{route('beranda')}}" class="btn btn-success mt-2 sm-2 ">SElESAI</a>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
