@foreach($datas as $data)

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

                <div class="pb-12">
                    <div class="kt-portlet__body">

                        <form method="POST" action="{{ route('facilities.update', $data->id) }}" enctype="multipart/form-data">
                                 {{ method_field('PUT') }}
                            @csrf
                            <div class="row">
                            <div class=" my-4 col-6 offset-1 ml-4 mr-1">
                                <div class="card-body">
                                    <div class="mx-2">
                                        <div class="mt-4 ml-5 pl-3 parking_try">
                                            <x-label for="room_type" :value="__(' PARKING')" class="fill-current  underline ml-2" />

                                            <label class="pl-2 pr-2">

                                                <input type="radio" id="option1" name="parking" {{ ($data->parking=="1")? "checked" : "" }} value="1">
                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                            </label>

                                            <label class="pl-2 pr-2">

                                                <input type="radio" id="option2" name="parking" {{ ($data->parking=="0")? "checked" : "" }} value="0">
                                                <h4 class="btn fill-current  no_value">No</h4>
                                            </label>
                                        </div>

                                        <div class="mt-4 ml-5 pl-4 parking_try">
                                            <x-label for="room_type" :value="__(' BREAKFAST')" class="fill-current  underline ml-2" />



                                            <label class="pl-2 pr-2">
                                                <input type="radio" id="option3" name="breakfast" {{ ($data->breakfast=="1")? "checked" : "" }} value="1">
                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                            </label>

                                            <label class="pl-2 pr-2">
                                                <input type="radio" id="option4" name="breakfast" {{ ($data->breakfast=="0")? "checked" : "" }} value="0">
                                                <h4 class="btn fill-current  no_value">No</h4>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-4 ml-4  pr-4 custom_room_service">


                                            <div class="row">
                                                <div class="mt-4 custom_room">


                                                    <x-input name="breakfast_type" id="breakfast_type" class="form-control" type="text" value="{{$data->breakfast_type}}" placeholder="Breakfast Type" required />
                                                </div>

                                                <div class="mt-4 price_room">


                                                    <x-input name="breakfast_price" id="breakfast_price" class="form-control" type="number" value="{{$data->breakfast_price}}" placeholder="Breakfast Price" required />
                                                </div>
                                            </div>
                                            <div class="mt-4 pl-3">
                                                <x-label for="free_wifi" :value="__(' Free Wifi')" class="fill-current " />

                                                <label class="pl-4 pr-4">
                                                    <input type="radio" id="option5" name="free_wifi" {{ ($data->free_wifi=="1")? "checked" : "" }} value="1">
                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                </label>

                                                <label class="pl-4 pr-4">
                                                    <input type="radio" id="option6" name="free_wifi" {{ ($data->free_wifi=="0")? "checked" : "" }} value="0">
                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                </label>
                                            </div>

                                            <div class="mt-4 pl-3">
                                                <x-label for="restaurant" :value="__(' Restaurant')" class="fill-current " />

                                                <label class="pl-4 pr-4">
                                                    <input type="radio" id="option7" name="restaurant" value="1" {{ ($data->restaurant=="1")? "checked" : "" }}>
                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                </label>

                                                <label class="pl-4 pr-4">
                                                    <input type="radio" id="option8" name="restaurant" value="0" {{ ($data->restaurant=="0")? "checked" : "" }}>
                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="mt-4 ml-5 pl-3 parking_try">
                                                <x-label for="room_service" :value="__(' Room Service')" class="fill-current  underline ml-2" />

                                                <label class="pl-2 pr-2">
                                                    <input type="radio" id="option9" name="room_service" value="1">
                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                </label>

                                                <label class="pl-2 pr-2">
                                                    <input type="radio" id="option10" name="room_service" value="0">
                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                </label>
                                            </div>

                                            <div class="mt-4 ml-5 pl-4 parking_try">
                                                <x-label for="bar" :value="__(' Bar')" class="fill-current  underline ml-2" />

                                                <label class="pl-2 pr-2">
                                                    <input type="radio" id="option11" name="bar" value="1">
                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                </label>

                                                <label class="pl-2 pr-2">
                                                    <input type="radio" id="option12" name="bar" value="0">
                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                    <div class="mt-4 pl-3">
                                                        <x-label for="room_service" :value="__(' Room Service')" class="fill-current " />

                                                        <label class="pl-4 pr-4">
                                                            <input type="radio" id="option9" name="room_service" value="1" {{ ($data->room_service=="1")? "checked" : "" }}>
                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                        </label>

                                                        <label class="pl-4 pr-4">
                                                            <input type="radio" id="option10" name="room_service" value="0" {{ ($data->room_service=="0")? "checked" : "" }}>
                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                        </label>
                                                    </div>

                                                    <div class="mt-4 pl-3">
                                                        <x-label for="bar" :value="__(' Bar')" class="fill-current " />

                                                        <label class="pl-4 pr-4">
                                                            <input type="radio" id="option11" name="bar" {{ ($data->bar=="1")? "checked" : "" }} value="1">
                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                        </label>

                                                        <label class="pl-4 pr-4">
                                                            <input type="radio" id="option12" name="bar" {{ ($data->bar=="0")? "checked" : "" }} value="0">
                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                        </label>
                                                    </div>
                                            </div>

                                            <div class="row">

                                                <div class="mt-4 ml-5 pl-3 parking_try">
                                                    <x-label for="bar" :value="__(' Front Desk')" class="fill-current  underline ml-2" />

                                                    <label class="pl-2 pr-2">
                                                        <input type="radio" id="option13" name="front_desk" value="1">
                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                    </label>

                                                    <label class="pl-2 pr-2">
                                                        <input type="radio" id="option14" name="front_desk" value="0">
                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                    </label>
                                                </div>

                                                <div class="mt-4 ml-5 pl-4 parking_try">
                                                    <x-label for="bar" :value="__(' Sauna')" class="fill-current  underline ml-2" />

                                                    <label class="pl-2 pr-2">
                                                        <input type="radio" id="option15" name="sauna" value="1">
                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                    </label>

                                                    <label class="pl-2 pr-2">
                                                        <input type="radio" id="option16" name="sauna" value="0">
                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                        <div class="mt-4 pl-3">
                                                            <x-label for="bar" :value="__(' Front Desk')" class="fill-current " />

                                                            <label class="pl-4 pr-4">
                                                                <input type="radio" id="option13" name="front_desk" {{ ($data->front_desk=="1")? "checked" : "" }} value="1">
                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                            </label>

                                                            <label class="pl-4 pr-4">
                                                                <input type="radio" id="option14" name="front_desk" {{ ($data->front_desk=="0")? "checked" : "" }} value="0">
                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                            </label>
                                                        </div>

                                                        <div class="mt-4 pl-3">
                                                            <x-label for="bar" :value="__(' Sauna')" class="fill-current " />

                                                            <label class="pl-4 pr-4">
                                                                <input type="radio" id="option15" name="sauna" {{ ($data->sauna=="1")? "checked" : "" }} value="1">
                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                            </label>

                                                            <label class="pl-4 pr-4">
                                                                <input type="radio" id="option16" name="sauna" {{ ($data->sauna=="0")? "checked" : "" }} value="0">
                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                            </label>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                    <div class="mt-4 ml-5 pl-3 parking_try">
                                                        <x-label for="bar" :value="__(' Fitness Center')" class="fill-current  underline ml-2" />

                                                        <label class="pl-2 pr-2">
                                                            <input type="radio" id="option17" name="fitness_center" value="1">
                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                        </label>

                                                        <label class="pl-2 pr-2">
                                                            <input type="radio" id="option18" name="fitness_center" value="0">
                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                        </label>
                                                    </div>

                                                    <div class="mt-4 ml-5 pl-4 parking_try">
                                                        <x-label for="bar" :value="__(' Garden')" class="fill-current  underline ml-2" />

                                                        <label class="pl-2 pr-2">
                                                            <input type="radio" id="option19" name="garden" value="1">
                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                        </label>

                                                        <label class="pl-2 pr-2">
                                                            <input type="radio" id="option20" name="garden" value="0">
                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                            <div class="mt-4 pl-3">
                                                                <x-label for="bar" :value="__(' Fitness Center')" class="fill-current " />

                                                                <label class="pl-4 pr-4">
                                                                    <input type="radio" id="option17" name="fitness_center" {{ ($data->fitness_center=="1")? "checked" : "" }} value="1">
                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                </label>

                                                                <label class="pl-4 pr-4">
                                                                    <input type="radio" id="option18" name="fitness_center" {{ ($data->fitness_center=="0")? "checked" : "" }} value="0">
                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                </label>
                                                            </div>

                                                            <div class="mt-4 pl-3">
                                                                <x-label for="bar" :value="__(' Garden')" class="fill-current " />

                                                                <label class="pl-4 pr-4">
                                                                    <input type="radio" id="option19" name="garden" {{ ($data->garden=="1")? "checked" : "" }} value="1">
                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                </label>

                                                                <label class="pl-4 pr-4">
                                                                    <input type="radio" id="option20" name="garden" {{ ($data->garden=="0")? "checked" : "" }} value="0">
                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                </label>
                                                            </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="mt-4 ml-5 pl-3 parking_try">
                                                            <x-label for="bar" :value="__(' Terrace')" class="fill-current  underline ml-2" />

                                                            <label class="pl-2 pr-2">
                                                                <input type="radio" id="option21" name="terrace" value="1">
                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                            </label>

                                                            <label class="pl-2 pr-2">
                                                                <input type="radio" id="option22" name="terrace" value="0">
                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                            </label>
                                                        </div>

                                                        <div class="mt-4 ml-5 pl-4 parking_try">
                                                            <x-label for="bar" :value="__(' Non Smoking Rooms')" class="fill-current  underline ml-2" />

                                                            <label class="pl-2 pr-2">
                                                                <input type="radio" id="option23" name="non_smoking_rooms" value="1">
                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                            </label>

                                                            <label class="pl-2 pr-2">
                                                                <input type="radio" id="option24" name="non_smoking_rooms" value="0">
                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                                <div class="mt-4 pl-3">
                                                                    <x-label for="bar" :value="__(' Terrace')" class="fill-current " />

                                                                    <label class="pl-4 pr-4">
                                                                        <input type="radio" id="option21" name="terrace" {{ ($data->terrace=="1")? "checked" : "" }} value="1">
                                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                    </label>

                                                                    <label class="pl-4 pr-4">
                                                                        <input type="radio" id="option22" name="terrace" {{ ($data->terrace=="0")? "checked" : "" }} value="0">
                                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                                    </label>
                                                                </div>

                                                                <div class="mt-4 pl-3">
                                                                    <x-label for="bar" :value="__(' Non Smoking Rooms')" class="fill-current " />

                                                                    <label class="pl-4 pr-4">
                                                                        <input type="radio" id="option23" name="non_smoking_rooms" {{ ($data->non_smoking_rooms=="1")? "checked" : "" }} value="1">
                                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                    </label>

                                                                    <label class="pl-4 pr-4">
                                                                        <input type="radio" id="option24" name="non_smoking_rooms" {{ ($data->non_smoking_rooms=="0")? "checked" : "" }} value="0">
                                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                                    </label>
                                                                </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="mt-4 ml-5 pl-3 parking_try">
                                                                <x-label for="bar" :value="__(' Airport Shuttle')" class="fill-current  underline ml-2" />

                                                                <label class="pl-2 pr-2">
                                                                    <input type="radio" id="option25" name="airport_shuttle" value="1">
                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                </label>

                                                                <label class="pl-2 pr-2">
                                                                    <input type="radio" id="option26" name="airport_shuttle" value="0">
                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                </label>
                                                            </div>

                                                            <div class="mt-4 ml-5 pl-4 parking_try">
                                                                <x-label for="bar" :value="__(' Family Rooms')" class="fill-current  underline ml-2" />

                                                                <label class="pl-2 pr-2">
                                                                    <input type="radio" id="option27" name="family_rooms" value="1">
                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                </label>

                                                                <label class="pl-2 pr-2">
                                                                    <input type="radio" id="option28" name="family_rooms" value="0">
                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                    <div class="mt-4 pl-3">
                                                                        <x-label for="bar" :value="__(' Airport Shuttle')" class="fill-current " />

                                                                        <label class="pl-4 pr-4">
                                                                            <input type="radio" id="option25" name="airport_shuttle" {{ ($data->airport_shuttle=="1")? "checked" : "" }} value="1">
                                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                        </label>

                                                                        <label class="pl-4 pr-4">
                                                                            <input type="radio" id="option26" name="airport_shuttle" {{ ($data->airport_shuttle=="0")? "checked" : "" }} value="0">
                                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                                        </label>
                                                                    </div>

                                                                    <div class="mt-4 pl-3">
                                                                        <x-label for="bar" :value="__(' Family Rooms')" class="fill-current " />

                                                                        <label class="pl-4 pr-4">
                                                                            <input type="radio" id="option27" name="family_rooms" {{ ($data->family_rooms=="1")? "checked" : "" }} value="1">
                                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                        </label>

                                                                        <label class="pl-4 pr-4">
                                                                            <input type="radio" id="option28" name="family_rooms" {{ ($data->family_rooms=="0")? "checked" : "" }} value="0">
                                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                                        </label>
                                                                    </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="mt-4 ml-5 pl-3 parking_try">
                                                                    <x-label for="bar" :value="__(' Spa')" class="fill-current  underline ml-2" />

                                                                    <label class="pl-2 pr-2">
                                                                        <input type="radio" id="option29" name="spa" value="1">
                                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                    </label>

                                                                    <label class="pl-2 pr-2">
                                                                        <input type="radio" id="option30" name="spa" value="0">
                                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                                    </label>
                                                                </div>

                                                                <div class="mt-4 ml-5 pl-4 parking_try">
                                                                    <x-label for="bar" :value="__(' Hot Tub/ Jaccuzi ')" class="fill-current  underline ml-2" />

                                                                    <label class="pl-2 pr-2">
                                                                        <input type="radio" id="option31" name="hot_tub_jaccuzi" value="1">
                                                                        <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                    </label>

                                                                    <label class="pl-2 pr-2">
                                                                        <input type="radio" id="option32" name="hot_tub_jaccuzi" value="0">
                                                                        <h4 class="btn fill-current  no_value">No</h4>
                                                                        <div class="mt-4 pl-3">
                                                                            <x-label for="bar" :value="__(' Spa')" class="fill-current " />

                                                                            <label class="pl-4 pr-4">
                                                                                <input type="radio" id="option29" name="spa" {{ ($data->spa=="1")? "checked" : "" }} value="1">
                                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                            </label>

                                                                            <label class="pl-4 pr-4">
                                                                                <input type="radio" id="option30" name="spa" {{ ($data->spa=="0")? "checked" : "" }} value="0">
                                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                                            </label>
                                                                        </div>

                                                                        <div class="mt-4 pl-3">
                                                                            <x-label for="bar" :value="__(' Hot Tub/ Jaccuzi ')" class="fill-current " />

                                                                            <label class="pl-4 pr-4">
                                                                                <input type="radio" id="option31" name="hot_tub_jaccuzi" {{ ($data->hot_tub_jaccuzi=="1")? "checked" : "" }} value="1">
                                                                                <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                            </label>

                                                                            <label class="pl-4 pr-4">
                                                                                <input type="radio" id="option32" name="hot_tub_jaccuzi" {{ ($data->hot_tub_jaccuzi=="0")? "checked" : "" }} value="0">
                                                                                <h4 class="btn fill-current  no_value">No</h4>
                                                                            </label>
                                                                        </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="mt-4 ml-5 pl-3 parking_try">
                                                                        <x-label for="bar" :value="__(' Air Conditioning ')" class="fill-current  underline ml-2" />

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option33" name="air_conditioning" value="1">
                                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                        </label>

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option34" name="air_conditioning" value="0">
                                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                                        </label>
                                                                    </div>

                                                                    <div class="mt-4 ml-5 pl-4 parking_try">
                                                                        <x-label for="bar" :value="__(' Water Park ')" class="fill-current  underline ml-2" />

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option35" name="water_park" value="1">
                                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                        </label>

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option36" name="water_park" value="0">
                                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                                            <div class="mt-4 pl-3">
                                                                                <x-label for="bar" :value="__(' Air Conditioning ')" class="fill-current " />

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option33" name="air_conditioning" {{ ($data->air_conditioning=="1")? "checked" : "" }} value="1">
                                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                                </label>

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option34" name="air_conditioning" {{ ($data->air_conditioning=="0")? "checked" : "" }} value="0">
                                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                                </label>
                                                                            </div>

                                                                            <div class="mt-4 pl-3">
                                                                                <x-label for="bar" :value="__(' Water Park ')" class="fill-current " />

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option35" name="water_park" {{ ($data->water_park=="1")? "checked" : "" }} value="1">
                                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                                </label>

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option36" name="water_park" {{ ($data->water_park=="0")? "checked" : "" }} value="0">
                                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                                </label>
                                                                            </div>
                                                                    </div>



                                                                    <div class="mt-4  pl-3 parking_try_pool">
                                                                        <x-label for="bar" :value="__(' Swimming Pool ')" class="fill-current  underline ml-2" />

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option37" name="swimming_pool" value="1">
                                                                            <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                        </label>

                                                                        <label class="pl-2 pr-2">
                                                                            <input type="radio" id="option38" name="swimming_pool" value="0">
                                                                            <h4 class="btn fill-current  no_value">No</h4>
                                                                            <div class="mt-4 pl-3">
                                                                                <x-label for="bar" :value="__(' Swimming Pool ')" class="fill-current " />

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option37" name="swimming_pool" {{ ($data->swimming_pool=="1")? "checked" : "" }} value="1">
                                                                                    <h4 class="btn fill-current  yes_value">Yes</h4>
                                                                                </label>

                                                                                <label class="pl-4 pr-4">
                                                                                    <input type="radio" id="option38" name="swimming_pool" {{ ($data->swimming_pool=="0")? "checked" : "" }} value="0">
                                                                                    <h4 class="btn fill-current  no_value">No</h4>
                                                                                </label>
                                                                            </div>




                                                                            <div class="flex items-center justify-end mt-4 btn_add_service">
                                                                                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> -->

                                                                                <x-button  class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                                                                    <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Update') }}</h6>
                                                                                </x-button>

                                                                            </div>
                                                                    </div>
                                                                </div>
                        </form>
                    </div>

                    @endsection
                    @endforeach
