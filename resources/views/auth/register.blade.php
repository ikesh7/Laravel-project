<x-guest-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('register') }}" method="post">
        @csrf
        <main>
            <div class="stepper">
                <div class="step--1 step-active">Step 1</div>
                <div class="step--2">Step 2</div>
                <div class="step--3">Step 3</div>

            </div>
            <div class="form form-active">
                <div class="form--header-container">
                    <h1 class="form--header-title">
                        Personal Information
                    </h1>

                    <p class="form--header-text">
                        Please provide your personal details.
                    </p>
                </div>

                <select name="title" class="form-control title_reg">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                </select>

                <x-input id="name" class="form-control" type="text" name="first_name" :value="old('name')"
                    placeholder="First name" required autofocus />

                <x-input id="name" class="form-control" type="text" name="last_name" :value="old('name')"
                    placeholder="Last name" required autofocus />

                <select name="gender" class="form-control title_regi">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>

                </select>

                <input type="date" name="date_of_birth" class="form-control title_regi">


                <input type="tel" class="form-control title_regi" name="contact_no" placeholder="Phone number" />



                <button class="form__btn" id="btn-1">Next</button>
            </div>
            <div class="form">
                <div class="form--header-container">
                    <h1 class="form--header-title">
                        Personal Address
                    </h1>

                    <p class="form--header-text">
                        Please provide your personal address.
                    </p>
                </div>

                

                <input type="text" class="form-control" name="street_address" placeholder="Street address"
                    ::value="old('street_address')" required>

                <input type="int" class="form-control title_regi" name="zip_code" placeholder="Zip Code"
                    ::value="old('zipcode')" required>

                <select name="city" class="form-control title_regi">
                    <option value="">Select City</option>
                    @foreach ($cities as $key)
                    <option value="{{ $key->id }}">
                        {{ $key->name_en }}
                    </option>
                    @endforeach
                </select>

                <select name="province" class="form-control title_regi">
                    <option>Province 1</option>
                    <option>Province 2</option>
                    <option>Province 3</option>
                    <option>Province 4</option>
                    <option>Province 5</option>
                    <option>Province 6</option>
                    <option>Province 7</option>

                </select>
                <input type="text" class="form-control title_regi" name="country" placeholder="Country">

                <button class="form__btn" id="btn-2-prev">Previous</button>
                <button class="form__btn" id="btn-2-next">Next</button>
            </div>
            <div class="form">
                <div class="form--header-container">
                    <h1 class="form--header-title">
                        Account & User Type
                    </h1>

                    <p class="form--header-text">
                        Please provide your e-mail & user type.
                    </p>
                </div>
                <x-input id="email" type="email" class="form-control title_regi" name="email" :value="old('email')"
                    placeholder="Email address" required />

                <x-input id="password" class="form-control title_regi" type="password" name="password" required
                    autocomplete="new-password" placeholder="Password" />

                <x-input id="password_confirmation" class="form-control title_regi" type="password"
                    name="password_confirmation" placeholder="Confirm password" required />

                <select name="user_type" class="form-control title_regi">
                    <option value="">*Select Role*</option>
                    <option value="3">User</option>
                    <option value="2">Hotel</option>
                    <!-- <option value="1">Admin</option> -->

                </select>
                <button class="form__btn" id="btn-2-prev">Previous</button>
                <button class="form__btn" id="btn-3">Register</button>
            </div>

        </main>
    </form>

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

    <!-- Validation Errors -->

    <x-slot name="tail">
        <script src="{{ asset('js/register.js') }}">
        </script>
    </x-slot>
</x-guest-layout>
