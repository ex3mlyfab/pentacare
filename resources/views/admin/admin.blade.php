<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')- Pentacare</title>
    <link rel="apple-touch-icon" href="{{asset('public/backend')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/backend')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/ui/prism.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">

    <!-- END: Page CSS-->
    @yield('head_css')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-sticky footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

@include('admin.partials.nav')
@include('admin.partials.header')
 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">

        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('admin.partials.footer')



    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/ui/prism.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/backend')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/js/core/app.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->
    @yield('foot_js')

</body>
<!-- END: Body-->

</html>
