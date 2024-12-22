<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Manajemen Parkir RS Rizani</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{asset('template/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('template/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
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
                <a href="dashboard">
                    <b class="logo-abbr"><img src="{{asset('template/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{asset('template/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{asset('template/images/logo-rs.png')}}" width="160" height="40">
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

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset('template/images/user/1.png')}}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Aplikasi Parkir Rs. Rizani</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="menu-link {{ request()->is('home*') ? 'active' : '' }}"
                                href="{{ url('/home') }}">Monitoring</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Rekap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-logout menu-icon"></i>
                        <span class="nav-text">Logout</span></a>
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
    <script src="{{asset('template/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('template/js/custom.min.js')}}"></script>
    <script src="{{asset('template/js/settings.js')}}"></script>
    <script src="{{asset('template/js/gleek.js')}}"></script>
    <script src="{{asset('template/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('template/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('template/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('template/plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('template/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('template/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <script src="{{asset('template/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('template/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('template/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('template/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('template/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('template/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{asset('template/js/dashboard/dashboard-1.js')}}"></script>

    <script>
        // Fungsi untuk mendapatkan nama bulan
        function getMonthName(monthIndex) {
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            return monthNames[monthIndex];
        }

        // Fungsi untuk memperbarui waktu dan tanggal
        function updateTimeAndDate() {
            const now = new Date();

            // Waktu
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;

            // Tanggal
            const day = now.getDate();
            const month = getMonthName(now.getMonth());
            const year = now.getFullYear();
            const dateString = `${day} ${month} ${year}`;

            // Masukkan waktu dan tanggal ke elemen HTML
            document.getElementById("current-time").innerText = timeString;
            document.getElementById("current-date").innerText = dateString;

            // Masukkan tanggal di tempat ikon
            document.getElementById("date-icon").innerHTML = `<i class="fa fa-calendar"></i> ${day}/${now.getMonth() + 1}/${year}`;
        }

        // Perbarui setiap detik
        setInterval(updateTimeAndDate, 1000);

        // Jalankan pertama kali
        updateTimeAndDate();
    </script>
</body>

</html>
