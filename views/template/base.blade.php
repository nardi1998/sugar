<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Desa Kalinilam</title>

    <!-- Favicon -->
    <link rel="icon" href="{{url('public/base')}}/img/core-img/lambang.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{url('public/base')}}/style.css">

    
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('public/Admin_2')}}/css/data-table/bootstrap-editable.css">

   


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="" class="nav-brand"><img src="{{url('public/base')}}/img/core-img/lambang.png" style="width: 70px; height: 70px;"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            

                            <!-- Nav Start -->
                            <div class="classynav" style="margin-left: 300px;">
                                <ul>
                                    <li class="active"><a href="{{url('home')}}">Dashboard</a></li>
                                    <li><a href="{{url('Data_Surat')}}">Pelayanan</a></li>
                                    
                                    <li><a href="{{url('Data_Master')}}">Data Penduduk</a></li>
                                    <li><a href="{{url('Data_Bantuan')}}">Data Bantuan</a></li>
                                    <li><a href="{{url('HomeStatistik')}}">Statistik</a></li>
                                    <!-- <li><a>Statistik</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Pekerjaan</a></li>
                                            <li><a href="archive.html">Pendidikan</a></li>
                                            <li><a href="index.html">Pemerintah Desa</a></li>
                                            <li><a href="archive.html">Peraturan Desa</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div><br><br>

                        <div class="top-meta-data d-flex align-items-center">
                            <a href="{{url('login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true">  Login</i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
        <div class="col-lg-12 col-md-12 mb-12 mb-lg-0">
            <div class="posts-content mt-30 mb-30 p-30 box-shadow">
                <div class="trending-now-posts mb-30">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">

        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{url('public/base')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{url('public/base')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{url('public/base')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{url('public/base')}}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{url('public/base')}}/js/active.js"></script>

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
    @yield('footer')
    
</body>

</html>