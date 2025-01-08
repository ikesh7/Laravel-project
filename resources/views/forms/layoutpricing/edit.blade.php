@foreach($datas as $data)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Layout Pricing') }}
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
            <a href="{{  url('/all-layout-pricing') }}" class="btn fill-current text-white add_btn">Back</a>
            <form method="POST" action="{{ url('/layout-pricing/edit/'.$data->id) }}">
                {{ method_field('PUT') }}
                    @csrf
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" overflow-hidden layout_form ">
                        <div class="mt-2">
                            

                            <x-input name="room_type" id="room_type" class="form-control" type="text" value="{{ $data->room_type }}" placeholder="Enter the room type" required />
                        </div>

                        <div class="mt-2">
                            

                            <x-input name="room_name" id="room_name" class="form-control" type="text" value="{{ $data->room_name }}" placeholder="Enter the room name" required />
                        </div>

                        <div class="mt-2">
                            <x-label for="custom_name" :value="__(' Custom Name')" />

                            <x-input name="custom_name" id="custom_name" class="form-control " type="text" value="{{ $data->custom_name }}" placeholder="Enter Custom Room Name" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="room_capacity" :value="__(' Room Capacity')" />

                            <x-input name="room_capacity" id="room_capacity" class="block mt-1 w-full" type="number" value="{{ $data->room_capacity }}" placeholder="Enter Room Capacity" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="price" :value="__(' Price')" />

                            <x-input name="price" id="price" class="block mt-1 w-full" type="number" value="{{ $data->price }}" placeholder="Enter Room Price" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="no_of_room" :value="__(' No. of Room')" />

                            <x-input name="no_of_room" id="no_of_room" class="block mt-1 w-full" type="number" value="{{ $data->no_of_room }}" placeholder="Enter No. of Room" required />
                        </div>

                        @foreach ($datas2 as $data2)
                            @if($data2->form_section =='1')
                            <?php 
                                // $manage = json_decode($data->others, true);
                                // var_dump($manage); 

                                // foreach($js->option as $index => $option){

                                // }

                                // for ($x = 0; $x <= count($manage); $x++) {

                                //     echo $x;

                                //     print_r($manage[0]);

                                //     // if($manage[$a])
                                //     // print($manage[0][0]);
                                // }
                            ?>
                            
                            <!-- <div class="mt-4">
                                <x-label for="{{str_replace(' ', '_', strtolower($data2->title))}}" :value="__( $data2->title )" />

                                <x-input name="{{str_replace(' ', '_', strtolower($data2->title))}}" id="{{str_replace(' ', '_', strtolower($data2->title))}}" class="block mt-1 w-full" type="{{strtolower($data2->input_type)}}" :value="old('no_of_room')" placeholder="Enter {{$data2->title}}" />
                            </div>        -->
                            
                            @endif
                        @endforeach

                        <div class="flex items-center justify-end mt-4">
                            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> -->

                            <x-button class="col-md-12 text-center">
                                <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Update') }}</h6>
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-app-layout>
@endforeach