<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pertanyaan</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="card bg-secondary">
                <div class="card-body">
                    {{-- <h1>{{$id->id}}</h1> --}}
                    <h2 class="text-center"><span class="badge bg-light text-dark">Pertanyaan</span></h2>
                    <form action="{{route('store.pertanyaan')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$id->id}}" name="id_pertanyaan">
                @foreach ($pertanyaan as $index=> $item)
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body mt-2">
                            <h3> {{$item->id}}. {{$item->pertanyaan}}</h3>

                            <input type="radio" name="jawaban[{{ $index }}]" value="{{ $item->jawaban_a }}">
                             <label for="">{{ $item->jawaban_a }}</label>
                            <br>

                            <input type="radio" name="jawaban[{{ $index }}]" value="{{ $item->jawaban_b }}">
                            <label for="">{{ $item->jawaban_b }}</label>
                            <br>
                        </div>
                    </div>
                </div>




                @endforeach
                <input type="submit" class="mb-9 ml-auto mt-2 btn btn-warning">
            </form>
            </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
