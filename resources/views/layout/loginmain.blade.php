<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="5500">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset ('../assets/img/logo.png') }} ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    {{-- <link href="{{ asset('../assets/css/metro.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('../assets/css/metro-all.min.css')}}" rel="stylesheet" /> --}}

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=" {{ asset('../assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="/login" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../assets/img/default-avatar.png">
                    </div>
                </a>
                <a href="/login" class="simple-text logo-normal title">
                    Troubleshoot IT
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="@yield('login')">
                        <a href="/login">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Diagram</p>
                        </a>
                    </li>
                    <li class="@yield('tablelogin')">
                        <a href="/tablelogin">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Tiket Problem Table</p>
                        </a>
                    </li>
                    <li class="@yield('it')">
                        <a href="/userprofile">
                            <i class="nc-icon nc-single-02"></i>
                            <p>IT Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand title" href="#">Dashboard</a>
                        <a href="/tablelogin"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <div class="row">
                            <div class="col-auto">
                                <ul class="navbar-nav">
                                    <div>
                                        @if(session('status'))
                                        <div class="btn btn-danger btn-sm" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#troubleModal">
                                            Input Kerusakan</button>
                                    </div>
                                </ul>
                            </div>
                            {{-- <div class="col-auto">
                                <div class="input-group no-border">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <marquee scrolldelay="300">ini tulisan berjalan</marquee>
                                            <i class="nc-icon nc-bell-55"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>   --}}
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('contenlogin')

            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.jowjosafat.com" target="_blank">Creative</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script> by Jow Josafat
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset ('../assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset ('../assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset ('../assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('../assets/js/modal.js') }}"></script>
    <script src="{{ asset ('../assets/js/metro.min.js') }}"></script>
    <script src="{{ asset ('../assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset ('../assets/js/plugins/perfect-scrollbar.jquery.min.js ') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset ('../assets/js/plugins/chartjs.min.js ') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset ('../assets/js/plugins/bootstrap-notify.js ') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset ('../assets/js/paper-dashboard.min.js?v=2.0.1 ') }}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset ('../assets/demo/demo.js ') }}"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
        $(document).ready(function() {
            // Format mata uang.
            $('#uang').mask('000.000.000', {
                reverse: true
            });
        });
    </script>
</body>

</html>