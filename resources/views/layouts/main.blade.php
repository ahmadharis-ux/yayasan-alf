<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{asset('assets/images/logo_yayasan.png')}}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- choose one -->

    <title>
      Al Falah &mdash; Yayasan Pesantren Islam
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav navbar-fixed-top">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start"><img src="{{asset('assets/images/logo.png')}}" alt="" width="50"><label for="" class="mx-4"> Al - Falah Dago </label></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end" >
              <li class="{{($title == "Home") ? 'active' : ''}} "><a href="/">Home</a></li>
              <li class="{{($title == "About") ? 'active' : ''}} "><a href="/tentang">About</a></li>
              <li class="{{($title == "Lembaga") ? 'active' : ''}} "><a href="/lembaga">Lembaga</a></li>
              <li class="{{($title == "Galeri & Kajian") ? 'active' : ''}}"><a href="/kajian">Galeri & Kajian</a></li>
              <li class="{{($title == "Berita") ? 'active' : ''}}"><a href="/berita">Berita</a></li>
              <li class="{{($title == "Kontak") ? 'active' : ''}} "><a href="/kontakus">Kontak</a></li>
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

    @yield('container')
    
    
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    
  </body>
</html>
