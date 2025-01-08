<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LayoutPricing;

class LayoutPricingController extends Controller
{
    public function index(){

        $tables = DB::select('select * from tbl_forms_inputs');
        return view('forms.layoutpricing.index', ['datas'=>$tables]);
    }

    public function list(){

        $id = auth()->user()->id;

        // print("***********************************************************".$id);

        $tables = DB::select('select * from layout_pricing where userid = '. $id);
        return view('forms.layoutpricing.list', ['datas'=>$tables]);
    }

    // public function editView($id){

    //     $id = auth()->user()->id;

    //     // print("***********************************************************".$id);

    //     $tables = DB::select('select * from layout_pricing where userid = '. $id);
    //     return view('forms.layoutpricing.list', ['datas'=>$tables]);
    // }

    public function editView($id){

        // $tables = DB::select('select * from bedtype');
        $tables = DB::select('select * from layout_pricing where id = '. $id);

        // print($tables.);
        $table2 = DB::select('select * from tbl_forms_inputs');
        return view('forms.layoutpricing.edit', ['datas'=>$tables, 'datas2'=>$table2]);
    }

    public function edit(Request $request, $id){

        // print_r($request->input());

        $room_type = $request->input('room_type');
        $room_name = $request->input('room_name');
        $custom_name = $request->input('custom_name');
        $room_capacity = $request->input('room_capacity');
        $price = $request->input('price');
        $no_of_room = $request->input('no_of_room');

        DB::update('update layout_pricing set room_type = ?, room_name = ?, custom_name = ?, room_capacity = ?, price = ?, no_of_room = ? where id = ?',[$room_type, $room_name, $custom_name, $room_capacity, $price, $no_of_room, $id]);
        
        $tables = DB::select('select * from layout_pricing where id = '. $id);
        $table2 = DB::select('select * from tbl_forms_inputs');
        return view('forms.layoutpricing.edit', ['datas'=>$tables, 'datas2'=> $table2])->with('fStatus',"Updated successfully");
        // $is_active = $request->input('is_active');

        // $tables = DB::select('select * from bedtype');
        // $tables = DB::select('select * from layout_pricing where id = '. $id);

        // // print($tables.);
        // $table2 = DB::select('select * from tbl_forms_inputs');
        // return view('forms.layoutpricing.edit', ['datas'=>$tables, 'datas2'=>$table2]);
    }

    public function formSubmit(Request $request){

        $data = $request->input();

        print_r(count($data));

        $extraFields = count($data) - 7;

        print_r($extraFields);

        foreach ($request->except('_token') as $key => $part) {
            // $key gives you the key. 2 and 7 in your case.

            print_r("$key     ");
        }

        $data2 = [];

        foreach ($request->except('_token') as $key => $part)
        {
            $data2[] = [
                $key => $part
            ];
        }

        for ($i = 0; $i < count($data); $i++){
            print_r("$i ");
        }

        $others = json_encode($data2, true);

        $layoutPricing = new LayoutPricing();
        $layoutPricing->room_type = $data['room_type'];
        $layoutPricing->room_name = $data['room_name'];
        $layoutPricing->custom_name = $data['custom_name'];
        $layoutPricing->room_capacity = $data['room_capacity'];
        $layoutPricing->price = $data['price'];
        $layoutPricing->no_of_room = $data['no_of_room'];
        $layoutPricing->others = $others;
        $layoutPricing->userid = auth()->user()->id;

        $layoutPricing->save();

        //return redirect('/layout-pricing')->with('fStatus',"Insert successfully");

        

        return redirect('/layout-pricing')->with('fStatus',"Insert successfully");
    }

    public function delete($id){

        DB::table('layout_pricing')->delete($id);
        $tables = DB::select('select * from layout_pricing');

        $usedid = auth()->user()->id;

        // print("***********************************************************".$id);

        $tables = DB::select('select * from layout_pricing where userid = '. $usedid);
        return view('forms.layoutpricing.list', ['datas'=>$tables]);
        // return view('forms.bed.index', ['datas'=>$tables])->with('fStatus',"Deleted successfully");
        // return view('forms.room.index', ['datas'=>$tables]);
    }
}
