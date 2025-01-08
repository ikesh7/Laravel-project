@extends('agents.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            {{-- <i class="kt-font-brand flaticon2-bar-chart"></i> --}}
                        </span>
                        <h3 class="kt-portlet__head-title">
                            ROOM
                        </h3>
                    </div>


                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <a href="{{  route('room.create') }}"
                                        class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Add New Room
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="destory">
                                                    <i class="kt-nav__link-icon la la-trash"></i>
                                                    <span class="kt-nav__link-text">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <table class="table table-bordered table-striped table-hover table-condensed" id="beds-table">



                        <thead>
                            <tr class="value_table">
                                <th class="text-center"> S. No.</th>
                                <th class="text-center"> NAME</th>
                                <!-- <th> Room Type</th>
                    <th> Bed Type</th>
                    <th> Capacity</th>
                    <th> Capacity (Child)</th> -->
                                <th class="text-center"> BASE PRICE</th>
                                <th class="text-center"> ACTIVE</th>
                                <th class="text-center"> ACTIONS </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)

                            <tr>
                                <td class="text-center fill-current "> {{ $loop->index + 1 }} </td>
                                <td class="text-center fill-current "> {{ $data->name }} </td>
                                <!-- <td> {{ $data->room_type_id }} </td>
                        <td> {{ $data->bed_type_id }} </td>
                        <td> {{ $data->room_capacity_adult }} </td>
                        <td> {{ $data->room_capacity_childd }} </td> -->
                                <td class="text-center fill-current "> Rs. {{ $data->base_price }} </td>
                                <td class="text-center">

                                    @if($data->is_active == 1)
                                    <label class=" font-weight-bold"><b class="fa fa-add">✓</b></label>
                                    @else
                                    <label class=" font-weight-bold"><b class="fa fa-add">X</b></label>
                                    @endif

                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        <form action="{{ route('room.destroy', $data->id)}}"
                                            id='deleteroom{{$data->id}}' method='POST'>
                                            @csrf
                                            <input type='hidden' name='_method' value='DELETE'>
                                            <a href="{{route('room.edit',$data->id)}}"
                                                class="btn p-0">
                                                <i class="fa fa-edit text-primary" title="edit Room"></i>
                                            </a>
                                            <a href="#" class="btn p-0"
                                                onclick='deleteRoom(event,{{ $data->id }} )'>
                                                <i class="fa fa-trash text-danger" title="Delete Room"></i>
                                            </a>
                                            <a class="btn p-0"
                                                href="{{ route('room.addImage',$data->id) }}"><i class="fa fa-image text-success"
                                                    title="Add Image"></i></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$datas->links()}}
                </div>
                @endsection
                @push('scripts')
                <!-- DataTables -->

                <script>
                    function deleteRoom(e, id) {
                        e.preventDefault();
                        const con = confirm('are you sure?');
                        if (con)
                            document.getElementById('deleteroom' + id).submit();
                        else
                            return false;
                    }
                </script>
                @endpush
