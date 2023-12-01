
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Isian Data Diagnosa</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>
        {{-- <header class="page-header page-header-light bg-gray-500 pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"></div>
                                <a class="navbar-brand" href="#">
                                    <img style="margin-right: 0.75rem" src="./assets/icon.png" height="20px;"
                                        class="d-inline d-md-none d-lg-none" alt="" />
                                    <img style="margin-right: 0.75rem" src="./assets/icon.png" height="40rem;"
                                        class="d-none d-md-block" alt="" />
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}
        <!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <!-- Wizard card example with navigation-->
    <div class="card">
        <div class="card-header border-bottom">
            <h3 class="text-center">DATA DEMOGRAFI CAREGIVER</h3>
        </div>
        <div class="card-body">
            <div class="py-5 py-xl-10">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">

                        <h5 class="card-title mb-4">Masukan data diri kamu bro</h5>
                        <form action="{{route('store.caregive')}}" id="form-2" method="post">
                            @csrf

                            <input type="hidden" name="form1" value="{{ $id->id }}">
                            <div class="mb-3">
                                <label class="small mb-1" for="nama">Nama / Inisial</label>
                                <input class="form-control mb-3" id="nama2" name="nama" type="text"
                                    placeholder="Masukkan nama..." aria-label="default input example" required>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="alamat">Alamat</label>
                                <input class="form-control mb-3" id="alamat2" name="alamat" type="text"
                                    placeholder="Masukkan alamat..." aria-label="default input example" required>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="pendidikan">Agama</label>
                                <select class="form-control" id="pendidikan" name="agama" required>
                                    <option value="">Pilih...</option>
                                    <option>Islam</option>
                                    <option>Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Khonghucu</option>
                                </select>
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-1" for="usia">Usia</label>
                                    <input class="form-control" id="usia" name="usia" type="text"
                                        placeholder="Masukan Usia" value="" required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-3">Jenis Kelamin</label> <br>
                                    <div class="form-check form-check-inline mb-3">
                                        <input class="form-check-input" name="jk" type="radio" id="inlineCheckbox1"
                                            value="laki-laki" required>
                                        <label class="form-check-label" for="inlineCheckbox1">Laki -
                                            laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jk" type="radio" id="inlineCheckbox2"
                                            value="perempuan" required>
                                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="pendidikan">Pendidikan Terakhir</label>
                                <select class="form-control" id="pendidikan" name="pendidikan" required>
                                    <option value="">Pilih..</option>
                                    <option>Tidak Sekolah</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>Perguruan Tinggi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="suku">Suku</label>
                                <select class="form-control" onchange="mySuku()" id="suku" name="suku" required>
                                    <option value="">Pilih...</option>
                                    <option>Sunda</option>
                                    <option>Chinese</option>
                                    <option>Batak</option>
                                    <option>Madura</option>
                                    <option>Padang</option>
                                    <option>Jawa</option>
                                    <option>Ambon</option>
                                    <option>Melayu</option>
                                    <option value="0">Lainnya ...</option>
                                </select>

                                <input class="form-control mb-3 mt-2 d-none" id="Fsuku" name="suku" type="text"
                                    placeholder="Sebut suku disini" aria-label="default input example" required>
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-3">Status Pekerjaan</label> <br>
                                    <div class="form-check form-check-inline mb-3">
                                        <input class="form-check-input" name="pekerjaan" type="radio" id="pekerjaan"
                                            value="Tidak Bekerja" required>
                                        <label class="form-check-label" for="pekerjaan">Tidak Bekerja</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="pekerjaan" type="radio" id="pekerjaan"
                                            value="1" required>
                                        <label class="form-check-label" for="pekerjaan">Bekerja</label>
                                        <br>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6 d-none" id="fPekerjaan">
                                    <input class="mt-3 form-control" id="fekerjaan" type="text" name="pekerjaan"
                                        placeholder="Sebutkan disini" value="" />
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3">
                                    <label class="small mb-3">Pendapatan</label> <br>
                                    <div class="form-check form-check-inline mb-3">
                                        <input class="form-check-input" name="pendapatan" type="radio" id="pendapatan1"
                                            value="Dibawah UMR (<
                                                Rp2,238,094/Bulan) " required>
                                        <label class="form-check-label" for="pendapatan1">Dibawah UMR (<
                                                Rp2,238,094/Bulan) </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="pendapatan" type="radio" id="pendapatan2"
                                            value="Diatas UMR (>
                                            Rp2,238,094/Bulan)" required>
                                        <label class="form-check-label" for="pendapatan2">Diatas UMR (>
                                            Rp2,238,094/Bulan)</label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3">
                                    <label class="small mb-1" for="hubungan">Status Hubungan Pasien dengan
                                        Caregiver</label>
                                    <select class="form-control" id="hubungan" onchange="myHubungan()" name="hubungan" required>
                                        <option value="">Pilih...</option>
                                        <option>Anak Kandung</option>
                                        <option>Menantu</option>
                                        <option>Suami</option>
                                        <option>Istri</option>
                                        <option value="0">Lainnya</option>
                                    </select>
                                    <input class="form-control mb-3 mt-2 d-none" id="fhubungan" name="hubungan" type="text"
                                    placeholder="Sebut hubungan disini" aria-label="default input example" required>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button class="btn btn-warning" id="back-to-form-1" type="submit">Sebelumnya</button>
                                {{-- <button class="btn btn-primary" id="show-form-2" type="submit">Selanjutnya</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var radios = document.querySelectorAll('input[type=radio][name="pekerjaan"]');
    var fpkj = document.getElementById("fPekerjaan");
    function changeHandler(event) {
        if ( this.value === 'Tidak Bekerja' ) {
            fpkj.classList.add("d-none");
            const input = document.getElementById("fekerjaan");
            input.value = "Tidak Bekerja";
        } else if ( this.value === '1' ) {
            fpkj.classList.remove("d-none");
            const input = document.getElementById("fekerjaan");
            input.value = "";
   }
}

Array.prototype.forEach.call(radios, function(radio) {
   radio.addEventListener('change', changeHandler);
});

function mySuku()
{
    var suku = document.getElementById("suku").value;
    const fsuku = document.getElementById("Fsuku");
    if(suku == 0)
    {
        fsuku.value = "";
        fsuku.classList.remove("d-none");
    }else
    {
        fsuku.value = suku;
        fsuku.classList.add("d-none");
    }
}

function myHubungan()
{
    var hubungan = document.getElementById("hubungan").value;
    const fhubungan = document.getElementById("fhubungan");
    if(hubungan == 0)
    {
        fhubungan.value = "";
        fhubungan.classList.remove("d-none");
    }else
    {
        fhubungan.value = suku;
        fhubungan.classList.add("d-none");
    }
}

</script>    </main>
    {{-- <footer class="footer-admin mt-auto footer-light">
        <div class="container-xl px-4">
            <div class="row">
                <div class="col-md-6 small">Copyright &copy; Aplikasi ASCC 2022</div>
                <div class="col-md-6 text-md-end small">
                    <a href="https://mudasuskses.com">MS Group</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer> --}}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
