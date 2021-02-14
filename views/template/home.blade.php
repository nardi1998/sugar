<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desa Kalinilam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{'public/home'}}/fonts/icomoon/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('public/Admin_3')}}/img/4.jpg">

  <link rel="stylesheet" href="{{'public/home'}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{'public/home'}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{'public/home'}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{'public/home'}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{'public/home'}}/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="{{'public/home'}}/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="{{'public/home'}}/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="{{'public/home'}}/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="{{'public/home'}}/css/aos.css">
  <link href="{{'public/home'}}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{'public/home'}}/css/style.css">

  <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-editable.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            
          </div>
          <div class="col-lg-3 text-right">
            <a href="{{('login')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{url('Surat/indexhome')}}" class="nav-link text-left">Pelayanan</a>
                </li>
                <li>
                  <a href="{{url('Data_Master')}}" class="nav-link text-left">Data Penduduk</a>
                </li>
                <li>
                  <a href="{{url('Data_Bantuan')}}" class="nav-link text-left">Bantuan Desa</a>
                </li>
                <li class="has-children">
                  <a class="nav-link text-left">Lembaga</a>
                  <ul class="dropdown">
                    <li><a href="teachers.html">Pemerintah Desa</a></li>
                    <li><a href="about.html">Peraturan Desa</a></li>
                  </ul>
                </li>
              </ul>
              </nav>
          </div>         
        </div>
      </div>

    </header><br><br><br>
    <div class="section-bg style-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 mb-12 mb-lg-0">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
     
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{'public/home'}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{'public/home'}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{'public/home'}}/js/jquery-ui.js"></script>
  <script src="{{'public/home'}}/js/popper.min.js"></script>
  <script src="{{'public/home'}}/js/bootstrap.min.js"></script>
  <script src="{{'public/home'}}/js/owl.carousel.min.js"></script>
  <script src="{{'public/home'}}/js/jquery.stellar.min.js"></script>
  <script src="{{'public/home'}}/js/jquery.countdown.min.js"></script>
  <script src="{{'public/home'}}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{'public/home'}}/js/jquery.easing.1.3.js"></script>
  <script src="{{'public/home'}}/js/aos.js"></script>
  <script src="{{'public/home'}}/js/jquery.fancybox.min.js"></script>
  <script src="{{'public/home'}}/js/jquery.sticky.js"></script>
  <script src="{{'public/home'}}/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="{{'public/home'}}/js/main.js"></script>

   <!-- data table JS
        ============================================ --> 
    <script src="{{url('public/Admin_2')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/tableExport.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/data-table-active.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{url('public/Admin_2')}}/js/data-table/bootstrap-table-export.js"></script>

</body>

</html>