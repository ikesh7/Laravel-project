
<x-app-layout>

   
     <x-slot name="header">
        <div class="head2"> 
            {{ __('USER DASHBOARD') }}
            </div>
    </x-slot>
    

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a user !
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="city_name" id="city_name" class="form-control input-lg" placeholder="Search City" />
            <div id="cityList">
            </div>
        </div>
        {{ csrf_field() }}
    </div> -->

    <div class="container">
        <form method="POST" action="{{ url('search-results') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-4 font-weight-bold fill-current text-white">Search Hotel</h3>
                    <div class="form-group">
                        <div class="col-md-12 pl-0 pr-0">
                            <x-input type="text" name="city_name" id="city_name" class="form-control form-control-lg" placeholder="Search City" />
                            <!-- <x-input id="name" class="lastname" type="text" name="last_name" :value="old('name')" placeholder="Last name" required autofocus /> -->
                            <div id="cityList">
                            </div>
                        </div>

                        <div class="w-100 mt-3">
                            <label class="font-weight-bold text-white">Arrival Date</label>
                            <x-input type="date" name="date_of_arrival" id="date_of_arrival" class="form-control form-control-lg" placeholder="Arrival Date" />
                        </div>
                        <div class="w-100 mt-3">
                            <label class="font-weight-bold text-white">Departure Date</label>
                            <x-input type="date" name="date_of_departure" id="date_of_departure" class="form-control form-control-lg" placeholder="Departure Date" />
                        </div>
                        <!-- <div class="w-100 mt-3">
                            <label class="font-weight-bold text-white">PAX</label>
                            <x-input type="int" name="pax" id="pax" class="form-control form-control-lg" placeholder="PAX" />
                        </div> -->
                        <div class="w-100 mt-3">
                            <label class="font-weight-bold text-white">Capacity(Adults)</label>
                            <x-input type="number" name="capacity_adult" id="capacity_adult" class="form-control form-control-lg" placeholder="Capacity(Adults)" />
                        </div>
                        <div class="w-100 mt-3">
                            <label class="font-weight-bold text-white">Capacity(Child)</label>
                            <x-input type="number" name="capacity_child" id="capacity_child" class="form-control form-control-lg" placeholder="Capacity(Adults)" />
                        </div>
                        <!-- <div class="w-25 p-0"> -->
                        
                        <!-- <input type="int" class="form-control" name="pax" placeholder="PAX">  -->
                    </div>
                </div>

                <!--  -->

                <div class="col-md-14 btn_add">
                <x-button class="col-md-14 text-center mt-2 add_btn">
                    <h6 class="col-md-14 text-center font-weight-bold mb-0 p-2">{{ __('Search') }}</h6>
                </x-button>
                </div>
            </div>
        </form>
        {{ csrf_field() }}
    </div>
</x-app-layout>

<script>
$(document).ready(function(){

 $('#city_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#cityList').fadeIn();  
                    $('#cityList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#city_name').val($(this).text());  
        $('#cityList').fadeOut();  
    });  

});
</script>
