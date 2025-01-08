@extends('admin.layouts.base')

@section ('page')
    {{--Roshan Shrestha--}}
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            @includeIf('admin.partials.sidebar')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                @includeIf('admin.partials.navbar')
                <div
                    class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor @if (Route::currentRouteName() == 'media.index') rs-media-integrate-wrapper @endif"
                    id="kt_content">
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        @yield('content')
                    </div>
                </div>
                @include('admin.media.base.modal')
                @include('admin.partials.footer')
            </div>
        </div>
    </div>
@stop



@push('footer')
    @routes
@endpush

