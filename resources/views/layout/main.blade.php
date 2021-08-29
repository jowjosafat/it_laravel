<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="/" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../assets/img/default-avatar.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="/" class="simple-text logo-normal">
                    Troubleshoot IT
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="@yield('index')">
                        <a href="/">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class=" @yield('demage')">
                        <a href="/demage">
                            <i class="nc-icon nc-paper"></i>
                            <p>Form Damage</p>
                        </a>
                    </li>
                    <li class=" @yield('viar')">
                        <a href="/viar">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>PR</p>
                        </a>
                    </li>
                    <li class=" @yield('repair')">
                        <a href="/repair">
                            <i class="nc-icon nc-check-2"></i>
                            <p>Repair</p>
                        </a>
                    </li>
                    <li class=" @yield('table')">
                        <a href="/table">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class=" @yield('report')">
                        <a href="/report">
                            <i class="nc-icon nc-book-bookmark"></i>
                            <p>Report</p>
                        </a>
                    </li>
                    <li class=" @yield('user')">
                        <a href="/user">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Profile IT</p>
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
                        <a class="navbar-brand" href="/">Dashboard</a>
                        <div>
                            @if(session('status'))
                            <div class="btn btn-danger btn-sm">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        {{-- <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item">
                                <a class="nav-link btn-magnify" href="">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li> --}}
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Logout</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    {{-- <a class="dropdown-item" href="#"> --}}
                                    {{-- {{ $user }} --}}
                                    {{-- </a> --}}

                                    <a class="dropdown-item" href="/" onclick="
                                event.preventDefault();
                                document.getElementById('formLogout').submit();">Logout</a>
                                    <form id="formLogout" action="{{ route('logout') }}" method="post">@csrf</form>
                                </div>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link btn-rotate" href="">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('conten')
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.jowjosafat.com" target="_blank">Free Templates - Creative Tim</a></li>
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
        $(document).ready(function() {
            // Format mata uang.
            $('.uang').mask('000.000.000', {
                reverse: true
            });
        });
    </script>
</body>

</html>