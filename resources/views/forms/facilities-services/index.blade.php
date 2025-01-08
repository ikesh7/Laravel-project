@extends('agents.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            {{-- <i class="kt-font-brand flaticon2-bar-chart"></i> --}}
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Facilities and Services
                        </h3>
                    </div>


                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="destory">
                                                    <i class="kt-nav__link-icon la la-trash"></i>
                                                    <span class="kt-nav__link-text">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-12">
                    <div class="kt-portlet__body">

                        <form method="POST" action="{{ route('facilities.store') }}">
                            @csrf
                            <div class="row">
                                @foreach($facilities as $facility)


                                <div class="col-md-4">
                                    <div class="mt-4 ml-5 pl-3 text-capitalize">
                                        <x-label for="{{$facility->slug}}" value="{{$facility->name}}"
                                            class="fill-current underline ml-2" />

                                        <label class="pl-2 pr-2">
                                            <input type="checkbox" id="{{$facility->slug}}" name="facilities[]"
                                                value="{{$facility->id}}" @if(in_array($facility->id,$hotelFacilities))
                                            checked @endif>

                                        </label>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <div class="flex items-center justify-end mt-4 btn_add_service">

                                <a href="{{  route('facilities.index') }}"
                                    class="addFile btn-danger btn btn-brand btn-elevate btn-icon-sm">Back</a>
                                <x-button class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                    <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Add') }}</h6>
                                </x-button>


                            </div>


                        </form>
                    </div>
                    @endsection
