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
                    <div class="alert alert-success col-lg-12" role="alert">
                    {{session('success')}}
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="alert alert-warning col-lg-12" role="alert">
                    {{session('warning')}}
                    </div>
                @endif
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                  <a class="btn app-btn-secondary btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New</a>
                </div>
                <div class="container">
                    @foreach ($kontak as $item)    
                        <form action="/kontak/{{$item->id}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-sm mb-3">
                                    <label for="setting-input-1" class="form-label">Call</label>
                                    <input type="text" value="{{$item->call}}" class="form-control" name="call" id="setting-input-1" required>
                                </div>
                                <div class="col-sm mb-3">
                                    <label for="setting-input-1" class="form-label">WA</label>
                                    <input type="text" value="{{$item->wa}}"  class="form-control" name="wa" id="setting-input-1" required>
                                </div>
                                <div class="col-sm mb-3">
                                    <label for="setting-input-1" class="form-label">Email</label>
                                    <input type="text" value="{{$item->email}}"  class="form-control" name="email" id="setting-input-1" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Alamat</label>
                                <input type="text" value="{{$item->alamat}}"  class="form-control" name="alamat" id="setting-input-1" required>
                            </div>
                            <hr>
                            <div class="col-md-2 mb-3 d-flex ms-auto">
                                <button type="submit" class="form-control app-btn-secondary btn-outline-success">Save Changes</button>
                            </div>
                        </form>
                    @endforeach
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
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kontak modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/kontak" method="post" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm mb-3">
                            <label for="setting-input-1" class="form-label">Call</label>
                            <input type="text" class="form-control" name="call" id="setting-input-1" required>
                        </div>
                        <div class="col-sm mb-3">
                            <label for="setting-input-1" class="form-label">WA</label>
                            <input type="text" class="form-control" name="wa" id="setting-input-1" required>
                        </div>
                        <div class="col-sm mb-3">
                            <label for="setting-input-1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="setting-input-1" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="setting-input-1" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Save</button>
                </div>
            </form>
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