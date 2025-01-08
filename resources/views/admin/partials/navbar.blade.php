<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i>
    </button>
@include('admin.partials.navbar-menu-top')
<!-- end:: Header Menu -->
    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
        <!--begin: Notifications -->
    {{-- @include('admin.partials.notification') --}}
    <!--begin: User Bar -->
    @include('admin.partials.user')
    <!--end: User Bar -->
    </div>
    <!-- end:: Header Topbar -->
</div>
<!-- end:: Header -->