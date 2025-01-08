<x-guest-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/">Home <span class="fa fa-angle-right ml-2"></span> </a></li>
            <li class="breadcrumb-item"><a href="{{ route('search') }}">Search Results <span
                        class="fa fa-angle-right ml-2"></span></a></li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
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
                        <br>

                </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">

            <div class=" d-flex justify-content-between">
                <div class=" mt-5">
                    <h4 class=" font-weight-bold text-dark"> <span class="badge badge-primary "
                            style="font-size:10px">Hotel</span>
                        {{ $hotel->name_of_property }}
                        <i class="fa fa-star ml-2 text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star-half-empty text-warning"></i>


                    </h4>
                </div>
                <div class=" mt-5">

                    <a href="#"> <i class="fa fa-heart text-primary " style="font-size:20px"></i> </a> <a href=""> <i
                            class="fa fa-share-alt text-primary mr-3 ml-3" style="font-size:20px"></i> </a>
                    <a href="{{url('book/rooms/'.$hotel->id)}}" class="btn btn-primary text-white font-weight-normal p-2">
                        Reserve
                    </a>
                </div>
            </div>
            <h5 class="text-dark "> <i class="fa fa-map-marker-alt text-primary" style="font-size:20px"></i>
                {{$hotel->address}}, {{ $hotel->city->name_en }} - <a href="#" class="badge badge-primary text-white font-weight-normal">Locate on
                    map</a> </h5>



            @include('partials.details._gallery', ['gallery' => $hotel->getMedia('gallery')])
            @include('partials.details._detailsinfo', ['hotel' => $hotel])
            @include('partials.details._facilities', ['facilities' => $hotel->facilities])

            @include('partials.details._availability', ['hotel' => $hotel])
            @include('partials.details._room', ['hotel' => $hotel])
            <div class="card p-2 text-center mt-2" style=" height: 3rem;">
                <span class="fa fa-credit-card text-muted"></span> No credit card needed to book. We'll send you
                an email confirming your reservation.
            </div>
            @include('partials.details._reviews', ['reviews' => $reviews ?? []])
        </div>
    </div>
</x-guest-layout>
