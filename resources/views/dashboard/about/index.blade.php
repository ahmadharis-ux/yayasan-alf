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
                  <div class="alert alert-success col-lg" role="alert">
                    {{session('success')}}
                  </div>
              @endif
              @if (session()->has('warning'))
                  <div class="alert alert-warning col-lg" role="alert">
                    {{session('warning')}}
                  </div>
              @endif
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
              
                <div class="container">
                  @foreach ($about as $item)    
                  <form action="/about/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-10 mb-3">
                            <label for="setting-input-1" class="form-label">Visi</label>
                            <input type="text" class="form-control" value="{{$item->visi}}" name="visi" id="setting-input-1" required>
                          </div>
                          <div class="col-md-2 mb-3">
                            <label for="setting-input-1" class="form-label">Gambar</label>
                            <input type="file" class="form-control" value="{{$item->gambar}}" name="gambar" id="setting-input-1" required>
                          </div>
                        </div>
                          
                          <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Misi</label>
                            <input id="misi" type="hidden" value="{!!$item->misi!!}" name="misi">
                            <trix-editor input="misi"></trix-editor>
                          </div>
                          <div class="mb-3">
                              <label for="body" class="form-label">Deskripsi</label>
                              <textarea id="konten" class="form-control" name="body" rows="10" cols="50">{!!$item->body!!}</textarea>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary text-white">Save</button>
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
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">About modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/about" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="setting-input-1" class="form-label">Visi</label>
                                <input type="text" name="visi" class="form-control @error('visi') is-invalid @enderror" id="setting-input-1" required value="{{old('visi')}}">
                                @error('visi')
                                 <div class="invalid-feedback">
                                  {{$message}}  
                                 </div>   
                                @enderror
                            </div>
                            <div class="col-sm">
                                <label for="setting-input-1" class="form-label">Gambar</label>
                                <input name="gambar" type="file" class="form-control" id="setting-input-1" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-2" class="form-label">Misi</label>
                        <input id="misi" type="hidden" name="misi">
                        <trix-editor input="misi"></trix-editor>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body about</label>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor>
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