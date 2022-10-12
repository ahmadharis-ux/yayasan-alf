@extends('layouts.main')
@section('container')
<div class="hero">
  <div class="hero-slide">
    {{-- <div  class="img overlay" style="background-image: url('https://source.unsplash.com/1920x1536?student')">
      <div class="d-flex justify-content-center flex-column mb-3 fixed-bottom" style="height: 200px;">
     <p>kasdlksaj</p>
      </div>
    </div> --}}
    @foreach ($banner as $item)
      <div class="img" style="background-image: url('{{asset('storage/'. $item->gambar)}}')">
      </div>
      
    @endforeach
 
    {{-- @foreach ($banner as $item)
    <img class="img overlay" src="{{asset('storage/'. $item->gambar)}}" alt="">
    @endforeach --}}
    {{-- <div  class="img overlay" style="background-image: url('https://source.unsplash.com/1920x1536?student')"> </div>
    <div  class="img overlay" style="background-image: url('https://source.unsplash.com/1920x1536?mosque')"> </div>
    <div  class="img overlay" style="background-image: url('https://source.unsplash.com/1920x1536?teknik')"> </div> --}}
  </div>

  {{-- <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center">
        <h1 class="heading" data-aos="fade-up">
         Selamat datang di Yayasan Al Falah dago bandung
        </h1>
      </div>
    </div>
  </div> --}}
</div>



{{-- <div class="align-self-end">
  <nav class="site-nav">
    <div class="align-self-end mt-2">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="index.html" class="logo m-0 float-start">Al - Falah</a>
  
          <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end" >
            <li class="{{($title == "Home") ? 'active' : ''}} "><a href="/">Home</a></li>
            <li class="{{($title == "About") ? 'active' : ''}} "><a href="/about">About</a></li>
            <li class="{{($title == "Lembaga") ? 'active' : ''}} "><a href="/lembaga">Lembaga</a></li>
            <li class="{{($title == "Kajian") ? 'active' : ''}}"><a href="/kajian">Galeri & Kajian</a></li>
            <li class="{{($title == "Berita") ? 'active' : ''}}"><a href="/berita">Berita</a></li>
            <li class="{{($title == "Kome") ? 'active' : ''}} "><a href="contact.html">Kontak</a></li>
          </ul>
  
          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
          </a>
        </div>
      </div>
    </div>
  </nav>
</div> --}}

 
{{-- simpanan --}}
     {{-- <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Popular Properties
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>$1,291,000</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                      <span class="city d-block mb-3">California, USA</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                      </div>

                      <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

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
    </div> --}}

    {{-- <section class="features-1">
      <div class="container">
        <div class="row">
          
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              @foreach ($banner as $item)
              <img src="{{asset('storage/'. $item->gambar)}}" alt="" width="150rem">
              @endforeach
              <h3 class="mb-3">Our Properties</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- /.site-footer -->

    <!-- Preloader -->
    {{-- <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>  --}}
@endsection


