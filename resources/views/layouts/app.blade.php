<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
    </head>
    

    <body class="font-sans antialiased body_user">

    <body class="font-sans antialiased">

        <div class="bg-gray-100">
            @include('layouts.navbar')


            <!-- Page Heading -->
            <header class="user_dash_header">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->


            <div class="container">
                <div class="row p-10  m-5 overflow-hidden first_layer">
                    <div class=" col-md-4 ">
                        <ul class="list-group">
                            <li class="list-group-item item_dashboard">
                                <a href="{{  url('/dashboard') }}" class="fill-current text-white font-weight-bold" > DASHBOARD </a>
                            </li>
                            @if (Auth::user()->hasRole('admin'))
                            <li class="list-group-item form_settings">
                                <a href="{{  url('/form-creator') }}" class="fill-current text-white font-weight-bold form_settings" > FORM SETTINGS </a>
                                <ul class="list-group mt-2">
                                    <li class="list-group-item view_form_settings">
                                        <a href="{{  url('/view-form-settings') }}" class="fill-current text-white font-weight-bolder view_settings" > View settings </a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if (Auth::user()->hasRole('agent'))
                            <li class="list-group-item form_items">
                                <a href="#" class="fill-current text-white font-weight-bold" > FORMS </a>
                                <ul class="list-group">
                                        <!-- <li class="list-group-item mt-2 layout_list">
                                            <a href="{{  url('/all-layout-pricing') }}" class="fill-current text-white font-weight-bolder layout_price" > Layout & Pricing </a>
                                        </li> -->
                                    <li class="list-group-item service_list">
                                        <a href="{{  url('/all-facilities-services') }}" class="fill-current text-white font-weight-bolder facility_service" > Facilities & Services </a>
                                    </li>
                                    <li class="list-group-item amenity_list">
                                        <a href="{{  url('/amenities') }}" class="fill-current text-white font-weight-bolder the_amenity_list"> Amenity </a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if (Auth::user()->hasRole('agent'))
                            </ul>
                            <li class="list-group-item bed_item">
                                <a href="{{  url('/beds') }}" class="fill-current text-white font-weight-bold"> BEDS </a>
                               
                            </li>
                            @endif
                            
                            @if (Auth::user()->hasRole('agent'))

                        <li class="list-group-item room_item">
                                <a href="{{  url('/rooms') }}" class="fill-current text-white font-weight-bold "> ROOMS </a>
                                <ul class="list-group">
                                    <li class="list-group-item mt-2 room_list">
                                        <a href="{{  url('/roomtype') }}" class="fill-current text-white font-weight-bolder room_type"> Room types </a>
                                    </li>
                                    <!-- <li class="list-group-item">
                                        <a href="{{  url('/facilities-services') }}" class="font-weight-bold" style="color: #666666;"> Facilities Services </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{  url('/amenities') }}" class="font-weight-bold" style="color: #666666;"> Amenity </a>
                                    </li> -->
                                </ul>
                            </li>
                            @endif
                    </div>
                    <div class=" col-md-8">
                        {{ $slot }}
                    </div>
                </div>

            </main>
        </div>

        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    </body>
</html>

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
            $('#cityL').fadeIn();  
            $('#cityList').html(data);
            $("#hotelList").hide();

          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#city_name').val($(this).text());  
        $('#cityL').fadeOut(); 
        $("#hotelList").show(); 
    });  

});
</script>
