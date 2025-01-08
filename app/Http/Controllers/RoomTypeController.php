<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LayoutPricing;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    //
    public function index(){

        $tables = DB::select('select * from roomtype');
        return view('forms.roomtype.index', ['datas'=>$tables]);
    }

    public function newRoomView(){

        // $tables = DB::select('select * from roomtype');
        return view('forms.roomtype.newroomtype');
    }

    public function uploadRoomType(Request $request){

        // $tables = DB::select('select * from roomtype');
        print_r(($request->input()));
        $data = $request->input();
        $roomType = new RoomType();
        $roomType->name_en = $data['name_en'];
        $roomType->slug = $data['slug'];
        $roomType->description_en = $data['description_en'];

        $roomType->save();

        

        return redirect('/newroomtype')->with('fStatus',"Insert successfully");

        // return view('forms.roomtype.newroomtype');
    }

    public function updateRoomType($id){

        // $tables = DB::select('select * from bedtype');
        $tables = DB::select('select * from roomtype where id = '.$id);
        return view('forms.roomtype.updateroomtype', ['datas'=>$tables]);
    }

    public function edit(Request $request, $id){

        $name = $request->input('name_en');
        $slug = $request->input('slug');
        $description_en = $request->input('description_en');
        DB::update('update roomtype set name_en = ?,  slug = ?, description_en = ? where id = ?',[$name, $slug, $description_en, $id]);
        $tables = DB::select('select * from roomtype where id = '.$id);
        return view('forms.roomtype.updateroomtype', ['datas'=>$tables]);
    }

    public function delete($id){

        DB::table('roomtype')->delete($id);
        $tables = DB::select('select * from roomtype');
        // return view('forms.bed.index', ['datas'=>$tables])->with('fStatus',"Deleted successfully");
        return view('forms.roomtype.index', ['datas'=>$tables]);
    }
}
