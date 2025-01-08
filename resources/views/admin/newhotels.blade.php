@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-8 px-2">
        <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet kt-portlet--mobile ">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon">
                                </span>
                                <h3 class="kt-portlet__head-title">
                                    New Hotel Registrations
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <table class="table table-bordered table-striped table-hover table-condensed"
                                id="beds-table">
                                <div class="pb-12">
                                    <thead>
                                        <tr class="value_table">
                                            <th class="text-center"> S. No.</th>
                                            <th class="text-center"> Hotel Name</th>
                                            <th class="text-center"> Type of property</th>
                                            <th class="text-center"> Validation</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)

                                        <tr>
                                            <td class="fill-current  text-center"> {{ $loop->index + 1 }} </td>
                                            <td class="text-center text-capitalize">
                                                <label class=" font-weight-bold"><b class="fa fa-add">
                                                        {{$data->name_of_property}}</b></label>
                                            </td>
                                            <td class="text-center text-capitalize">
                                                <label class=" font-weight-bold"><b class="fa fa-add">
                                                        {{$data->property_type_id}}</b></label>
                                            </td>
                                            <td class="text-center text-capitalize">
                                                <label class=" font-weight-bold"><b class="fa fa-add">
                                                        {{$data->is_active}}</b></label>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/hoteldetails',$data->id)}}">
                                                    <h4 class="addFile btn btn-brand btn-elevate btn-icon-sm">Details
                                                    </h4>
                                                </a>


                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-4">
                    </div>
                </div>

                @endsection

                @push('styles')
                @endpush

                @push('scripts')
                @endpush
