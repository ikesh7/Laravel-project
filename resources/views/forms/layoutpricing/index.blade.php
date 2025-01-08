<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __(' ADD (Layout & Pricing') }}
        </h2>
    </x-slot>

    @if (session('fStatus'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('fStatus') }}
            </div>
            <!-- {{ session('fStatus') }}; -->
    @elseif(session('fFailed'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('fFailed') }}
        </div>
    @endif

    <div class="pb-12">
    <form method="POST" action="{{ url('layout-pricing') }}">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden layout_form">
                <div class="row">
                                    <div class="mt-4 type_room">
                        <x-input name="room_type" id="room_type" class="form-control" type="text" :value="old('room_type')" placeholder="Room Type" required />
                    </div>

                    <div class="mt-3 name_room">
                            <x-input name="room_name" id="room_name" class="form-control" type="text" :value="old('room_name')" placeholder="Room Name" required />
                    </div>
                    </div>

                <div class="row">
                
                    <div class="mt-3 custom_room">
                        <x-input name="custom_name" id="custom_name" class="form-control" type="text" :value="old('custom_name')" placeholder="Custom Room Name" required />
                    </div>

                    <div class="mt-3 capacity_room">
                        <x-input name="room_capacity" id="room_capacity" class="form-control" type="number" :value="old('room_capacity')" placeholder="Room Capacity" required />
                    </div>
                    </div>

                <div class="row">
                    <div class="mt-3 price_room">
                        

                        <x-input name="price" id="price" class="form-control" type="number" :value="old('price')" placeholder="Room Price" required />
                    </div>

                    <div class="mt-3 number_room">
                        

                        <x-input name="no_of_room" id="no_of_room" class="form-control" type="number" :value="old('no_of_room')" placeholder="Total number of Rooms" required />
                    </div>
                    </div>


                    <div class="row">
                    @foreach ($datas as $data)
                        @if($data->form_section =='1')
                        <div class="mt-3 room_label">
                                                       <x-input name="{{str_replace(' ', '_', strtolower($data->title))}}" id="{{str_replace(' ', '_', strtolower($data->title))}}" class="form-control" type="{{strtolower($data->input_type)}}" :value="old('no_of_room')" placeholder="Enter {{$data->title}}" />
                        </div>         
                            <!-- <td>{{ $data->title }}</td>                 -->
                        @endif
                    <!-- <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->title }}</td>
                    </tr> -->
                    @endforeach
                    </div>
                    <div class="flex items-center justify-end mt-4 btn_add">
                       
                        
                        <x-button class="col-md-12 text-center add_btn">
                            <h6 class="col-md-12 font-weight-bold mb-0 p-2">{{ __('Add') }}</h6>
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>