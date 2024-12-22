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
        @include('layout.nav')
        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layout.sid')
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">TIME</h3>
                                <div class="d-inline-block mb-1">
                                    <h2 class="text-white" id="current-time">00:00:00 </h2>
                                    <p class="text-white" id="current-date">Loading...</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-clock-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Parkir Mobil</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">30 <i class="fa fa-car" style="margin-left: 5px;"></i></h2>
                                    <p class="text-white mb-0">Satuan Harga : Rp.5000 </p>
                                    <p class="text-white mb-0">Total : Rp.150000 </p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Parkir Motor</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">10<i class="fa fa-motorcycle" style="margin-left: 5px;"></i></h2>
                                    <p class="text-white mb-0">Satuan Harga : Rp.2000 </p>
                                    <p class="text-white mb-0">Total : Rp.20000 </p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money" style="font-size:70px"></i></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
