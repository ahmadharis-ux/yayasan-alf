@extends('layouts.main')
@section('container')

    @foreach ($banner as $item)
    <div class="hero page-inner overlay" style="background-image: url('{{asset('storage/'. $item->gambar)}}')">
    @endforeach
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center mt-5">
          <h1 class="heading" data-aos="fade-up">About</h1>
    
          <nav
            aria-label="breadcrumb"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <ol class="breadcrumb text-center justify-content-center">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li
                class="breadcrumb-item active text-white-50"
                aria-current="page"
              >
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    </div>
    
    <div class="section">
        <div class="container">
          @foreach ($tentang as $item)
            <div class="row text-left mb-5">
              <div class="col-12">
              <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
              </div>
              <div class="col-lg">
              <p class="text-black-50">
                 {!!$item->body!!}
              </p>
            </div>
            <div class="row">
                <div class=" col-sm d-flex feature-h">
                    <span class="wrap-icon me-3">
                      <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                      <h3 class="heading">Visi</h3>
                      <p class="text-black-50">
                        {{$item->visi}}
                      </p>
                    </div>
                </div>
                <div class="col-sm d-flex feature-h">
                    <span class="wrap-icon me-3">
                      <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                      <h3 class="heading">Misi</h3>
                      <p class="text-black-50">
                        {!!$item->misi!!}
                      </p>
                    </div>
                </div>
            </div>
          @endforeach
          
           
        </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">

        <div class="row">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="#">ahmad_riss</a>
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

@endsection

