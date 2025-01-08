<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header text-white bg-info">
                            <h5>Hotel registration<h5>
                        </div>
                        <div class="card-body">
                            <form class="contact-form ">
                            @csrf
                            <div class="form-section">
                                <label form=""
                            </div>
                            </form>
                        </div>
                    
                    </div>
                </div>
             </div>
        </div>
    </x-auth-card>
</x-guest-layout>