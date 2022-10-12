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
              @if (session()->has('warning'))
                  <div class="alert alert-warning col-lg" role="alert">
                    {{session('warning')}}
                  </div>
              @endif
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
                <div class="container">
                    <form action="/banner/{{$banner->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                          <div class="modal-body">
                              <div class="mb-3">
                                  <div class="row">
                                      <div class="col-sm">
                                          <label for="setting-input-1" class="form-label">Kategori</label>
                                          <input type="text" name="status" value="{{$banner->status}}" class="form-control" id="setting-input-1" required>
                                      </div>
                                      <div class="col-sm">
                                          <label for="setting-input-1" class="form-label">Gambar</label>
                                          <input type="file" name="gambar" value="{{$banner->gambar}}" class="form-control" id="setting-input-1" required>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary text-white">Save</button>
                          </div>
                    </form>
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