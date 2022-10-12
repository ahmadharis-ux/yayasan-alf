@extends('layouts.main')
@section('container')

    <div class="main" >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up"></h1>

            <nav  aria-label="breadcrumb"  data-aos="fade-up"  data-aos-delay="200"   >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-white-50"  aria-current="page">
                {{$title}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4 mb-0">
        <div class="card text-center border-0">
            <div class="card-body">
                <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item text-black-50"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-black-50"  aria-current="page">
                    {{$title}}
                    </li>
                  </ol>
              <h5 class="card-title">{{$title}}</h5>
            </div>
          </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($berita as $item)
        <div class="col-md mb-2">
          <div class="card" style="width: 25rem;">
            <img src="{{asset('storage/'.$item->gambar)}}" class="card-img-top" alt="..." height="200rem">
            <div class="card-body">
              <div class="specs d-flex">
                <span class="d-block d-flex align-items-center me-3">
                  <span class="icon-calendar me-2"></span>
                  <span class="caption">{{date("d F Y", strtotime($item->created_at))}}</span>
                </span>
                <span class="d-block d-flex align-items-center me-3">
                  <span class="icon-eye me-2"></span>
                  <span class="caption">{{$item->read}} views</span>
                </span>
              </div>
            
              <h4 class="card-text">{{$item->judul}}</h4>
              <p><a href="/berita/{{$item->slug}}" target="_blank" class="learn-more">Read more</a></p>
            </div>
          </div>
        </div>
        @endforeach
      
      </div>
    </div>
      <hr>
  

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
