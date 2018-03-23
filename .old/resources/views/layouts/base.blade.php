<!DOCTYPE html>
<html class="no-js" data-ng-app="LCA Dashboard">
<head>
    <!-- Meta-Information -->
    <title>LCA Dashboard</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{!! asset('/css/jquery-ui.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/bootstrap.min.css') !!}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{!! asset('/css/icons.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('/css/responsive.css') !!}" type="text/css">

    <!-- Color Scheme -->
    {{-- <link rel="stylesheet" href="{!! asset('/css/color-schemes/color.css') !!}" type="text/css" title="color3"> --}}
    {{-- <link rel="alternate stylesheet" href="{!! asset('/css/color-schemes/color1.css') !!}" title="color1"> --}}
    <link rel="alternate stylesheet" href="{!! asset('/css/color-schemes/color2.css') !!}" title="color2">
    <link rel="alternate stylesheet" href="{!! asset('/css/color-schemes/color4.css') !!}" title="color4">
    <link rel="alternate stylesheet" href="{!! asset('/css/color-schemes/color5.css') !!}" title="color5">

        <!-- Vendor: Javascripts -->
    <script src="{!! asset('/js/jquery.min.js') !!}" type="text/javascript"></script>
</head>
<body class="dark">
    {{-- @include('templates/header') --}}
    <!-- Our Website Content Goes Here -->
    <div class="panel-data expand-data" data-ng-view>
    @yield('content')
    </div>
     
 
    @include('templates/footer')

    <!-- Vendor: Angular, followed by our custom Javascripts -->
    <script src="{!! asset('/js/angular.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/angular-route.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/bootstrap.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery-ui.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/select2.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/slick.min.js') !!}" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="{!! asset('/js/isotope.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/isotope-int.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.counterup.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/waypoints.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/highcharts.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/exporting.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/highcharts-more.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/moment.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.circliful.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/fullcalendar.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/skycons.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/elementQuery.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/betterweather.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.vmap.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.asia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.europe.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.australia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.africa.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.north-america.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/continents/jquery.vmap.south-america.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.algeria.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.argentina.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.brazil.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.canada.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.croatia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.europe.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.france.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.germany.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.greece.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.indonesia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.iran.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.iraq.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.new_regions_france.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.russia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.serbia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.tunisia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.turkey.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.ukraine.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.usa.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/maps/jquery.vmap.world.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.downCount.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.bootstrap-touchspin.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.formtowizard.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/form-validator.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/form-validator-lang-en.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/cropbox-min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/ion.rangeSlider.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/jquery.poptrox.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/js/styleswitcher.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('/https://maps.google.com/maps/api/js?sensor=false') !!}"></script>
    <script src="{!! asset('/js/main.js') !!}" type="text/javascript"></script>
</body>
</html>