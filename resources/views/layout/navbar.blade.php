<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto" >
        <img src="images/logo.png" alt="" class="img-fluid">

    </h1>

      <!-- Uncomment below if you prefer to use an image logo -->
   <a href="index.html" class="logo mr-auto"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="{{route('beranda')}}#tentang">Tentang kami</a></li>
          <li><a href="{{route('beranda')}}#cairan">Cairan Tubuh</a></li>
          <li><a href="{{route('beranda')}}#caregiver">Caregiver</a></li>
          <li><a href="{{route('video')}}">Video</a></li>


          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Application Mu Body Fluid
            (MBF)</h1>
          {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
          <div class="d-lg-flex">
            <a href="{{route('form.diagnosa')}}" class="btn-get-started scrollto" ><b>Diagnosa Sekarang</b></a>
            <div class="bubble"></div>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/dk.png" class="img-fluid animated" alt="Gambar Anda" style="width: 100%; height: auto;">
          </div>

      </div>
    </div>

  </section><!-- End Hero -->
