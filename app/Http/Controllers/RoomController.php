<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LayoutPricing;
use App\Models\Room;
use App\Models\RoomType;

class RoomController extends Controller
{
    //
    public function index(){
        $id = auth()->user()->id;

        $tables = DB::select('select * from room where userid = '.$id);
        $roomType = DB::select('select * from roomtype');
        $bedtype = DB::select('select * from bedtype');
        return view('forms.room.index', ['datas'=>$tables, 'roomTypes'=>$roomType, 'bedtypes'=>$bedtype]);
    }

    public function newRoom(){

        // $tables = DB::select('select * from room');
        $tables = DB::select('select * from roomtype');
        $bedtype = DB::select('select * from bedtype');
        // $bedtype = DB::select('select * from bedtype');
        return view('forms.room.newroom', ['datas'=>$tables, 'bedtypes'=>$bedtype]);
    }

    public function add(Request $request){

        var_dump($request->input());

        $data = $request->input();
        var_dump($data);
        $numberOfRooms = $data['room_number'];
        // for($i = 1; $i <= $numberOfRooms; $i++)
        // {
            // print_r($i);
            $room = new Room();
            $room->name = $data['name'];
            $room->room_type_id = $data['room_type_id'];
            $room->bed_type_id = $data['bed_type_id'];
            $room->room_type_id = $data['room_type_id'];
            $room->room_capacity_adult = $data['room_capacity_adult'];
            $room->room_capacity_childd = $data['room_capacity_childd'];
            $room->base_price = $data['base_price'];
            $room->is_active = $data['is_active'];
            $room->userid = auth()->user()->id;
            $room->available = $numberOfRooms;

            // $room->save();
        // }
        // foreach()




        return redirect('/newroom')->with('fStatus',"Insert successfully");

        // $tables = DB::select('select * from room');
        // $tables = DB::select('select * from roomtype');
        // $bedtype = DB::select('select * from bedtype');
        // // $bedtype = DB::select('select * from bedtype');
        // return view('forms.room.newroom', ['datas'=>$tables, 'bedtypes'=>$bedtype]);
    }

    public function updateRoom($id){

        // $tables = DB::select('select * from bedtype');
        $tables = DB::select('select * from room where id = '.$id);
        $roomtype = DB::select('select * from roomtype');
        $bedtype = DB::select('select * from bedtype');
        return view('forms.room.updateroom', ['datas'=>$tables, 'roomtypes'=> $roomtype, 'bedtypes'=> $bedtype]);
    }

    public function edit(Request $request, $id){

        // $tables = DB::select('select * from bedtype');
        $name = $request->input('name');
        $room_type_id = $request->input('room_type_id');
        $bed_type_id = $request->input('bed_type_id');
        $room_capacity_adult = $request->input('room_capacity_adult');
        $room_capacity_childd = $request->input('room_capacity_childd');
        $base_price = $request->input('base_price');
        $is_active = $request->input('is_active');
        DB::update('update room set name = ?, room_type_id = ?, bed_type_id = ?, room_capacity_adult = ?, is_active = ?, room_capacity_childd = ?, base_price = ? where id = ?',[$name, $room_type_id, $bed_type_id, $room_capacity_adult, $is_active, $room_capacity_childd, $base_price, $id]);
        $tables = DB::select('select * from room where id = '.$id);
        $roomtype = DB::select('select * from roomtype');
        $bedtype = DB::select('select * from bedtype');
        return view('forms.room.updateroom', ['datas'=>$tables, 'roomtypes'=> $roomtype, 'bedtypes'=> $bedtype])->with('fStatus',"Updated successfully");
    }

    public function delete($id){

        DB::table('room')->delete($id);
        $tables = DB::select('select * from room');
        // return view('forms.bed.index', ['datas'=>$tables])->with('fStatus',"Deleted successfully");
        return view('forms.room.index', ['datas'=>$tables]);
    }
}
