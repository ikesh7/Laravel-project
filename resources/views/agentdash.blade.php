<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL DASHBOARD</title>
</head>
<body>
<div class="flex items-center justify-end">
                <a class=" hover:text-dark-900 register" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
</body>
</html>
<x-app-layout>
    <x-slot name="header">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>     
        <h2 class="font-bold pt-1 text-xl text-white leading-tight">
            {{ __('HOTEL DASHBOARD') }}
        </h2>
    </x-slot>

   
    <x-guest-layout>
    <x-auth-card>
       <!-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-white" />
            </a>
        </x-slot>  -->

        @if(session('status'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
            </div>
            <!-- <script type="text/javascript" >
                alert({{ session('status') }});
            </script> -->
        @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('failed') }}
            </div>
        @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        



        @if(count($datas) == 0)
            <form method="POST" action="{{ url('hotel-registration') }}" class="mt-0" enctype="multipart/form-data">
                @csrf
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden layout_form">
                        <div class="mt-2 name_room">
                            

                            <x-input name="name_of_property" id="name_of_property" class="form-control" type="text" :value="old('name_of_property')" placeholder="Property name" required autofocus />
                        </div>

                        <div class="mt-3 name_room">
                            
                            <select name="type_of_property" class="form-control" placeholder="Type of property">
                                <option value="">Select Type Of Property</option>
                                <option >Hotel</option>
                                <option >Guest House</option>
                                <option >Resort</option>
                                <option >Homestay</option>
                            </select>
                        </div>

                        <div class="mt-3 name_room">
                           
                            <select name="star_rating" class="form-control">
                                <option value="">Select Rating</option>
                                <option >1</option>
                                <option >2</option>
                                <option >3</option>
                                <option >4</option>
                                <option >5</option>
                            </select>
                        </div>

                        <div class="mt-3 name_room">
                            

                            <x-input name="contact_name" id="contact_name" class="form-control" type="text" :value="old('contact_name')" placeholder="Contact name" required autofocus />
                        </div>

                        <div class="mt-3 name_room">
                            

                            <x-input id="contact_no" class="form-control" type="number" name="contact_no" :value="old('contact_no')" placeholder="Contact number" required autofocus />
                        </div>

                        <div class="mt-3 name_room">
                            

                            <x-input id="address" class="form-control" type="text" name="address" :value="old('address')" placeholder="Address" required autofocus />
                        </div>

                        <div class="mt-4 pr-1 type_room">
                            <select name="city" class="form-control mt-2 pb-0">
                                <option value="">Select City</option>
                                @foreach ($cities as $key)
                                    <option value="{{ $key->name }}"> 
                                        {{ $key->name }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mt-3 name_room">
                            

                            <x-input id="slug" class="form-control" type="text" name="slug" :value="old('slug')" placeholder="Slug name" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-label for="is_active" :value="__(' Is Active')" class="fill-current text-white"/>

                            <label class="pl-4 pr-4">
                                <input type="radio"  id="option3" name="is_active" value="1"><h4 class="btn fill-current text-white no_value">Yes</h4>
                            </label>

                            <label class="pl-4 pr-4">
                                <input type="radio" id="option4" name="is_active" value="0" ><h4 class="btn fill-current text-white no_value">No</h4>
                            </label>
                        </div>

                        <div class="mt-3 col-md-12">
                            <input type="file" name="image" class="form-control" name="Select Image"> 
                        </div>

                        <div class="mt-3 col-md-12">
                        <label class="text-white">Hotel Document</label>
                            <input type="file" name="registration_document" class="form-control" name="Select Image"> 
                        </div>

                        <div class="mt-3 col-md-12">
                            <label class="text-white"> Citizen Front</label>
                            <input type="file" name="citizen_front" class="form-control" name="Select Image"> 
                        </div>

                        <div class="mt-3 col-md-12">
                            <label class="text-white">Citizen Back</label>
                            <input type="file" name="citizen_back" class="form-control" name="Select Image"> 
                        </div>


                        <div class="flex items-center justify-end mt-4">

                            <x-button class="col-md-12 text-center">
                                <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Add') }}</h6>
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        @else
        <!-- <h1>Abcd</h1> -->
            @foreach($datas as $data)
            <div class="row col-md-12">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Type of Property :</div>
                <div class="fill-current text-white col-md-6">{{$data->type_of_property}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold"> Property Name :</div>
                <div class="fill-current text-white col-md-6">{{$data->name_of_property}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Star Rating :</div>
                <div class="fill-current text-white col-md-6">{{$data->star_rating}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Contact Name :</div>
                <div class="fill-current text-white col-md-6">{{$data->contact_name}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Contact Number :</div>
                <div class="fill-current text-white col-md-6">{{$data->contact_no}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Address :</div>
                <div class="fill-current text-white col-md-6">{{$data->address}}</div>
            </div>
            <div class="row col-md-12 mt-4">
                <div class="fill-current text-blue-700 col-md-6 font-weight-bold">Status :</div>
                <div class="col-md-6">
                    @if($data->is_active == 1)
                        <label class="text-white font-weight-bold"><b class="fa fa-add">✓</b></label>
                    @else
                        <label class="text-white font-weight-bold"><b class="fa fa-add">X</b></label>
                    @endif
                </div>
            </div>

            <a href="{{  url('/edit-info') }}" class="btn fill-current text-white add_btn mt-4 ml-3">Update</a>
           
            @endforeach
        @endif

    </x-auth-card>
</x-guest-layout>
               
</x-app-layout>
