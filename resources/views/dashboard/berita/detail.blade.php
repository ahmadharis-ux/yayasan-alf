@extends('dashboard.partials.main')
@section('section')

          <!--//app-sidepanel-footer-->
        </div>
        <!--//sidepanel-inner-->
      </div>
      <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="app-page-title">{{$title}}</h1>
          <!--//app-card-->
          <div class="row g-4 mb-4">
            <div class="col-12 col-lg">
              @if (session()->has('success'))
                  <div class="alert alert-success col-lg-10" role="alert">
                    {{session('success')}}
                  </div>
              @endif
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
                <div class="card border-0">
                    <img src="{{asset('storage/'.$berita->gambar)}}" class="card-img-top overlay" alt="{{$berita->judul}}">
                    <div class="card-body">
                      <h2 class="h2 text-center" >{{$berita->judul}}</h2>
                      <br>
                      <div class="specs d-flex">
                        <span class="d-block d-flex align-items-center me-3">
                          <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                          <span class="caption"> {{date("d F Y", strtotime($berita->created_at))}}</span>
                        </span>
                        <span class="d-block d-flex align-items-center me-3">
                          <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                          <span class="caption">2 Views</span>
                        </span>
                        <span class="d-block d-flex align-items-center me-3">
                          <i class="fa fa-pen mr-2" aria-hidden="true"></i>
                          <span class="caption">{{$berita->penulis}}</span>
                        </span>
                      </div>
                      <hr>
                      <p class="card-text">{!!$berita->body!!}</p>
                    </div>
                </div>
                <!--//app-card-footer-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
           </div>
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-content-->
          
      <footer class="app-footer">
        <div class="container text-center py-3">
          <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
          <small class="copyright"
            >Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small
          >
        </div>
      </footer>
      <!--//app-footer-->
    </div>
    <!--//app-wrapper-->

    <script>
      document.addEventListener('trix-file-accpet', function(e){
        e.preventDefault();
      })
    </script>
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script>
        
        var konten = document.getElementById("konten");
            CKEDITOR.replace(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    
    </script>
@endsection