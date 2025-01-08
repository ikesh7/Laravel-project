<x-app-layout>
    @foreach ($datas as $data)
    <!-- $selected = ''; -->
    <!-- $oldDesignation = Request::old('form_section'); -->
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $data->title }}
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
        
            <!-- $jsonArray =  json_decode($data->, true) -->
        <!-- <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->title }}</td>
        </tr> -->

            <form method="POST" action="{{ url('update-form/'.$data->id) }} ">
                {{ method_field('PUT') }}
                
                @csrf
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="mt-0">
                            <x-label for="title" :value="__(' Label')" />

                            <x-input name="title" id="title" class="block mt-1 w-full" type="text" value="{{ $data->title }}" placeholder="Enter Label" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="form_section" value="{{ __('Form Section') }}" />
                            <select name="form_section" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">Select Form Section</option>
                                <!-- <option value="1">Layout Pricing</option>
                                <option value="2">Facilities Services</option> -->

                                <option value="1" {{ $data->form_section == 1 ? 'selected' : '' }}>Layout Pricing</option>
                                <option value="2" {{ $data->form_section == 2 ? 'selected' : '' }}>Facilities Services</option>
                                <option value="3" {{ $data->form_section == 3 ? 'selected' : '' }}>Amenity</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="input_type" value="{{ __('Input Type') }}" />
                            <select name="input_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">Select Input Type</option>
                                <option value="Text" {{ $data->input_type == "Text" ? 'selected' : '' }}>Text</option>
                                <option value="Number" {{ $data->input_type == "Number" ? 'selected' : '' }}>Number</option>
                                <option value="Email" {{ $data->input_type == "Email" ? 'selected' : '' }}>Email</option>
                                <option value="Select Option" {{ $data->input_type == "Select Option" ? 'selected' : '' }}>Select Option</option>
                                <option value="Checkbox" {{ $data->input_type == "Checkbox" ? 'selected' : '' }}>Checkbox</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> -->

                            <x-button class="col-md-12 text-center">
                                <h6 class="col-md-12 text-center font-weight-bold mb-0 p-2">{{ __('Update') }}</h6>
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        
        </div>
    @endforeach
</x-app-layout>