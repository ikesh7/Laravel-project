<x-app-layout>
    @foreach ($bookingDetails as $data)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Update Booking') }}
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
            <a href="{{  url('/bookings') }}" class="btn fill-current text-white add_btn ml-2">Back</a>
            <form method="POST" action="{{ url('/booking/update/'.$data->booking_id) }}" class="mt-4">
            {{ method_field('PUT') }}
                @csrf
                <!--  -->
                <div class="row col-md-12">
                    <div class="fill-current-700 col-md-4 font-weight-bold">Name</div>
                    <div class="fill-current text-white col-md-8">{{$data->first_name}} {{$data->last_name}}</div>
                </div>
                <div class="row col-md-12 mt-2">
                    <div class="fill-current-700 col-md-4 font-weight-bold">Gender</div>
                    <div class="fill-current text-white col-md-8">{{$data->gender}}</div>
                </div>
                <div class="row col-md-12 mt-2">
                    <div class="fill-current-700 col-md-4 font-weight-bold">Check In Date</div>
                    <div class="fill-current text-white col-md-8">{{$data->check_in}}</div>
                </div>
                <div class="row col-md-12 mt-2">
                    <div class="fill-current-700 col-md-4 font-weight-bold">Check Out Date</div>
                    <div class="fill-current text-white col-md-8">{{$data->check_out}}</div>
                </div>
                @foreach($rooms as $room)
                    <div class="row col-md-12 mt-2">
                        <div class="fill-current-700 col-md-4 font-weight-bold">Room</div>
                        <div class="fill-current text-white col-md-8">
                            {{ $room->name}}
                        </div>
                    </div>
                    <div class="row col-md-12 mt-2">
                        <div class="fill-current-700 col-md-4 font-weight-bold">Price</div>
                        <div class="fill-current text-white col-md-8">
                            Rs. {{ $room->base_price}} /-
                        </div>
                    </div>
                @endforeach

                <!-- <div class="mt-4 ml-1 custom_room">
                <x-label for="room_type_id" value="{{ __('Status') }}" class="fill-current text-white ml-1" /> -->

                    <div class="row col-md-12 mt-2">
                        <div class="fill-current-700 col-md-4 font-weight-bold">Status</div>
                        <div class="fill-current text-white col-md-8">
                            <div class="row col-md-12">
                            @foreach($bookingEvents as $beData)
                            <input type="hidden" name="eventId" value="{{$beData->id}}"/>
                                <label class="col-md-4">

                                <input type="radio"  id="option1" name="bookingEvent" {{ ($beData->status=="0")? "checked" : "" }} value="0"><h4 class="btn fill-current text-white yes_value">Pending</h4></label>

                                <label class="pl-2 pr-2 col-md-4">

                                <input type="radio" id="option2" name="bookingEvent" {{ ($beData->status=="1")? "checked" : "" }} value="1" ><h4 class="btn fill-current text-white no_value">Confirm</h4></label>

                                <label class="pl-2 pr-2 col-md-3">

                                <input type="radio" id="option3" name="bookingEvent" {{ ($beData->status=="2")? "checked" : "" }} value="2" ><h4 class="btn fill-current text-white no_value">Cancel</h4></label>
                            @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> -->

                        <x-button class="col-md-12 text-center mt-4 add_btn_service ">
                            <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Update') }}</h6>
                        </x-button>
                    
                    </div>
                

                
            <!-- </div> -->
            </form>
        </div>
    @endforeach
  
</x-app-layout>