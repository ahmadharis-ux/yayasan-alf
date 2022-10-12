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
              <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                  <a class="btn app-btn-secondary btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New</a>
                </div>
                @if (session()->has('SuccessAlert'))
                  <div role="alert" class="alert alert-success">
                  {{session('SuccessAlert')}}
                  </div>
                @endif
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
                                      <th class="cell">Kategori</th>
                                      <th class="cell">Image</th>
                                      <th class="cell">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($hero as $item)
                                        <tr>
                                          <td class="cell">{{$loop->iteration}}</td>
                                          <td class="cell">{{$item->status}}</td>
                                          <td class="cell"><img src="{{asset('storage/'. $item->gambar)}}" alt="" width="150rem"></td>
                                          <td class="cell text-center">
                                            <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i></a>
                                            <a class="btn btn-link text-dark mb-0" href="/banner/{{$item->id}}/edit"><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                                            <a class="btn btn-link text-primary text-gradient mb-0" href="javascript:;"><i class="fas fa-eye text-primary me-2"></i></a>
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
            <h5 class="modal-title" id="exampleModalLabel">Hero modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/banner" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="setting-input-1" class="form-label">Banner Untuk</label>
                                <select type="text" name="status" class="form-control @error('status') is-invalid @enderror" id="setting-input-1" required value="{{old('status')}}">
                                    <option value="about">About</option>
                                    <option value="landing">Landing Page</option>
                                    <option value="lembaga">Lembaga</option>
                                </select>
                                @error('status')
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
@endsection