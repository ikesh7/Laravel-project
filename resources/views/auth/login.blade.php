<x-guest-layout>
    <x-auth-card>


        <!-- Session Status -->
        <section class="login">
            <div class="container">
                <div class="row">



                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />


                    <div class="col-lg-7 py-5 text-center log mx-auto">
                        <form class="pt-4" method="POST" action="{{ route('login') }}">
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <h1> SIGN IN</h1>
                                </div>
                                @csrf

                                <div class="col-8 mx-auto">
                                    <!-- Email Address -->
                                    <div class="mt-5">
                                        <x-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" placeholder="Email address" required autofocus />
                                    </div>
                                </div>

                                <div class="col-8 mx-auto">
                                    <div class="mt-4">
                                        <x-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" placeholder="Password" />
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="mt-4 rem_me">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class=" text-sm font-weight-normal text-white">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="for1">
                                        <div class="col-sm">
                                            @if (Route::has('password.request'))
                                                <a class=" fill-current text-white hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="mx-auto">
                                    <x-button class="but1">
                                        {{ __('Login') }}
                                    </x-button>

                                </div>

                            </div>
                    </div>







                    <br>



                    <br>



                </div>
                </form>
            </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


    </x-auth-card>
</x-guest-layout>
