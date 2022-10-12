@extends('layouts.main')
@section('container')
      <?php
        function get_CRUL($url){
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL,$url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          $result = curl_exec($curl);
          curl_close($curl);
          

          return json_decode($result, true);
        }

        $result = get_CRUL('https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UC4mF-YVq5lVFlk4ykuJal3Q&key=AIzaSyBEKWjXjyI_hV5e3N3LhdO3j74Xo_6lDrw');
        
          $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

          //latest
          $urlVideo = get_CRUL('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBEKWjXjyI_hV5e3N3LhdO3j74Xo_6lDrw&channelId=UC4mF-YVq5lVFlk4ykuJal3Q&maxResults=9&order=date&part=snippet');
          $vids = [];
          foreach ($urlVideo['items'] as $vid) {
            $vids[]=$vid['id']['videoId'];
          }
        
      ?>
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
    <div class="container mt-4">
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
    <div class="section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          @foreach ($vids as $item) 
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature mb-4">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/<?= $item?>?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          @endforeach
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
