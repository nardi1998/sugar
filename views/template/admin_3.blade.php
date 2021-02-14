<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Pendukung Keputusan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/Admin_3')}}/img/4.jpg">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/animate.css">
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_3')}}/css/modals.css">

    <script src="{{url('public/admin_3')}}/validator/assets/assets/js/lib/jquery-2.1.3.min.js"></script>
    <script src="{{url('public/admin_3')}}/validator/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="{{url('public/admin_3')}}/validator/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{url('public/admin_3')}}/validator/assets/assets/validator/validator.js"></script> 

     <link rel="stylesheet" href="{{url('public/admin_3')}}/css/alerts.css">    
</head>

<body class="greenlayout">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="{{url('public/admin_3')}}/img/message/lambang.png" style="width: 70px; height: 100px;" alt="" />
                    <h3 style="text-align: center; font-size: 15px;">Sistem Pendukung <br>Keputusan</h3>
                    <h4 style="text-align: center; font-size: 13px;">SAW</h4>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item"><a href="{{url('Master')}}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users fa-spin"></i> <span class="mini-dn">Master Data</span></a>
                           
                        </li>
                        
                        <li class="nav-item"><a href="{{url('Kriteria')}}"><i class="fa big-icon fa-users fa-spin"></i><span class="mini-dn"> Data Kriteria</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('Sub_kriteria')}}"><i class="fa big-icon fa-users fa-spin"></i> <span class="mini-dn"> Sub Kriteria</span></a>
                        </li>
                        <li class="nav-item"><a href="{{'Rating_Kecocokan'}}"><i class="fa big-icon fa-money fa-spin"></i> <span class="mini-dn">Bantuan Desa</span> <span class="indicator-right-menu mini-dn "></span></a>
                            <!-- <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{url('Rating_Kecocokan')}}" class="dropdown-item">Beras Miskin</a>
                                <a href="{{url('Rating_Kecocokan')}}" class="dropdown-item">Kartu Keluarga Sejahtera</a>
                                <a href="{{url('Rating_Kecocokan')}}" class="dropdown-item">Program Keluarga Harapan</a>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="{{url('admin')}}" class="nav-link">Dasboard</a>
                                        </li>
                                        
                                        <li class="nav-item dropdown">
                                            <a href="{{url('Surat')}}">Surat <span class="angle-down-topmenu"></span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="{{url('Statistik')}}">Statistik</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 Teknik Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
  
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/counterup/counterup-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/peity/jquery.peity.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/flot/jquery.flot.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/jquery.flot.spline.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/jquery.flot.pie.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/Chart.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/flot/flot-active.js"></script>
    <!-- map JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/map/raphael.min.js"></script>
    <script src="{{url('public/Admin_3')}}/js/map/jquery.mapael.js"></script>
    <script src="{{url('public/Admin_3')}}/js/map/france_departments.js"></script>
    <script src="{{url('public/Admin_3')}}/js/map/world_countries.js"></script>
    <script src="{{url('public/Admin_3')}}/js/map/usa_states.js"></script>
    <script src="{{url('public/Admin_3')}}/js/map/map-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/tableExport.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/data-table-active.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{url('public/Admin_3')}}/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{url('public/Admin_3')}}/js/main.js"></script>
    <script src="{{url('public')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- form validate JS
        ============================================ -->
    <script src="{{url('public/Menu')}}/js/jquery.form.min.js"></script>
    <script src="{{url('public/Menu')}}/js/jquery.validate.min.js"></script>
    <script src="{{url('public/Menu')}}/js/form-active.js"></script>

    <script src="{{url('public/Admin_3')}}/js/pdf/jquery.media.js"></script>
    <script src="{{url('public/Admin_3')}}/js/pdf/pdf-active.js"></script>
     <!-- modal JS
        ============================================ -->
    <script src="{{url('public/Menu')}}/js/modal-active.js"></script>
     <script src="{{url('public/Menu')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/Menu')}}/js/sparkline/sparkline-active.js"></script>
     @yield('footer')

</body>

</html> 