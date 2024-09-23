<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>@yield('title', 'Stayholic AdminPanel')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="admin_assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset('admin_assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin_assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


    <style>
        .navbar-menu {
            background: #003d2e;
            border-right: 1px solid #003d2e;
        }
    </style>



</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.components.header-1')
        @include('admin.components.sidebar-1')
        <div class="vertical-overlay"></div>

        @yield('body');

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="text-sm-center d-none d-sm-block">
                        Design by <a href="https://pixsay.com/" target="_blank">Pixsay</a> &amp; Develop by <a
                            href="https://peltown.com/" target="_blank">Peltown</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin_assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('admin_assets/js/pages/dashboard-crm.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
</body>

</html>