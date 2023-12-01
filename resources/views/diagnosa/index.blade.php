<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnosa Iwl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Perhitungan IWL (Influence of Water Loss)</h1>
        <form method="POST" action="{{ route('store.diagnosasimpan') }}">
            @csrf
            <input type="hidden" value="{{$id->id}}" name="suhu_id">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="total_cairan">Total Cairan Dalam Tubuh (TBW) (liter):</label>
                <input type="text" class="form-control" id="total_cairan" name="total_cairan">
            </div>
            <div class="form-group mt-2">
                <label for="waktu">Waktu (jam):</label>
                <input type="text" class="form-control" id="waktu" name="waktu">
            </div>
            <div class="form-group mt-2">
                <label for="waktu">Berat badan:</label>
                <input type="text" class="form-control"  name="berat_badan">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Hitung IWL</button>
        </form>

        {{-- @if(isset($iwl))
        <div class="container mt-4">
            <h1>Hasil Perhitungan IWL (Influence of Water Loss)</h1>
            <p>Total Cairan Dalam Tubuh: {{ $cairan }} liter</p>
            <p>Waktu: {{ $waktu }} jam</p>
            <p>berat badan: {{ $berat }} Kg</p>
            <p>IWL (Influence of Water Loss): {{ number_format($iwl, 2) }} cc/jam</p>
            <p>Jika dalam 24 jam: {{ number_format($iwl * 24, 2) }} liter/jam</p>


        </div>
        @endif --}}
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
