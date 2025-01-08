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
                            BED
                        </h3>
                    </div>


                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <a href="{{  route('bed.create') }}" class="addFile btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Add New bed
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
                                <th class="text-center"> ACTIONS </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)

                            <tr>
                                <td class="text-center fill-current "> {{ $loop->index + 1 }} </td>
                                <td class="text-center fill-current "> {{ $data->name_en }} </td>
                                <td>
                                    <div class="row justify-content-center">
                                        <form action="{{ route('bed.destroy', $data->id)}}" id='deletebedtype{{$data->id}}' method='POST'>
                                            @csrf
                                            @method('delete')






                                            <a href="{{route('bed.edit',$data->id)}}">
                                                <h4  class="addFile btn btn-brand btn-elevate btn-icon-sm">Edit</h4>
                                            </a>
                                            <a href="#" onclick='deleteBedType(event,{{ $data->id }} )'>
                                                <h4  class="addFile btn btn-brand btn-elevate btn-icon-sm">Delete</h4>
                                            </a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<!-- DataTables -->

<script>
    function deleteBedType(e, id) {
        e.preventDefault();
        const con = confirm('are you sure?');
        if (con)
            document.getElementById('deletebedtype' + id).submit();
        else
            return false;
    }

</script>
@endpush