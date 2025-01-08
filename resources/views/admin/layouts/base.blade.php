<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{config('app.name','Peakhotels')}}</title>
    <meta name="description" content="Updates and statistics">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('styles')
    <link href="{{asset('css/admin/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link href="{{asset('vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{asset('vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="css/admin/style.bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/custom.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    @yield('head')

    @stack('header')

</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed
kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">


    @yield('page')

    @include('admin.partials.common')


    <script>
        var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
    </script>

    <script src="{{  asset('vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript">
    </script>
    <script src="{{  asset('vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>

    {{-- <script src="{{ asset('vendor/core/js/scripts.bundle.min.js') }}"></script> --}}

    @yield('javascript')

    @stack('footer')
</body>

</html>
