<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Confirm Booking</title>
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
                   
                        <a href="{{ url('/dashboard') }}" class=" btn fill-current text-white add_btn">Dashboard</a>
                    @else
                        <a href="{{ url('/') }}" class="btn fill-current text-white add_btn">Home</a>
                        <a href="{{ url('/hotel-registration') }}" class="btn fill-current text-white add_btn">List your property</a>
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
                        <h3 class="fill-current text-blue-300 mt-5 font-weight-bold "><span>Confirm Booking</span></h3>

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
                        
                    </div>
                </div>
                {{ csrf_field() }}
            </div>
        </div>
        <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
     <footer>
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">Peakhotels.</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li>Home</li>
                             <li>List Your Property</li>
                             <li>Blog</li>
                            
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                         <p class="mb-1">Pingalasthan, Gaushala</p>
                         <p>KATHMANDU, NEPAL</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Peakhotels All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text"><b>RAM THAPA</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> ramthapa@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>RAJESH HAMAL</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> rajeshhamal@gmail.com</small>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
    </body>
</html>

