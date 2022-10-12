@extends('layouts.main')
@section('container')

  <div
  class="hero page-inner overlay"
  style="background-image: url('{{asset('storage/'.$berita->gambar)}}')"
>
 
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up"></h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="h3 breadcrumb-item"><a href="index.html">{{$berita->judul}}</a></li>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="h2 my-3" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{$berita->judul}}</h2>
      <div class="specs d-flex">
        <span class="d-block d-flex align-items-center me-3">
          <span class="icon-calendar me-2"></span>
          <span class="caption">{{date("d F Y", strtotime($berita->created_at))}}</span>
        </span>
        <span class="d-block d-flex align-items-center me-3">
          <span class="icon-eye me-2"></span>
          <span class="caption">{{$berita->read + 1}} views</span>
        </span>
        <span class="d-block d-flex align-items-center me-3">
          <span class="icon-user me-2"></span>
          <span class="caption">{{$berita->penulis}}</span>
        </span>
      </div>
      <hr>
      <p style="font-size: 100; color:black">
        {!!$berita->body!!}
      </p>
      <span class="d-block d-flex align-items-center me-3">
        <span class="icon-thumbs-o-up me-2"></span>
        <span class="caption">2</span>
      </span>
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
