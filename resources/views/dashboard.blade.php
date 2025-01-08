<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('ADMIN DASHBOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="fill-current text-white overflow-hidden layout_form  mb-0 p-2 text-center">
                    You're logged in as an administrator. 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
