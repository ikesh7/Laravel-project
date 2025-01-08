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
                            Room Type
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
                <a href="{{  route('roomtype.index') }}" class="btn fill-current  add_btn">Back</a>
                <div class="pb-12">
                    <div class="kt-portlet__body">

                        <form method="POST" action="{{ route('roomtype.update', $data->id) }}" >

                            {{ method_field('PUT') }}
                            @csrf
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class=" overflow-hidden layout_form ">
                                    <div class="mt-4  price_room_update">

                                        <x-label for="name_en" :value="__(' Name :')" class="fill-current  ml-1" />
                                        <x-input name="name_en" id="name_en" class="form-control" type="text" value="{{ $data->name_en }}" placeholder="Name" required autofocus />
                                    </div>
                                    <br>
                                    <div class="mt-4 price_room_update">

                                        <x-label for="slug_en" :value="__(' Slug : ')" class="fill-current  ml-1" />

                                        <x-input name="slug" id="slug" class="form-control" type="text" value="{{ $data->slug }}" placeholder="Slug name" required autofocus />
                                    </div>
                                    <br>
                                    <div class="mt-4 desc_amenity">
                                        <x-label for="description_en" :value="__(' Description :')" class="fill-current  ml-1" />

                                        <textarea name="description_en" class="form-control" rows="10">{{ $data->description_en }}</textarea>
                                    </div>
                                    <br>
                                    <div class="flex items-center justify-end mt-4 btn_add ">

                                        <x-button class="col-md-12 text-center add_btn">
                                            <h6  class="addFile btn btn-brand btn-elevate btn-icon-sm">{{ __('Add') }}</h6>
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endsection
