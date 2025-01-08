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
                            Users Listing
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <a href="{{route('users.create')}}" class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Add New User
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
                    <table class="table table-bordered table-striped table-hover table-condensed" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
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
    function deleteUser(e, id) {
        e.preventDefault();
        const con = confirm('are you sure?');
        if (con)
            document.getElementById('deleteuser' + id).submit();
        else
            return false;
    }

    $(function() {
        $('#users-table').DataTable({
            processing: true
            , serverSide: true
            , ajax: '{!! route('
            users.data ') !!}'
            , columns: [{
                    data: 'id'
                    , name: 'id'
                }
                , {
                    data: 'name'
                    , name: 'name'
                }
                , {
                    data: 'email'
                    , name: 'email'
                }
                , {
                    data: 'action'
                    , name: 'action'
                }
            ]
        });
    });

</script>
@endpush
@section('content-head')
@include('admin.partials.content-head',[
'title' => 'List Users',
'formLink' => '/admin/user/create',
'head' => 'Create new User:'
])
@endsection
