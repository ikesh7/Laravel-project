<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
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


    <div class="card-header">My profile</div>
    <div class="body">
        <form action= "{{route ('profile') }}">
    
    </div>
</x-app-layout>