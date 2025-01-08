<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\HotelDataTableService;
use App\Models\Hotel;

use DB;

class HotelController extends Controller
{
    public function __construct(HotelDataTableService $dataService)
    {
        $this->dataService = $dataService;
    }
    public function index()
    {
        return view('admin.hotellist');
    }
    public function newHotelIndex()
    {

        return view('admin.hotellist');
    }
    public function details($id)
    {

        $hotels = Hotel::with('rooms', 'rooms.roomType:id,name_en')->findOrFail($id);


        return view('admin.hoteldetails', ['hotel' => $hotels]);
    }
    public function edit(Request $request, $id)
    {
        $is_active = $request->input('is_active');
        $tables = DB::select('select * from hotels');
        DB::update('update hotels set is_active=? where id = ?', [$is_active, $id]);
        return redirect()->route('hotellist.index')->with('Success', "Insert successfully");
    }

    public function data()
    {
        return $this->dataService->fetchData();
    }
}
