<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="/assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="/assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="/assets/plugins/summernote/dist/summernote.css" rel="stylesheet">
    <link href="/assets/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               
                <div class="header-right">
                    <ul class="clearfix">
                        
                        
                       
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="{{route('logout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-home"></i><span class="nav-text">Tentang Kami</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('visi-misi.index')}}"><i class="fa fa-book"></i>Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('bph.index')}}" aria-expanded="false">
                            <i class="fa fa-users"></i><span class="nav-text">Badan Pengurus Harian</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users"></i><span class="nav-text">Divisi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('agama.index')}}">Agama</a></li>
                            <li><a href="{{route('dana_usaha.index')}}">Dana Usaha</a></li>
                            <li><a href="{{route('humas.index')}}">Hubungan Masyarakat</a></li>
                            <li><a href="{{route('kesenian.index')}}">Kesenian</a></li>
                            <li><a href="{{route('olahraga.index')}}">Olahraga</a></li>
                            <li><a href="{{route('organisasi.index')}}">Organisasi</a></li>
                            <li><a href="{{route('pendidikan.index')}}">Pendidikan</a></li>
                            <li><a href="{{route('sarpras.index')}}">Sarana & Prasarana</a></li>
                            <li><a href="{{route('sosial.index')}}">Sosial</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-bullhorn"></i><span class="nav-text">Informasi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">artikel</a></li>
                            <li><a href="{{route('magang.index')}}">Magang</a></li>
                            <li><a href="{{route('mbkm.index')}}">MBKM</a></li>
                            <li><a href="{{route('seminar.index')}}">Seminar</a></li>
                            <li><a href="{{route('galeri-kegiatan.index')}}">Galeri Kegiatan</a></li>
                            <li><a href="{{route('lomba.index')}}">Lomba</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('project.index')}}" aria-expanded="false">
                            <i class="fa fa-briefcase"></i><span class="nav-text">Project</span>
                        </a>
                    </li>
                   
                    
                   
                   
                   
                   
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/assets/plugins/common/common.min.js"></script>
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/gleek.js"></script>
    <script src="/assets/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="/assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="/assets/plugins/d3v3/index.js"></script>
    <script src="/assets/plugins/topojson/topojson.min.js"></script>
    <script src="/assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="/assets/plugins/raphael/raphael.min.js"></script>
    <script src="/assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="/assets/js/dashboard/dashboard-1.js"></script>
    <script src="/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="/assets/plugins/summernote/dist/summernote-init.js"></script>
    <script src="/assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="/assets/plugins/sweetalert/js/sweetalert.init.js"></script>

@yield('script')
</body>

</html>