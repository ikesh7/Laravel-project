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
                            <b>HOTEL DASHBOARD
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
                        <div class="container">
                            @if(isset($hotel))
                            <div class="row col-md-12">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Type of Property :
                                </div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->type_of_property}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold"> Property Name :</div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->name_of_property}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Star Rating :</div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->star_rating}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Contact Name :</div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->contact_name}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Contact Number :</div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->contact_no}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Address :</div>
                                <div class="fill-current text-dark col-md-6">{{$hotel->address}}</div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Status :</div>
                                <div class="col-md-6">
                                    @if($hotel->is_active == 1)
                                    <label class="text-dark font-weight-bold"><b class="fa fa-add">✓</b></label>
                                    @else
                                    <label class="text-dark font-weight-bold"><b
                                            class="fa fa-add text-danger">X</b></label>
                                    @endif
                                </div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Images :</div>
                                <div class="col-md-6">

                                    <a class="btn p-0" href="{{ route('hotel.addImage',$hotel->id) }}"><i
                                            class="fa fa-image text-success" title="Add Image"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{  route('agent.edit-info') }}" class="btn btn-primary  add_btn mt-4 ml-3">Update</a>

                    @else
                    <form method="POST" action="{{ route('hotel.registration') }}" class="mt-0"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden layout_form">
                                <div class="mt-2 name_room">


                                    <x-input name="name_of_property" id="name_of_property" class="form-control"
                                        type="text" :value="old('name_of_property')" onkeydown="updateSlug()"
                                        placeholder="Property name" required autofocus />
                                </div>

                                <div class="mt-3 name_room">

                                    <select name="property_type_id" class="form-control">
                                        <option disabled selected>Select Type Of Property</option>
                                        @foreach ($propertyTypes as $p )
                                        <option value="{{ $p->id  }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-3 name_room">

                                    <select name="star_rating" class="form-control">
                                        <option value="">Select Rating</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="mt-3 name_room">


                                    <x-input name="contact_name" id="contact_name" class="form-control" type="text"
                                        :value="old('contact_name')" placeholder="Contact name" required autofocus />
                                </div>

                                <div class="mt-3 name_room">


                                    <x-input id="contact_no" class="form-control" type="number" name="contact_no"
                                        :value="old('contact_no')" placeholder="Contact number" required autofocus />
                                </div>

                                <div class="mt-3 name_room">


                                    <x-input id="address" class="form-control" type="text" name="address"
                                        :value="old('address')" placeholder="Address" required autofocus />
                                </div>

                                <div class="mt-4 pr-1 type_room">
                                    <select name="city_id" class="form-control mt-2 pb-0">
                                        <option value="">Select City</option>
                                        @foreach ($cities as $key)
                                        <option value="{{ $key->id }}">
                                            {{ $key->name_en }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mt-3 name_room">


                                    <x-input id="slug" class="form-control" type="text" name="slug" :value="old('slug')"
                                        placeholder="Slug name" required autofocus />
                                </div>



                                {{-- <div class="mt-3 col-md-12">
                                        <a class="btn p-0"
                                                href="{{ route('hotel.addImage',$hotel->id) }}"><i
                                    class="fa fa-image text-success" title="Add Image"></i></a>

                            </div> --}}

                            <div class="mt-3 col-md-12">
                                <label class="text-dark">Hotel Document</label>
                                <input type="file" name="registration_document" class="form-control"
                                    name="Select Image">
                            </div>

                            <div class="mt-3 col-md-12">
                                <label class="text-dark"> Citizen Front</label>
                                <input type="file" name="citizen_front" class="form-control" name="Select Image">
                            </div>

                            <div class="mt-3 col-md-12">
                                <label class="text-dark">Citizen Back</label>
                                <input type="file" name="citizen_back" class="form-control" name="Select Image">
                            </div>


                            <div class="flex items-center justify-end mt-4">

                                <x-button class="btn btn-primary">
                                    <h6 class="text-center font-weight-bold mb-0 p-2">{{ __('Add') }}</h6>
                                </x-button>
                            </div>
                        </div>
                </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script>
    function updateSlug(){
        var name = document.getElementById('name_of_property').value;
        var slug = name.toLowerCase().trim().replaceAll(' ','-');
        document.getElementById('slug').value = slug;
    }
</script>
@endpush
