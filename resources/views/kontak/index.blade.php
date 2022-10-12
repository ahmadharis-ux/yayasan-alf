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
    <hr>
    <div class="container">
      @foreach ($kontak as $item)    
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                    <span class="icon-phone me-2"></span>
                  <p>
                    Call: {{$item->call}}<br>
                    
                    WA : <a href="https://api.whatsapp.com/send?phone=081220184025&text=Assalamua'laikum=&data=" target="_blank"> 
                      {{$item->wa}}</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                    <span class="icon-envelope me-2"></span>
                  <p>
                    Email: 
                    <a href="mailto:ponpesalfago@gmail.com "> {{$item->email}} </a> <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                    <span class="icon-map-marker me-2"></span>
                  <p>
                    <p>{{$item->alamat}}</p>
                  </p>
                </div>
              </div>
            </div>
        </div>
      @endforeach
        <div class="map-section">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.2215771049582!2d107.61282807352373!3d-6.884446229713554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7869d84e2cfc98d9!2sYayasan%20Islam%20Al%20Falah!5e0!3m2!1sid!2sid!4v1593162841304!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
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
