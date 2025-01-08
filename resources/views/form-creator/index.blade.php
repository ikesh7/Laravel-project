<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('FORM CREATOR') }}
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
        <form method="POST" action="{{ url('form-creator') }}">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden layout_form">
                    
                    <div class="mt-2 price_room_update">
                        <x-label for="title" :value="__(' Label :')" class="fill-current text-white ml-1"/>

                        <x-input name="title" id="title" class="form-control" type="text" :value="old('title')" placeholder="Enter Label" required />
                    </div>
                    
                    <br>
                    <div class="mt-4 price_room_update">
                        <x-label for="form_section" value="{{ __('Form Section :') }}" class="fill-current text-white ml-1" />
                        <select name="form_section" class="form-control">
                            <option value="">Select Form Section</option>
                            <option value="1">Layout & Pricing</option>
                            <option value="2">Facilities & Services</option>
                            <option value="3">Amenity</option>
                            <!-- <option value="3">Email</option>
                            <option value="1">Select Option</option>
                            <option value="1">Checkbox</option> -->
                        </select>
                    </div>
                    <br>
                    <div class="mt-4 price_room_update">
                        <x-label for="input_type" value="{{ __('Input Type :') }}" class="fill-current text-white ml-1"/>
                        <select name="input_type" class="form-control">
                            <option value="">Select Input Type</option>
                            <option >Text</option>
                            <option >Number</option>
                            <option >Email</option>
                            <option >Select Option</option>
                            <option >Checkbox</option>
                        </select>
                    </div>
                    <br> <br>
                    <div class="flex items-center justify-end mt-4 btn_add">
                        <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> -->

                        <x-button class="col-md-12 text-center add_btn">
                            <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Add') }}</h6>
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>