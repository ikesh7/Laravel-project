@extends('agents.layouts.master')
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--   <a href="{{  url('/beds') }}" class="btn fill-current add_btn">Back</a> --}}


                <div class="pb-12">
                    <div class="kt-portlet__body">
                        <div class="container">

                            <form method="POST" action="{{ route('agent.update-info') }}" class="mt-0"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="overflow-hidden layout_form">

                                        <div class=" mb-2">
                                            <div class="mt-4 ml-1 custom_room">
                                                <x-label for="name_en" :value="__(' Property Name :')"
                                                    class="fill-current text-dark ml-1" />
                                                <x-input name="name_of_property" id="name_of_property"
                                                    class="form-control" type="text"
                                                    value="{{$hotel->name_of_property}}" placeholder="Property Name :"
                                                    required autofocus />
                                            </div>

                                            <div class="mt-4 ml-1 custom_room">
                                                <x-label for="type_en" :value="__(' Type of Property :')"
                                                    class="fill-current text-dark ml-1" />
                                                <select name="property_type_id" class="form-control">
                                                    <option disabled selected>Select Type Of Property</option>
                                                    @foreach ($propertyTypes as $p )
                                                    <option value="{{ $p->id  }}" @if($hotel->property_type_id==$p->id)
                                                        selected @endif>{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class=" mb-2">
                                            <div class="mt-4 ml-1 custom_room">
                                                <x-label for="rating_en" :value="__(' Rating :')"
                                                    class="fill-current text-dark ml-1" />
                                                <select name="star_rating" class="form-control">
                                                    <option value="">Select Rating</option>
                                                    <option {{ $hotel->star_rating == "1" ? "selected" : "" }}>1
                                                    </option>
                                                    <option {{ $hotel->star_rating == "2" ? "selected" : "" }}>2
                                                    </option>
                                                    <option {{ $hotel->star_rating == "3" ? "selected" : "" }}>3
                                                    </option>
                                                    <option {{ $hotel->star_rating == "4" ? "selected" : "" }}>4
                                                    </option>
                                                    <option {{ $hotel->star_rating == "5" ? "selected" : "" }}>5
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="mt-4 ml-1 custom_room">

                                                <x-label for="contact_name" :value="__(' Contact Name :')"
                                                    class="fill-current text-dark ml-1" />
                                                <x-input name="contact_name" id="contact_name" class="form-control"
                                                    type="text" value="{{$hotel->contact_name}}"
                                                    placeholder="Contact name" required autofocus />
                                            </div>
                                        </div>


                                        <div class=" mb-2">
                                            <div class="mt-4 ml-1 custom_room">

                                                <x-label for="contact_no" :value="__(' Contact Number :')"
                                                    class="fill-current text-dark ml-1 " />
                                                <x-input id="contact_no" class="form-control" type="text"
                                                    name="contact_no" value="{{$hotel->contact_no}}"
                                                    placeholder="Contact number" required autofocus />
                                            </div>

                                            <div class="mt-4 ml-1 custom_room">

                                                <x-label for="address_en" :value="__(' Address :')"
                                                    class="fill-current text-dark ml-1" />
                                                <x-input id="address" class="form-control" type="text" name="address"
                                                    value="{{$hotel->address}}" placeholder="Address" required
                                                    autofocus />
                                            </div>
                                        </div>


                                        <div class=" mb-2">
                                            <div class="mt-4 ml-1 custom_room">
                                                <x-label for="slug_en" :value="__(' Slug Name :')"
                                                    class="fill-current text-dark ml-1" />

                                                <x-input id="slug" class="form-control" type="text" name="slug"
                                                    value="{{$hotel->slug}}" placeholder="Slug name" required
                                                    autofocus />
                                            </div>

                                            <div class="mt-4 ml-5">
                                                <x-label for="is_active" :value="__(' Is Active?')"
                                                    class="fill-current text-dark mt-2" />

                                                <label class="pl-4 pr-1">
                                                    <input type="radio" id="option3" name="is_active" value="1"
                                                        {{ ($hotel->is_active=="1")? "checked" : "" }}>
                                                    <h4 class="btn fill-current text-dark yes_value">Yes</h4>
                                                </label>

                                                <label class="pl-2 pr-4">
                                                    <input type="radio" id="option4" name="is_active" value="0"
                                                        {{ ($hotel->is_active=="0")? "checked" : "" }}>
                                                    <h4 class="btn fill-current text-dark no_value">No</h4>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="flex items-center justify-end mt-5 btn_add">

                                            <x-button class="btn btn-primary text-center add_btn">
                                                <h6 class="text-center font-weight-bold mb-0 p-1">
                                                    {{ __('Update') }}</h6>
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
