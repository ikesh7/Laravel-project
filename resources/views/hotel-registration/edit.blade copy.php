
@foreach($datas as $data)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('HOTEL DASHBOARD - UPDATE') }}
        </h2>
    </x-slot>

    @if (session('fmsg'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('fmsg') }}
        </div>
    @endif

    <div class="pb-12">
        <a href="{{  url('/dashboard') }}" class="btn fill-current text-white add_btn ml-4 mb-2">Back</a>
        
        <form method="POST" action="{{ url('edit-info') }}" >
            {{ method_field('PUT') }}
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden layout_form">
                    
                <div class="row mb-2">    
                    <div class="mt-4 ml-1 custom_room">
                    <x-label for="name_en" :value="__(' Property Name :')" class="fill-current text-white ml-1" />
                        <x-input name="name_of_property" id="name_of_property" class="form-control" type="text" value="{{$data->name_of_property}}" placeholder="Property Name :" required autofocus />
                    </div>

                    <div class="mt-4 ml-1 custom_room">
                    <x-label for="type_en" :value="__(' Type of Property :')" class="fill-current text-white ml-1" />
                        <select name="type_of_property" class="form-control">
                            <option value="">Select Type Of Property</option>
                            <!-- <option >Hotel</option>
                            <option >Guest House</option>
                            <option >Resort</option>
                            <option >Homestay</option> -->
                            <option {{ $data->type_of_property == "Hotel" ? "selected" : "" }}> Hotel </option>
                            <option {{ $data->type_of_property == "Guesthouse" ? "selected" : "" }}> Guesthouse </option>
                            <option {{ $data->type_of_property == "Resort" ? "selected" : "" }}> Resort </option>
                            <option {{ $data->type_of_property == "Homestay" ? "selected" : "" }}> Homestay </option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                                    <div class="mt-4 ml-1 custom_room">
                                    <x-label for="rating_en" :value="__(' Rating :')" class="fill-current text-white ml-1" />
                        <select name="star_rating" class="form-control">
                            <option value="">Select Rating</option>
                            <option {{ $data->star_rating == "1" ? "selected" : "" }}>1</option>
                            <option {{ $data->star_rating == "2" ? "selected" : "" }}>2</option>
                            <option {{ $data->star_rating == "3" ? "selected" : "" }}>3</option>
                            <option {{ $data->star_rating == "4" ? "selected" : "" }}>4</option>
                            <option {{ $data->star_rating == "5" ? "selected" : "" }}>5</option>
                        </select>
                    </div>

                    <div class="mt-4 ml-1 custom_room">
                        
                    <x-label for="contact_en" :value="__(' Contact Name :')" class="fill-current text-white ml-1" />
                        <x-input name="contact_name" id="contact_name" class="form-control" type="text" value="{{$data->contact_name}}" placeholder="Contact name" required autofocus />
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="mt-4 ml-1 custom_room">
                        
                    <x-label for="contact_en" :value="__(' Contact Number :')" class="fill-current text-white ml-1 " />
                        <x-input id="contact_no" class="form-control" type="number" name="contact_no" value="{{$data->contact_no}}" placeholder="Contact number" required autofocus />
                    </div>

                    <div class="mt-4 ml-1 custom_room">
                        
                    <x-label for="address_en" :value="__(' Address :')" class="fill-current text-white ml-1" />
                        <x-input id="address" class="form-control" type="text" name="address" value="{{$data->address}}" placeholder="Address" required autofocus />
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="mt-4 ml-1 custom_room">
                    <x-label for="slug_en" :value="__(' Slug Name :')" class="fill-current text-white ml-1" />    

                        <x-input id="slug" class="form-control" type="text" name="slug" value="{{$data->slug}}" placeholder="Slug name" required autofocus />
                    </div>

                    <div class="mt-4 ml-5">
                        <x-label for="is_active" :value="__(' Is Active?')" class="fill-current text-white mt-2" />

                        <label class="pl-4 pr-1">
                            <input type="radio"  id="option3" name="is_active" value="1" {{ ($data->is_active=="1")? "checked" : "" }}><h4 class="btn fill-current text-white yes_value">Yes</h4>
                        </label>

                        <label class="pl-2 pr-4">
                            <input type="radio" id="option4" name="is_active" value="0" {{ ($data->is_active=="0")? "checked" : "" }}><h4 class="btn fill-current text-white no_value">No</h4>
                        </label>
                    </div>

                </div>
                    <div class="flex items-center justify-end mt-5 btn_add">

                        <x-button class="col-md-12 text-center add_btn">
                            <h6 class="col-md-12 text-center font-weight-bold mb-0 p-1">{{ __('Add') }}</h6>
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</x-app-layout>
@endforeach