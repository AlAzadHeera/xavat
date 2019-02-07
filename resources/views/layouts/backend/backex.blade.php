<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title','') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/data-table/bootstrap-editable.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/normalize.css') }}">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/c3.min.css') }}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/form/all-type-forms.css') }}">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/form.css')}}">
    <!-- Additional CSS
    ============================================ -->
    @stack('css')
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="materialdesign">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header top area start-->
<div class="wrapper-pro">
    @if(Request::is('admin*'))
        @include('layouts.partials.sidebar')
    @endif
    <div class="content-inner-all">

@if(Request::is('admin*'))
    @include('layouts.partials.header')
@endif

@yield('content')

    </div>
</div>

@if(Request::is('admin*'))
    @include('layouts.partials.footer')
@endif

<!-- jquery
    ============================================ -->
<script src="{{ asset('backend/js/vendor/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{ asset('backend/js/jquery.meanmenu.js') }}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{ asset('backend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{ asset('backend/js/jquery.sticky.js') }}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{ asset('backend/js/jquery.scrollUp.min.js') }}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{ asset('backend/js/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('backend/js/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('backend/js/counterup/counterup-active.js') }}"></script>
<!-- peity JS
    ============================================ -->
<script src="{{ asset('backend/js/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('backend/js/peity/peity-active.js') }}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{ asset('backend/js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('backend/js/sparkline/sparkline-active.js') }}"></script>
<!-- flot JS
    ============================================ -->
<script src="{{ asset('backend/js/flot/Chart.min.js') }}"></script>
<script src="{{ asset('backend/js/flot/flot-active.js') }}"></script>
<!-- map JS
    ============================================ -->
<script src="{{ asset('backend/js/map/raphael.min.js') }}"></script>
<script src="{{ asset('backend/js/map/jquery.mapael.js') }}"></script>
<script src="{{ asset('backend/js/map/france_departments.js') }}"></script>
<script src="{{ asset('backend/js/map/world_countries.js') }}"></script>
<script src="{{ asset('backend/js/map/usa_states.js') }}"></script>
<script src="{{ asset('backend/js/map/map-active.js') }}"></script>
<!-- data table JS
    ============================================ -->
<script src="{{ asset('backend/js/data-table/bootstrap-table.js') }}"></script>
<script src="{{ asset('backend/js/data-table/tableExport.js') }}"></script>
<script src="{{ asset('backend/js/data-table/data-table-active.js') }}"></script>
{{--<script src="{{ asset('backend/js/data-table/bootstrap-table-editable.js') }}"></script>--}}
<script src="{{ asset('backend/js/data-table/bootstrap-editable.js') }}"></script>
<script src="{{ asset('backend/js/data-table/bootstrap-table-resizable.js') }}"></script>
<script src="{{ asset('backend/js/data-table/colResizable-1.5.source.js') }}"></script>
<script src="{{ asset('backend/js/data-table/bootstrap-table-export.js') }}"></script>
<!-- Sweet Alert JS
    ============================================ -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>

<!-- Additional JS
    ============================================ -->
@stack('scripts')

<!-- main JS
    ============================================ -->
<script src="{{ asset('backend/js/main.js') }}"></script>
</body>

</html>