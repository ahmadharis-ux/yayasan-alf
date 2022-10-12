@extends('dashboard.layouts.main')
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
           <!--//row-->
           <div class="row g-4 mb-4">
            <div class="col-12 col-lg">
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
                <div class="container">
                  <label for="" class="h3">Hallo, selamat datang di halaman admin website yayasan Al Falah dago Bandung</label>
                  <div class="row mb-4">
                    <div class="col-md">
                      <div class="card mt-3">
                        <h5 class="card-header">Pengunjung</h5>
                        <div class="card-body">
                          <h5 class="card-title">{{$berita}} Berita</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="card mt-3">
                        <h5 class="card-header">Total Berita</h5>
                        <div class="card-body">
                          <h5 class="card-title">{{$pengunjung}} Pengunjung</h5>
                        </div>
                      </div>
                    </div>
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

      
       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
       </div>
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
    

    <script src="https://code.highcharts.com/highcharts.js"></script>
    
    @endsection