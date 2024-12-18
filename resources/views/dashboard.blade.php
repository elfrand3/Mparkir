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
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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
                                <div class="d-inline-block">
                                    <h2 class="text-white" id="current-time">00:00:00 </h2>
                                    <p class="text-white mb-0" id="current-date">Loading...</p>
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
                                    {{-- <p class="text-white mb-0">Satuan Harga : Rp.5000 </p> --}}
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
                                    {{-- <p class="text-white mb-0">Satuan Harga : Rp.2000 </p> --}}
                                    <p class="text-white mb-0">Total : Rp.20000 </p>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money" style="font-size:70px"></i></span> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Product Sales</h4>
                                            <p>Total Earnings of the Month</p>
                                            <h3 class="m-0">$ 12,555</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_2"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="w-100 mr-2">
                                                <h6>Pixel 2</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-danger" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-100">
                                                <h6>iPhone X</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Summary</h4>
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">Order Overview </h5>
                                    <h2 class="mt-4">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class="mt-4">
                                        <h4>30</h4>
                                        <h6>Online Order <span class="pull-right">30%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>50</h4>
                                        <h6 class="m-t-10 text-muted">Offline Order <span class="pull-right">50%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>20</h4>
                                        <h6 class="m-t-10 text-muted">Cash On Develery <span class="pull-right">20%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-warning" style="width: 20%;" role="progressbar"><span class="sr-only">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-0">
                                    <h4 class="card-title px-4 mb-3">Todo</h4>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul id="todo_list">
                                                    <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>Don't give up the fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Do something else</span><a href='#' class="ti-trash"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class="px-4">
                                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">

                        <div class="card">
                            <div class="chart-wrapper mb-4">
                                <div class="px-4 pt-4 d-flex justify-content-between">
                                    <div>
                                        <h4>Sales Activities</h4>
                                        <p>Last 6 Month</p>
                                    </div>
                                    <div>
                                        <span><i class="fa fa-caret-up text-success"></i></span>
                                        <h4 class="d-inline-block text-success">720</h4>
                                        <p class=" text-danger">+120.5(5.0%)</p>
                                    </div>
                                </div>
                                <div>
                                        <canvas id="chart_widget_3"></canvas>
                                </div>
                            </div>
                            <div class="card-body border-top pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>5% Negative Feedback</li>
                                            <li>95% Positive Feedback</li>
                                        </ul>
                                        <div>
                                            <h5>Customer Feedback</h5>
                                            <h3>385749</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="chart_widget_3_1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity</h4>
                                <div id="activity">
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Received New Order</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>iPhone develered</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>3 Order Pending</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Join new Manager</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Branch open 5 min Late</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>New support ticket received</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img width="35" src="./images/avatar/3.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Facebook Post 30 Comments</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title mb-0">Store Location</h4>
                                <div id="world-map" style="height: 470px;"></div>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-facebook">
                                    <span class="s-icon"><i class="fa fa-facebook"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-linkedin">
                                    <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-googleplus">
                                    <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-twitter">
                                    <span class="s-icon"><i class="fa fa-twitter"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> --}}
            <!-- #/ container -->
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
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

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
