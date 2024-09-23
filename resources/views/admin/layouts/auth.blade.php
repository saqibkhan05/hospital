<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>@yield('title', 'Login')</title>

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


    <script src="alert.js"></script>



</head>

<body>

    @yield('body');


    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->

    <!-- particles js -->
    <script src="{{ asset('admin_assets/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('admin_assets/js/pages/particles.app.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('admin_assets/js/pages/password-addon.init.js') }}"></script>
</body>

</html>
