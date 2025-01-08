<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

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
    <link href="{{ asset('css/admin/style.bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/custom.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <style>
        .invalid-feedback {
            display: inline-block;
        }

        .kt-header {
            cursor: default !important;
        }
    </style>
</head>

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    @include('agents.partials.mobileheader')

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            @include('agents.partials.sidebar')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                @include('agents.partials.navbar')
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    @yield('content-head')
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        @yield('content')
                    </div>
                </div>
                @include('agents.partials.footer')
            </div>
        </div>
    </div>
    @include('agents.partials.footer_inc')
    <script src="{{ asset('vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>



    @stack('script')
    <script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @elseif(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
    </script>
</body>

</html>
