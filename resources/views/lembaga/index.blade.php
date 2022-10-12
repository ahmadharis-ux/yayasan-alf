@extends('layouts.main')
@section('container')
@foreach ($banner as $item)
  <div
  class="hero page-inner overlay"
  style="background-image: url('{{asset('storage/'. $item->gambar)}}')"
>
@endforeach
 
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">{{$title}}</h1>

            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                {{$title}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="property-slider-wrap">
                <div class="property-slider">
                  <!-- .item -->
                  @foreach ($lembaga as $item)    
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                      <div class="box-feature mb-4">
                        <img src="{{asset('storage/'.$item->gambar)}}" alt="" width="100" height="100"/>
                        <h3 class="text-black mb-3 font-weight-bold">{{$item->nama}}</h3>
                        <p class="text-black-50">
                          {!!$item->desk!!}
                        </p>
                        <p><a href="{{$item->link}}" target="_blank" class="learn-more">Read more</a></p>
                      </div>
                    </div>
                  @endforeach

                </div>

                <div
                  id="property-nav"
                  class="controls"
                  tabindex="0"
                  aria-label="Carousel Navigation"
                >
                  <span
                    class="prev"
                    data-controls="prev"
                    aria-controls="property"
                    tabindex="-1"
                    >Prev</span
                  >
                  <span
                    class="next"
                    data-controls="next"
                    aria-controls="property"
                    tabindex="-1"
                    >Next</span
                  >
                </div>
              </div>
            </div>
          </div>
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
