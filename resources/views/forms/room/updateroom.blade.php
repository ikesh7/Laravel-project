
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
                            Amenity
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
                <a href="{{  url('/newamenity') }}" class="btn fill-current  add_btn">Back</a>
                <div class="pb-12">
                    <div class="kt-portlet__body">

                        <form method="POST" action="{{ route('room.update',$room->id) }}" enctype="multipart/form-data">

                            {{ method_field('PUT') }}
                            @csrf
                           <div class="row">
                            <div class=" my-4 col-6 offset-1 ml-4 mr-1">
                                <div class="card-body">
                                    <div class="mx-2">
                                        <div class="mt-4 ml-1 custom_room">
                                            <x-label for="name" :value="__(' Name :')" class="fill-current  ml-1" />

                                            <x-input name="name" id="name" class="form-control" type="text" value="{{ $room->name}}" required />
                                        </div>

                                        <div class="mt-4 ml-1 custom_room">
                                            <x-label for="room_type_id" value="{{ __('Room Type :') }}" class="fill-current  ml-1" />
                                            <select name="room_type_id" class="form-control">
                                                <option value="">Select Room Type</option>
                                                @foreach ($roomTypes as $key)
                                                <option value="{{ $key->id }}" {{ ($key->id==$room->room_type_id)? "selected" : "" }}>
                                                    {{ $key->name_en }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="mt-4 ml-1 custom_room">
                                            <x-label for="bed_type_id" value="{{ __('Bed Type :') }}" class="fill-current  ml-1" />
                                            <select name="bed_type_id" class="form-control">
                                                <option value="">Select Bed Type</option>

                                                @foreach ($bedTypes as $key)
                                                <option value="{{ $key->id }}" {{ ($key->id==$room->bed_type_id)? "selected" : "" }}>
                                                    {{ $key->name_en }}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="mt-4 ml-1 custom_room">
                                            <x-label for="room_capacity_adult" :value="__(' Room Capacity (ADULT):')" class="fill-current  ml-1" />

                                            <x-input name="room_capacity_adult" id="room_capacity_adult" class="form-control" type="number" value="{{ $room->room_capacity_adult }}" placeholder="Room capacity for adult" required />
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="mt-4 ml-1 custom_room">
                                            <x-label for="room_capacity_childd" :value="__(' Room Capacity (CHILD):')" class="fill-current  ml-1" />

                                            <x-input name="room_capacity_childd" id="room_capacity_adult" class="form-control" type="number" value="{{ $room->room_capacity_adult }}" placeholder="Room capacity for child" required />
                                        </div>

                                        <div class="mt-4 ml-1 custom_room">

                                            <x-label for="price_en" :value="__(' Base Price (Rs.):')" class="fill-current  ml-1" />

                                            <x-input name="base_price" id="base_price" class="form-control" type="number" :value="old('base_price')" placeholder="Price (Rs.)" required />
                                        </div>
                                        <br>
                                        <div class="mt-4 ml-4">
                                            <x-label for="is_active" :value="__(' Is Active?')" class="fill-current  ml-3 mt-3" />

                                            <label class="pl-4 pr-1">
                                                <input type="radio" id="option1" name="is_active" value="1" {{ ($room->is_active=="1")? "checked" : "" }}>
                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                            </label>

                                            <label class="pl-2 pr-4">
                                                <input type="radio" id="option2" name="is_active" value="0" {{ ($room->is_active=="0")? "checked" : "" }}>
                                                <h4 class="btn fill-current  no_value">No</h4>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="mt-4">
                            <x-label for="desciption_en" :value="__(' Description')" />

                            <textarea name="desciption_en" class="col-md-12" rows="10"></textarea>
                        </div> -->

                                    <div class="flex items-center justify-end mt-4 btn_add">

                                        <x-button  class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                            <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Update') }}</h6>
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endsection
