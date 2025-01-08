<?php

namespace App\Services;

use App\Models\Facility;
use Yajra\DataTables\DataTables;

class FacilityDataTableService
{

    
    public function fetchData()
    {
        $query = Facility::query();

        return DataTables::of($query)->addColumn('action', function ($facility) {

            return "<form action='" . route('facility.destroy', $facility->id) . "' id='deletefacility" . $facility->id . "' method='POST'>
                        <a href='" . route('facility.edit', ['facility' => $facility->id]) . "'><i class='fa fa-edit' title='edit'></i></a>
                        <input type='hidden' name='_method' value='DELETE'>
                        " . csrf_field() . "
                        <a href='#'><i class='fa fa-trash' title='delete' onclick='deleteFacility(event," . $facility->id . ")'></i></a>
                    </form>";
        })
            ->addColumn('name', function ($facility) {
                return $facility->name . ' ' . $facility->description;
            })
            ->toJson();
    }
}
