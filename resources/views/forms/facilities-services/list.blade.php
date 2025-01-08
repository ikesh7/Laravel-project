@extends('agents.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Facilities and Servicess
                        </h3>
                    </div>


                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{  route('facilities.create') }}"
                                    class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Facilities and Services
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <table class="table table-bordered table-striped table-hover table-condensed" id="beds-table">
                        <div class="pb-12">
                            <thead>
                                <tr class="value_table">
                                    <th class="text-center"> S. No.</th>
                                    <th class="text-center"> Facility</th>
                                    <th class="text-center"> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hotel->facilities as $facility)

                                <tr>
                                    <td class="fill-current  text-center"> {{ $loop->index + 1 }} </td>
                                    <td class="text-center text-capitalize">
                                        <label class=" font-weight-bold"><b class="fa fa-add">
                                                {{$facility->name}}</b></label>
                                    </td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <form action="{{ route('facilities.destroy', $facility->id)}}"
                                                id='deletefacilities{{$facility->id}}' method='POST'>
                                                @csrf
                                                <input type='hidden' name='_method' value='DELETE'>
                                                <a href="#" onclick='deleteFacilities(event,{{ $facility->id }} )'>
                                                    <h4 class="addFile btn btn-brand btn-elevate btn-icon-sm"><i
                                                            class='fa fa-trash'></i>
                                                    </h4>
                                                </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                @endsection
                @push('scripts')
                <!-- DataTables -->

                <script>
                    function deleteFacilities(e, id) {
                        e.preventDefault();
                        const con = confirm('are you sure?');
                        if (con)
                            document.getElementById('deletefacilities' + id).submit();
                        else
                            return false;
                    }
                </script>
                @endpush
