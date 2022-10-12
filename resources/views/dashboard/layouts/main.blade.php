<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin - AMDEP</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Admin - AMDEP" />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="front/assets/images/logoamdep.png" />

    <!-- FontAwesome JS-->
    <script defer src="front/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="front/assets/css/portal.css" />

    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="css/trix.css">
    <script type="text/javascript" src="js/trix.js"></script>

    {{-- Highcharts --}}
    
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  </head>

  <body class="app">
    <header class="app-header fixed-top">
      <div class="app-header-inner">
        <div class="container-fluid py-2">
          <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                    <title>Menu</title>
                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                  </svg>
                </a>
              </div>
              <!--//col-->
              <div class="search-mobile-trigger d-sm-none col">
                <i class="search-mobile-trigger-icon fas fa-search"></i>
              </div>
              <!--//col-->
              <!--//app-search-box-->

              <div class="app-utilities col-auto">

                <div class="app-utility-item app-user-dropdown dropdown">
                  <a class="dropdown-toggle mr-2" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{auth()->user()->name}}</a>
                  <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                    <li><a class="dropdown-item" href="account.html">Account</a></li>
                    <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>  
                      <form  action="/logout" method="POST">
                        @csrf
                        <button class="decoration-none border-0" type="submit">
                          Logout 
                        </button>
                      </form>
                    </li>
                  </ul>
                </div>
                <!--//app-user-dropdown-->
              </div>
              <!--//app-utilities-->
            </div>
            <!--//row-->
          </div>
          <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-header-inner-->
      <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
          <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
          <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2 mr-2" src="front/assets/images/logoamdep.png" alt="logo" /><span class="logo-text">AMDEP</span></a>
          </div>
          <!--//app-branding-->
          @include('dashboard.layouts.navbar')
@yield('section')

  

    <!-- Javascript -->
    <script src="front/assets/plugins/popper.min.js"></script>
    <script src="front/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="front/assets/plugins/chart.js/chart.min.js"></script>
    <script src="front/assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="front/assets/js/app.js"></script>
  </body>
</html>
