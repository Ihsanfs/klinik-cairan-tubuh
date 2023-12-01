<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnosa Suhu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Perhitungan kenaikan suhu</h1>
        <form method="POST" action="{{ route('suhu.diagnosa') }}">
            @csrf
            <input type="hidden" value="{{$id->id}}" name="form2">
            {{-- <h1>{{$id->id}}</h1> --}}
            <div class="form-group">
                <label for="cairan_masuk">jumlah cairan masuk : </label>


                <input type="text" class="form-control"  name="cairan_masuk">
            </div>
            <div class="form-group mt-2">
                <label for="suhu">jumlah kenaikan suhu</label>
                <input type="text" class="form-control" id="waktu" name="suhu">
            </div>
            <div class="form-group mt-2">
                <label for="iwl_normal">IWL normal</label>
                <input type="text" class="form-control"  name="iwl_normal">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Hitung IWL</button>
        </form>

        {{-- @if(isset($iwl))
        <div class="container mt-4">
            <h1>Hasil Perhitungan IWL Kenaikan Suhu</h1>
            <p>Jumlah Cairan Masuk : {{ number_format($cairan_masuk,2) }}</p>
            <p>Jumlah Kenaikan Suhu : {{ $suhu}}°</p>
            <p>IWL Normal : {{ number_format($iwl_normal, 2) }}/jam </p>
            <p>Total IWL : {{ number_format($iwl, 2) }}/jam </p>

        </div>
        @endif --}}
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
