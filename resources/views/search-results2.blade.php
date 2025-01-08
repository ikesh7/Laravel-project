<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Search Results</title>
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
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-green-600 dark-green-500  sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                   
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ url('/') }}" class="ml-4 text-sm text-gray-700 underline">Home</a>
                        <a href="{{ url('/hotel-registration') }}" class="ml-4 text-sm text-gray-700 underline">List your property</a>
                        <a href="{{ route('login') }}" class="btn fill-current text-white add_btn">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn fill-current text-white add_btn ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container">
                <div class="container row">
                    <div class="col-md-12">
                        <h3 class="fill-current text-white mb-4 font-weight-bold ">Search Results ({{ count($datas) }})</h3>

                        @foreach($datas as $data)
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="font-weight-bold h5">{{ $data->name_of_property }}</label>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <ul class="col-md-12 pl-4 pr-4">
                                            <li class="row">
                                                <label class="col-md-6 font-weight-bold">({{ $data->type_of_property }})</label>
                                            </li>
                                            <li class="row">
                                                <label class="col-md-5 font-weight-normal">Contact Number</label>
                                                <label class="col-md-6">{{ $data->contact_no }}</label>
                                            </li>
                                            <li class="row">
                                                <label class="col-md-5 font-weight-normal">Contact Name</label>
                                                <label class="col-md-6">{{ $data->contact_name }}</label>
                                            </li>
                                        </ul>
                                        
                                        <!-- <label class="col-md-12 h6 font-weight-bold">Facilities</label>
                                        <ul class="col-md-12 pl-4 pr-4">
                                            <li class="row">
                                                <label class="col-md-3">Wi-Fi</label>
                                                <label class="col-md-6">Yes</label>
                                            </li>
                                        </ul> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                {{ csrf_field() }}
            </div>
        </div>
    </body>
</html>

