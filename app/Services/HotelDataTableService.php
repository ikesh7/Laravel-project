<?php

namespace App\Services;

use App\Models\Hotel;
use Yajra\DataTables\DataTables;

class HotelDataTableService
{

    /**
     * fetch all data from users table in datatable format
     */
    public function fetchData()
    {
        $input = app('request')->input('status');
        $status  =  $input == 'verified' ? true : false;

        $query = Hotel::where('is_active', $status)->with('propertyType:id,name')->get();

        return DataTables::of($query)->addColumn('action', function ($hotel) {
            return "<a href='" . route('admin.hotel.details', $hotel->id) . "'><i class='fa fa-edit' title='edit'></i></a> ";
        })
            ->addColumn('property_type', function ($hotel) {
                return $hotel->propertyType->name;
            })
            ->addColumn('is_active', function ($hotel) {
                return $hotel->is_active ? "<i class='fa fa-check-circle text-success'></i>" : "<i class='fa fa-times-circle text-danger'></i>";
            })
            ->rawColumns(['is_active', 'action'])
            ->toJson();
    }
}
