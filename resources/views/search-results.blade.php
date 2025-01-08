<x-guest-layout>
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
                            <label class="h5 text-white font-weight-semibold mt-2">Filter by : </label>
                            <div class="health_measure">
                                <label for="health_measure"
                                    class="h6 text-white font-weight-semibold mt-2 ml-2 mb-3">Health &
                                    Safety</label><br>
                                <input type="checkbox" id="health_measure" name="health_measures" value="1"
                                    class="ml-2 mr-1">
                                <label for="health_measure" class="text-white mb-3">Health & safety measures</label>


                            </div>
                            <div class="health_measure mt-2">
                                <label class="h6 text-white font-weight-semibold mt-2 ml-2 mb-3">Popular Filters
                                </label>

                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="three_star" class="ml-2 mr-1">
                                    <label for="three_star">3 Stars</label>

                                </div>

                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="hotel" class="ml-2 mr-1">
                                    <label for="hotel">Hotels</label>
                                </div>
                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="free_wifi" class="ml-2 mr-1">
                                    <label for="free_wifi"> Free Wifi</label>
                                </div>
                                <div class="form-data text-left text-white ">
                                    <input type="checkbox" id="fitness_center" class="ml-2 mr-1">
                                    <label for="fitness_center">Fitness Center</label>

                                </div>
                                <div class="form-data text-left text-white mb-2">
                                    <input type="checkbox" id="bar" class="ml-2 mr-1">
                                    <label for="bar">Bar</label>
                                </div>
                            </div>




                            <div class="health_measure mt-2">
                                <label class="h6 text-white font-weight-semibold mt-2 ml-2 mb-3">Star Ratings
                                </label>


                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="one_star" class="ml-2 mr-1">
                                    <label for="one_star">1 Star</label>
                                </div>

                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="two_stars" class="ml-2 mr-1">
                                    <label for="two_stars"> 2 Stars</label>
                                </div>
                                <div class="form-data text-left text-white ">
                                    <input type="checkbox" id="three_stars" class="mr-1 ml-2">
                                    <label for="three_stars">3 Stars</label>
                                </div>
                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="four_stars" class="ml-2 mr-1">
                                    <label for="four_stars">4 Stars</label>
                                </div>
                                <div class="form-data text-left text-white mb-2">
                                    <input type="checkbox" id="no_stars" class="mr-1 ml-2">
                                    <label for="no_stars"> No Stars</label>
                                </div>




                            </div>
                            <div class="health_measure mt-2">

                                <label class="h6 text-white font-weight-semibold mt-2 ml-2 mb-3">Property Type
                                </label>
                                @foreach ($propertyTypes as $p )

                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="property_{{$p->id}}" class="mr-1 ml-2">
                                    <label for="property_{{$p->id}}">{{ $p->name }}</label>
                                </div>
                                @endforeach


                            </div>

                            <div class="health_measure mt-2">
                                <label class="h6 text-white font-weight-semibold mt-2 ml-2 mb-3">Facilities & Services
                                </label>
                                @foreach ($facilities as $facility)

                                <div class="form-data text-left text-white">
                                    <input type="checkbox" id="{{ $facility->slug }}" value="{{ $facility->id}}"
                                        class="mr-1 ml-2">
                                    <label for="{{ $facility->slug }}"
                                        class="text-capitalize">{{ $facility->name }}</label>
                                </div>
                                @endforeach

                            </div>

                            <div class="health_measure mt-2">
                                <div class="map-responsive m-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                        width="194" height="180" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br>

                </div>
                </form>
            </div>

        </div>



        <div class="col-md-9">

            <h3 class=" font-weight-bold text-end my-5 " style="color: rgb(0, 119, 255);">Pokhara : Properties found :
                {{ $rooms->total() }}</h3>
            @foreach ($rooms as $room)
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters p-3">
                    <div class="col-md-4">
                        <img src="{{ $room->hotel->getFirstMediaUrl('gallery', 'thumb') }}" width="300" height="250" class="card-img"
                            alt="{{ $room->hotel->name_of_property }}">
                    </div>
                    <div class="col-md-8">
                        <div class="mx-5 d-flex flex-row">
                            <div style="max-width: 75%;">
                                <a href="#" class="card-title h5 font-weight-bold"
                                    style="color: rgb(0, 119, 255);">{{ $room->hotel->name_of_property }}</a>
                                <span class="fa fa-star ml-2 text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star-half-empty text-warning"></span>

                                <a href="#">
                                    <h6 class="font-weight-bold" style="color: rgb(0, 119, 255);">Show on map <span
                                            class="text-muted ml-2 font-weight-normal">1.7 kms from
                                            {{$room->hotel->address}}, {{ $room->hotel->city->name_en }}</span>
                                    </h6>
                                </a>
                                <p class="card-text"> {{ $room->hotel->details }}
                                </p>
                                {{-- <p class="card-text"><small class="text-success">Booked 5 times in last 24 hours</small>
                                </p> --}}
                            </div>
                            <div class="justify-content-end">
                                @if($room->reviews)
                                <a href="{{ route('search.details',$room->hotel->slug) }}" class="">
                                    <h5 class="text_good">Good <span class="badge text-white p-2"
                                            style="background: rgb(0, 119, 255);">7.8</span>
                                        <h6 class="text-muted text_good"> 94 reviews</h6>
                                    </h5>
                                </a>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('search.details',$room->hotel->slug) }}"
                            class="btn text-white font-weight-normal ml-5 mt-2"
                            style="background: rgb(0, 119, 255);">Price &
                            Availability
                            <span class="fa fa-angle-double-right text-white ml-2 "></span> </a>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $rooms->links() }}
        </div>
    </div>

</x-guest-layout>
