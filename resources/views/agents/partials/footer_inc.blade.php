<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>


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

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{ asset('vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript">
</script>
<script src="{{ asset('vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->
@stack('scripts')


<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('js/admin/scripts.bundle.min.js') }}" type="text/javascript"></script>
{{-- <link href="{{ asset('vendor/core/media/css/media.css') }}" rel="stylesheet" type="text/css"/> --}}

<script src="{{ asset('vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{ asset('vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>


{{-- <script src="{{ asset('vendor/core/js/core.js') }}" type="text/javascript"></script> --}}
{{-- <script src="{{ asset('vendor/core/media/js/integrate.js') }}" type="text/javascript"></script> --}}
