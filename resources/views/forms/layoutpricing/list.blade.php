<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Layout & Pricing') }}
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
        <a href="{{  url('/layout-pricing') }}" class="btn fill-current text-white add_btn">Add Layout & Pricing</a>
        <table class="table mt-4 col-md-14">
            <thead>
                <tr class="value_table">
                    <th class="text-center"> S. No.</th>
                    <th class="text-center"> Room</th>
                    <th class="text-center"> Room type</th>
                    <th class="text-center"> Capacity</th>
                    <th class="text-center"> Price</th>
                    <th class="text-center"> Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                    
                    <tr>
                        <td class="fill-current text-white text-center"> {{ $loop->index + 1 }} </td>
                        <td class="fill-current text-white text-center"> {{ $data->room_name }} </td>
                        <td class="fill-current text-white text-center"> {{ $data->room_type }} </td>
                        <td class="fill-current text-white text-center"> {{ $data->room_capacity }} </td>
                        <td class="fill-current text-white text-center"> Rs. {{ $data->price }} </td>
                        <td>
                            <div class="row justify-content-center">
                                <a href="{{url('layout-pricing/edit/'.$data->id)}}" class="mr-3"><h4 class="btn fill-current text-white add_btn">Edit</h4></a>
                                <a href="{{url('layout-pricing/delete/'.$data->id)}}"><h4 class="btn fill-current text-white add_btn">Delete</h4></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>