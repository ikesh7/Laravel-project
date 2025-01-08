<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('VIEW FORM') }}
        </h2>
    </x-slot>

    @if (session('dStatus'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('dStatus') }}
            </div>
            <!-- {{ session('fStatus') }}; -->
    @elseif(session('fFailed'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('fFailed') }}
        </div>
    @endif

    <div class="pb-12">
    @foreach ($datas as $data)
        <!-- $jsonArray =  json_decode($data->, true) -->
    <!-- <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->title }}</td>
    </tr> -->
    @endforeach
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center search_head"> S. No.</th>
                    <th class="text-center search_head"> Title</th>
                    <th class="text-center search_head"> Input Type  </th>
                    <th class="text-center search_head"> Table  </th>
                    <th class="text-center search_head"> Actions  </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                    
                    <tr>
                        <td> {{ $loop->index + 1 }} </td>
                        <td> {{ $data->title }} </td>
                        <td> {{ $data->input_type }} </td>
                        <td> 
                            @if($data->form_section =='1')
                                {{ __('Layout Pricing') }}
                            @elseif ($data->form_section =='2')
                                {{ __('Facilities Services') }}
                            @elseif ($data->form_section =='3')
                                {{ __('Amenity') }}
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <a href="{{url('view-form-settings/update/'.$data->id)}}" class="mr-5"><span class="fa fa-add">Edit</span></a>
                                <a href="{{url('view-form-settings/delete/'.$data->id)}}"><span class="fa fa-add">Delete</span></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>