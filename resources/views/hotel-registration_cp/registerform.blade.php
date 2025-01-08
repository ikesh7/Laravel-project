<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

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

        

        <form method="POST" action="{{ url('hotel-registration') }}">
            @csrf

            <div class="mt-4">
                <x-label for="firstname" :value="__(' First Name')" />

                <x-input name="firstname" id="firstname" class="block mt-1 w-full" type="text" :value="old('firstname')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="lastname" :value="__(' Last Name')" />

                <x-input name="lastname" id="lastname" class="block mt-1 w-full" type="text" :value="old('lastname')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="contact_no" :value="__(' Contact Number')" />

                <x-input id="contact_no" class="block mt-1 w-full" type="text" name="contact_no" :value="old('contact_no')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="hotel_email" :value="__(' Email Address')" />

                <x-input name="hotel_email" id="hotel_email" class="block mt-1 w-full" type="email" :value="old('hotel_email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__(' Password')" />

                <x-input name="password" id="password" class="block mt-1 w-full" type="password" :value="old('password')" required autofocus />
            </div>

            <!-- Select title -->
            <div class="mt-4">
                <x-label for="property_type" value="{{ __('Type of Property:') }}" />
                <select name="property_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option >HOTEL</option>
                    <option >GUESTHOUSE</option>
                    ]<option >RESORT</option>
                    <option >HOMESTAY</option>
                </select>
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="property_name" :value="__(' Property Name')" />

                <x-input id="property_name" class="block mt-1 w-full" type="text" name="property_name" :value="old('property_name')" required autofocus />
            </div>
            
            <!-- Star Rating -->
            <div class="mt-4">
                <x-label for="star_rating" value="{{ __('Rating') }}" />
                <select name="star_rating" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                    <option >5</option>

                </select>
            </div>

            <!-- Contact Name -->
            <div class="mt-4">
                <x-label for="contact_name" :value="__(' Contact Name')" />

                <x-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name')" required autofocus />
            </div>

            <!-- Contact Number -->
            <div class="mt-4">
            <x-label for="contact_detail" value="{{ __('Contact Detail') }}" />
                <!-- <input type="integer" name="contact_name" maxlength="10"> -->
                <x-input id="contact_detail" class="block mt-1 w-full" type="text" name="contact_detail" :value="old('contact_number')" required autofocus />

            </div>

            <!-- <div class="mt-4">
                <x-label for="hotel_address" value="{{ __('Hotel Address') }}" />
                <input type="text" class="block mt-1 w-full" name="hotel_address"> 
            </div> -->
            <div class="mt-4">
                <x-label for="property_address" :value="__(' Hotel Address')" />

                <x-input id="property_address" class="block mt-1 w-full" type="text" name="property_address" :value="old('property_address')" required autofocus />
            </div>
               
               
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>