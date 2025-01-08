@extends('admin.layouts.master')
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
                            Hotels
                        </h3>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <table class="table table-bordered table-striped table-hover table-condensed" id="hotels-table">
                        <div class="pb-12">
                            <thead>
                                <tr class="value_table">
                                    <th> S. No.</th>
                                    <th> Hotel Name</th>
                                    <th> Type of property</th>
                                    <th> Is active</th>
                                    <th> Details</th>
                                </tr>
                            </thead>

                    </table>
                </div>

            </div>
            <div class="col-4">
            </div>
        </div>

        @endsection
        @push('styles')
        <link rel="stylesheet" href="/vendors/custom/datatables/datatables.bundle.min.css">
        @endpush

        @push('scripts')
        <!-- DataTables -->
        <script src="/vendors/custom/datatables/datatables.bundle.js"></script>
        <script>
            function deleteHotel(e, id) {
            e.preventDefault();
            const con = confirm('are you sure?');
            if (con)
                document.getElementById('deletehotel' + id).submit();
            else
                return false;
        }

        $(function () {
            $('#hotels-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('hotel.data',['status' => app('request')->input('status')]) !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name_of_property', name: 'name'},
                    {data: 'property_type', name: 'property Type'},
                    {data: 'is_active', name: 'Active'},
                    {data: 'action', name: 'details'}
                ]
            });
        });
        </script>
        @endpush
