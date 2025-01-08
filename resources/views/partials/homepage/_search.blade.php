<div class="col-md-12">

    <h3 class=" search_head font-weight-bold">Search Hotels .The best ones. & STAY OVER !
    </h3>
    <div class="search_main ">
        <div class="form-group">
            <div class="row mx-0 px-0">
                <div class=" mr-1 ml-3 search_city_main">
                    <x-input type="text" name="city_name" id="city_name" class="form-control"
                        placeholder="Enter the city" />
                </div>


                <div class="search_city mr-1">

                    <input type="text" name="datefilter" placeholder="Check-in date : Check-out date" class="text-center" />
                    
                    </div>


                <div class="search_city_adult mr-1">
                    <select id="adults" name="number_of_adults" class="form-control h-100">
                        <option value="1">1 adult</option>
                        <option value="2">2 adults</option>
                        <option value="3"> 3 adults</option>

                        <option value="4">4 adults</option>
                        <option value="5">5 adults</option>
                        <option value="6">6 adults</option>
                        <option value="7">7 adults</option>
                        <option value="8">8 adults</option>
                        <option value="9">9 adults</option>
                        <option value="10">10 adults</option>
                        </select>


                </div>
                <div class="search_city_adult mr-1">

                    <select id="children" name="number_of_children" class="form-control  h-100">
                        <option value="0">0 child</option>
                        <option value="1">1 child</option>
                        <option value="3">3 children</option>

                        <option value="4">4 children</option>
                        <option value="5">5 children</option>
                        <option value="6">6 children</option>
                        <option value="7">7 children</option>
                        <option value="8">8 children</option>
                        <option value="9"> 9 children</option>
                        <option value="10">10 children</option>
                        </select>
                        </div>
                        <div class="search_city_adult mr-1">

                    <select id="rooms" name="number_of_rooms" class="form-control  h-100">
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


                <div class="search_city_btn ">
                    <x-button class="text-center mt-0 btn_search">
                        <h6 class="text-center font-weight-semibold mb-0 p-2">
                            {{ __('Search') }}
                        </h6>
                    </x-button>

                </div>
            </div>
        </div>
    </div>
</div>
