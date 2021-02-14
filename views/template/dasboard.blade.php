<!doctype html>
<html class="no-js" lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Pendukung Keputusan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/Menu')}}/img/message/4.jpg">
    <!-- Google Fonts 
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/animate.css">
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/form/all-type-forms.css">
    <!-- switcher CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/switcher/color-switcher.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
        ============================================ -->
   
</head>

<body style="background-color: #66CDAA;">
    
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
               <!--  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="admin-logo">
                        <a><img src="{{url('public/Menu')}}/img/message/4.jpg" alt="" />
                        </a>
                    </div>
                </div> -->
                <div class="col-lg-0 col-md-0 col-sm-0 col-xs-0">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li class="nav-item dropdown">
                                <a href="{{url('home')}}">Dasboard <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-home-admin author-log-ic"></i></span></a> 
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> Statistika <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-home-admin author-log-ic"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="{{url('Pekerjaan')}}" class="dropdown-item">Pekerjaan</a>
                                    <a href="{{url('Pendidikan')}}" class="dropdown-item">Pendidikan</a>
                                    <a href="{{url('JK')}}" class="dropdown-item">Jenis Kelamin</a>
                                    <a href="{{url('Gol_Darah')}}" class="dropdown-item">Golongan Darah</a>
                                    <a href="{{url('Agama')}}" class="dropdown-item">Agama</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> Pelayanan <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-user-rounded author-log-ic"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="#" class="dropdown-item">Surat Domisili Pelajar</a>
                                    <a href="#" class="dropdown-item">Surat Keterangan Usaha</a>
                                    <a href="#" class="dropdown-item">Surat Keterangan Mati</a>
                                    <a href="#" class="dropdown-item">Surat Keterangan Pindah</a>
                                    <a href="#" class="dropdown-item">Surat Kurang Mampu</a>
                                    <a href="#" class="dropdown-item">Surat SKCK</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{url('Data_Master')}}"> Data Penduduk <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-user-rounded author-log-ic"></i></span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> Bantuan Desa <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-user-rounded author-log-ic"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="{{url('Data_Bantuan')}}" class="dropdown-item">Beras Miskin</a>
                                    <a href="{{url('Data_Bantuan')}}" class="dropdown-item">Kartu Keluarga Sejahtera</a>
                                    <a href="{{url('Data_Bantuan')}}" class="dropdown-item">Bantuan Langsung Tunai</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> Lembaga <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-user-rounded author-log-ic"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="#" class="dropdown-item">Peraturan Desa</a>
                                    <a href="#" class="dropdown-item">Pemerintahan Desa</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{url('login')}}" role="button" aria-expanded="false"> Login <span class="angle-down-topmenu"><i class="adminpro-icon adminpro-user-rounded author-log-ic"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- stockprice, feed area start-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="">
            <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
            </div>
        </div>
    </div>

    <br>
   
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- jquery
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/counterup/counterup-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/peity/jquery.peity.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/flot/jquery.flot.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/jquery.flot.spline.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/jquery.flot.pie.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/Chart.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/flot/flot-active.js"></script>
    <!-- map JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/map/raphael.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/map/jquery.mapael.js"></script>
    <script src="{{url('public/Admin_2')}}/js/map/france_departments.js"></script>
    <script src="{{url('public/Admin_2')}}/js/map/world_countries.js"></script>
    <script src="{{url('public/Admin_2')}}/js/map/usa_states.js"></script>
    <script src="{{url('public/Admin_2')}}/js/map/map-active.js"></script>
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
    <!-- switcher JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/switcher/styleswitch.js"></script>
    <script src="{{url('public/Admin_2')}}/js/switcher/switch-active.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/main.js"></script>

     <!-- Charts JS
        ============================================ -->
    <script src="{{url('public/Admin_2')}}/js/charts/Chart.js"></script>
    <script src="{{url('public/Admin_2')}}/js/charts/rounded-chart.js"></script>

    <script src="{{url('public/Admin_2')}}/js/c3-charts/d3.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/c3-charts/c3.min.js"></script>
    <script src="{{url('public/Admin_2')}}/js/c3-charts/c3-active.js"></script>
    
</body>

</html>