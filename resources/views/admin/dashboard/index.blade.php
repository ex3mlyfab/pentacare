@extends('admin.admin')

@section('head_css')

<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/extensions/tether-theme-arrows.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/extensions/tether.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/extensions/shepherd-theme-default.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/pages/dashboard-analytics.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/pages/card-analytics.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/plugins/tour/tour.css">
@endsection
@section('content')
    secti
@endsection

@section('foot_js')
<script src="{{asset('public/backend')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
@endsection
