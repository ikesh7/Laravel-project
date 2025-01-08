@extends('admin.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            {{-- <i class="kt-font-brand flaticon2-bar-chart"></i> --}}
                        </span>
                        <h3 class="kt-portlet__head-title">
                            <b>Edit Hotel Info
                            </b>
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
                <!-- <a href="{{  url('/beds') }}" class="btn fill-current  add_btn">Back</a> -->


                <div class="pb-12">
                    <div class="kt-portlet__body">

                        <table class="table table-bordered table-striped table-hover table-condensed" id="beds-table">
                            <div class="pb-12">
                                <thead>
                                    <tr class="value_table">
                                        <th class="text-center"> S. No.</th>
                                        <th class="text-center"> Hotel Name</th>
                                        <th class="text-center"> Type of property</th>
                                        <th class="text-center"> Rating</th>
                                        <th class="text-center">Contact Name</th>
                                        <th class="text-center">Contact Number</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        {{--
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                   {{ $loop->index + 1 }}</b></label>
                                        </td> --}}
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                    {{$hotel->name_of_property}}</b></label>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                    {{$hotel->type_of_property}}</b></label>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                    {{$hotel->star_rating}}</b></label>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                    {{$hotel->contact_name}}</b></label>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            <label class=" font-weight-bold"><b class="fa fa-add">
                                                    {{$hotel->contact_no}}</b></label>





                                    </tr>

                                </tbody>
                        </table>
                        <p>Images:</p>

                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Hotel Images
                                        </a>
                                    </h5>
                                </div>
                                <div>
                                    <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-block">
                                            <div id="studies-collapse">
                                                <div class="container">
                                                    <div class="row">

                                                           <div class="col-md-3">
                                                                     @forelse($hotel->getMedia('gallery') as $image )
                                                                    <div class="col-md-4">
                                                                        <img src="{{ $image->getUrl() }}" class="img img-thumbnail" alt="{{ $image->name }}">

                                                                    </div>
                                                                    @empty
                                                                    <div class=" col-12 alert alert-info" role="alert">
                                                                        No Images Found
                                                                    </div>
                                                                    @endforelse

                                                                </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Legal Documents
                                                </a>
                                            </h5>
                                        </div>
                                        <div>
                                            <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-block">
                                                    <div id="studies-collapse">
                                                        <div class="container">
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <b>
                                                                        <p>Citizenship:</p> <img src="data:image/jpg;base64, {{ $hotel->citizen_front }}" width="300" height="250" class="card-img">
                                                                        <img src="data:image/jpg;base64, {{ $hotel->citizen_back }}" width="300" height="250" class="card-img">

                                                                    </b>
                                                                </div>
                                                                <b>
                                                                    <p>Hotel Registration:</p>
                                                                    <img src="data:image/jpg;base64, {{ $hotel->registration_document}}" width="300" height="250" class="card-img">

                                                                </b>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-block">
                                                <div id="studies-collapse">
                                                    <div class="container">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <p>ROOMS:</p>
                                @forelse($hotel->rooms as $room)
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$room->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                    {{$room->name}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div>

                                            <div id="collapseOne{{$room->id}}" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-block">
                                                    <div id="studies-collapse">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-o">
                                                                    <b>
                                                                        <p>Room Type:</p>{{$room->roomType}}
                                                                    </b>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <b>
                                                                        <p>Base Price:</p>{{$room->base_price}}
                                                                    </b>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <b>
                                                                        <p>Adult Capacity:</p>{{$room->room_capacity_adult}}
                                                                    </b>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <b>
                                                                        <p>Child Capacity:</p>{{$room->room_capacity_child}}
                                                                    </b>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Images: @forelse($room->getMedia('gallery') as $image )
                                                                    <div class="col-md-4">
                                                                        <img src="{{ $image->getUrl() }}" class="img img-thumbnail" alt="{{ $image->name }}">

                                                                    </div>
                                                                    @empty
                                                                    <div class=" col-12 alert alert-info" role="alert">
                                                                        No Images Found
                                                                    </div>
                                                                    @endforelse

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty<p>No rooms found</P>
                                    @endforelse
                                </div>
                                <div class="container">

                                    <form method="POST" action="{{ url('admin/hoteldetails/'.$hotel->id) }}" class="mt-0" enctype="multipart/form-data">
                                        {{ method_field('PUT') }}
                                        @csrf
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                            <div class="overflow-hidden layout_form">


                                                <div class="mt-4 ml-5">
                                                    <x-label for="is_active" :value="__(' Is Active?')" class="fill-current text-dark mt-2" />

                                                    <label class="pl-4 pr-1">
                                                        <input type="radio" id="option3" name="is_active" value="1" {{ ($hotel->is_active=="1")? "checked" : "" }}>
                                                        <h4 class="btn fill-current text-dark yes_value">Yes</h4>
                                                    </label>

                                                    <label class="pl-2 pr-4">
                                                        <input type="radio" id="option4" name="is_active" value="0" {{ ($hotel->is_active=="0")? "checked" : "" }}>
                                                        <h4 class="btn fill-current text-dark no_value">No</h4>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="flex items-center justify-end mt-5 btn_add">

                                                <x-button class="col-md-12 text-center add_btn">
                                                    <h6 class="col-md-12 text-center font-weight-bold mb-0 p-1">{{ __('Update') }}</h6>
                                                </x-button>
                                            </div>
                                        </div>
                                </div>
                                </form>

                            </div>

                        </div>

                        @endsection

                        @push('styles')
                        @endpush

                        @push('scripts')
                        @endpush
