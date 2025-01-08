<x-guest-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/">Home <span class="fa fa-angle-right ml-2"></span> </a></li>
            <li class="breadcrumb-item"><a href="/hotel/{{$hotelSlug}}">{{ $hotelName }} <span
                        class="fa fa-angle-right ml-2"></span></a></li>
            <li class="breadcrumb-item active" aria-current="page">Rooms</li>
        </ol>
    </nav>

    <div class="row mx-0 px-0 search_container">


        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <form>
                        <div class="form_container">
                            <label for="search" class="h5 font-weight-500 text-white ml-1 ">Search</label>
                            <div class="form-group mr-1">
                                <label for="destination"
                                    class="h6 text-white font-weight-normal ml-1 mt-2 mb-0">Property name /
                                    Destination</label>
                                <input type="destination" class="form-control w-100" id="destination1"
                                    placeholder="Pokhara">
                            </div>

                            <div class="form-data mb-2">
                                <label for="date" class="h6 text-white font-weight-normal ml-1 mb-0">Check-in
                                    date</label>
                                <input type="date" name="date_of_arrival" class="form-control">
                            </div>

                            <div class="form-data mb-4">
                                <label for="date" class="h6 text-white font-weight-normal ml-1 mb-0">Check-out
                                    date</label>
                                <input type="date" name="date_of_departure" class="form-control">
                            </div>


                            <select id="adults" name="number_of_adults" class="form-control mb-1">
                                <option>1 adult</option>
                                <option>2 adults</option>
                                <option>3 adults</option>

                                <option>4 adults</option>
                                <option>5 adults</option>
                                <option>6 adults</option>
                                <option>7 adults</option>
                                <option>8 adults</option>
                                <option>9 adults</option>
                                <option>10 adults</option>
                            </select>

                            <div class="row">
                                <div class="col-md-6 mb-3 w-50 pr-2">
                                    <select name="number_of_children" class="form-control">
                                        <option>1 child</option>
                                        <option>2 children</option>
                                        <option>3 children</option>

                                        <option>4 children</option>
                                        <option>5 children</option>
                                        <option>6 children</option>
                                        <option>7 children</option>
                                        <option>8 children</option>
                                        <option>9 children</option>
                                        <option>10 children</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3 w-50 pl-2">
                                    <select name="number_of_rooms" class="form-control">
                                        <option>1 room</option>
                                        <option>2 rooms</option>
                                        <option>3 rooms</option>

                                        <option>4 rooms</option>
                                        <option>5 rooms</option>
                                        <option>6 rooms</option>
                                        <option>7 rooms</option>
                                        <option>8 rooms</option>
                                        <option>9 rooms</option>
                                        <option>10 rooms</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label h6 text-white font-weight-normal ml-2 mb-3"
                                    for="exampleCheck1">Travelling for work ?</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </form>
                </div>



                <div class="col-md-12">
                    <form>
                        <div class="filter_container mt-4">

                            <div class="health_measure mt-2">
                                <div class="map-responsive m-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                        width="194" height="180" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-9">

            <h3 class=" font-weight-bold text-end my-5 " style="color: rgb(0, 119, 255);">
                {{$hotelName}} :
                {{ count($rooms) }} Rooms
            </h3>

            @foreach ($rooms as $room)

            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters p-3">
                    <div class="col-md-2">
                        <img src="https://image.freepik.com/free-vector/kid-boy-room-interior-illustration-modern-bedroom-furniture-blue-scandinavian-style_33099-691.jpg" height="120" class="card-img"
                            alt="{{ $hotelImg }}">
                    </div>
                    <div class="col-md-10">
                        <div class="mx-5 d-flex flex-row">
                            <h6 href="#" class="col-md-6 card-title h5 font-weight-bold"
                                    style="color: rgb(0, 119, 255);">{{ $room->name }}
                            </h6>

                            <h5 class="col-md-6 text-right font-weight-bold" style="color: rgb(0, 119, 255);">
                                Rs. {{ $room->base_price }} /-
                            </h5>
                        </div>
                        <div class="mx-5 d-flex flex-row">
                            <h6 class="col-md-12 font-weight-bold">
                                <label>Room Type: 
                                @foreach ($roomTypes as $roomType)

                                    @if($room->room_type_id == $roomType->id)

                                        {{ $roomType->name_en}}

                                    @endif

                                @endforeach
                                </label>
                                
                            </h6>
                        </div>
                        <div class="mx-5 d-flex flex-row">
                            <h6 class="col-md-12 font-weight-bold">
                                <label>Beds: 
                                @foreach ($bedTypes as $bedType)

                                    @if($room->bed_type_id == $bedType->id)

                                        {{ $bedType->name_en}}

                                    @endif

                                @endforeach
                                </label>
                                
                            </h6>
                        </div>
                        <div class="mx-5 d-flex flex-row">
                            <h6 class="col-md-12 font-weight-bold">
                                <label>
                                    Room Capacity: Child ({{$room->room_capacity_child}}), Adults ({{$room->room_capacity_adult}})
                                </label>
                                
                            </h6>
                        </div>

                        <div class=" mx-5 d-flex flex-row">
                        <form method="POST" action="{{ url('book/confirm/'.$room->hotel_id)}}" class="mt-0" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="roomId" value="{{$room->id}}"/>
                            <input type="hidden" name="hotelId" value="{{$room->hotel_id}}"/>
                            <input type="hidden" name="basePrice" value="{{$room->base_price}}"/>

                            <!-- <a href="{{url('book/confirm/'.$room->hotel_id)}}" class="btn btn-primary text-white font-weight-normal ml-auto">
                                Book
                            </a> -->
                            <x-button class="btn btn-primary text-white font-weight-normal ml-auto">
                                <h6 class="text-center font-weight-bold mb-0 p-2 ml-auto">{{ __('Book') }}</h6>
                            </x-button>
                        </form>

                            
                        </div>
                       
                        

                    </div>
                </div>
            </div>



            @endforeach
           
            
        </div>

    </div>
</x-guest-layout>
