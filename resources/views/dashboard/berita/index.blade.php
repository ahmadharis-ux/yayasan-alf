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
                <div class="app-card-footer p-4 mt-auto">
                  <a class="btn app-btn-secondary btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New</a>
                </div>
                <div class="container">
                    <div class="tab-content" id="orders-table-tab-content">
                        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                          <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                              <div class="table-responsive">
                                <table class="table table-striped table-bordered mb-2 text-left" id="example">
                                  <thead>
                                    <tr>
                                      <th class="cell">#</th>
                                      <th class="cell">Judul</th>
                                      <th class="cell">Penulis</th>
                                      <th class="cell">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($berita as $item)    
                                      <tr>
                                        <td class="cell">{{$loop->iteration}}</td>
                                        <td class="cell"><span class="truncate">{{$item->judul}}</span></td>
                                        <td class="cell">{{$item->penulis}}</td>
                                        <td class="cell">
                                          <a class="btn btn-link text-danger" href="javascript:;"><i class="far fa-trash-alt "></i></a>
                                          <a class="btn btn-link text-dark" href="/news/{{$item->id}}/edit"><i class="fas fa-pencil-alt text-dark "></i></a>
                                          <a class="btn btn-link text-primary" href="/news/{{$item->id}}"><i class="fas fa-eye text-primary "></i></a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                              <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                          </div>
                          <!--//app-pagination-->
                        </div>
                        <!--//tab-pane-->
                        <!--//tab-pane-->
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
            <h5 class="modal-title" id="exampleModalLabel">Berita modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/news" method="post" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="setting-input-1" class="form-label">Judul</label>
                      <input type="text" class="form-control" name="judul" id="setting-input-1" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="setting-input-1" class="form-label">Penulis</label>
                                <input type="text" name="penulis" class="form-control" id="setting-input-1" required>
                            </div>
                            <div class="col-sm">
                                <label for="setting-input-1" class="form-label">Gambar</label>
                                <img src="" class="img-preview img-fluid" alt="">
                                <input type="file" name="gambar" id="gambar" class="form-control" id="setting-input-1" required onchange="previewImage()">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="body" class="form-label">Deskripsi</label>
                        <textarea id="konten" class="form-control" name="body" rows="10" cols="50"></textarea>
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
    <script>
      function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader  = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);
        
        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result
        }

      }
    </script>
@endsection