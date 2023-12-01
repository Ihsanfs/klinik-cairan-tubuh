<div class="container-xl px-4 mt-n10">
    <!-- Wizard card example with navigation-->
    <div class="card mt-2 bg-secondary-subtle">
        <!-- ... -->
        <div class="card-body">
            <div class="py-5 py-xl-10">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">


                        <!-- Include Form 1 -->
                        @include('form.form-1')

                        <!-- Include Form 2 -->
                        <div id="form-2" style="display: none;">
                            @include('form.form-2')
                        </div>

                        {{-- <button class="btn btn-primary" id="show-form-2" type="submit">Selanjutnya</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript logic to handle form switching
    document.getElementById('show-form-2').addEventListener('click', function() {
        // Sembunyikan Form 1

        document.getElementById('form-1').style.display = 'none';

        // Tampilkan Form 2
        document.getElementById('form-2').style.display = 'block';
    });
    document.getElementById('back-to-form-1').addEventListener('click', function() {
    // Sembunyikan Form 2
    document.getElementById('form-2').style.display = 'none';

    // Tampilkan kembali Form 1
    document.getElementById('form-1').style.display = 'block';
});
</script>
