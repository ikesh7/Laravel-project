<?php

namespace App\Http\Controllers;

use App\Models\AmenityHotelModel;
use App\Models\AmenityModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class AmenityController extends Controller
{
    public function index(){


        $tables = DB::select('select * from amenity');

        // $tables = DB::select('select * from tbl_forms_inputs');
        return view('forms.amenities.index', ['datas'=>$tables]);
    }

    public function addView(){

        $tables = DB::select('select * from tbl_forms_inputs');
        $tables2 = DB::select('select * from room');
        return view('forms.amenities.add', ['datas'=>$tables, "data2"=>$tables2]);
    }

    public function editView($id){


        $tables = DB::select('select * from amenity where id = '. $id);
        // print_r($tables);
        // $tables = DB::select('select * from amenity where id = '.$id);
        return view('forms.amenities.edit', ['datas'=>$tables]);
    }

    public function edit(Request $request, $id){

        // $tables = DB::select('select * from bedtype');
        $name = $request->input('name_en');
        $desciption_en = $request->input('desciption_en');
        $price = $request->input('price');
        DB::update('update amenity set name_en = ?, desciption_en = ?, price = ? where id = ?',[$name, $desciption_en, $price, $id]);
        $tables = DB::select('select * from amenity where id = '.$id);
        return view('forms.amenities.edit', ['datas'=>$tables])->with('fStatus',"Updated successfully");
    }

    public function add(Request $request){

        $data = $request->input();

        // print_r(count($data));

        // $extraFields = count($data) - 7;

        // print_r($extraFields);

        // foreach ($request->except('_token') as $key => $part) {
        //     // $key gives you the key. 2 and 7 in your case.

        //     print_r("$key     ");
        // }

        // $data2 = [];

        // foreach ($request->except('_token') as $key => $part)
        // {
        //     $data2[] = [
        //         $key => $part
        //     ];
        // }

        // for ($i = 0; $i < count($data); $i++){
        //     print_r("$i ");
        // }

        // $others = json_encode($data2, true);

        $amenityModel = new AmenityModel();
        $amenityModel->name_en = $data['name_en'];
        $amenityModel->desciption_en = $data['desciption_en'];
        $amenityModel->price = $data['price'];
        // $layoutPricing->userid = auth()->user()->id;

        $amenityModel->save();

        $userid = auth()->user()->id;
        $amenityHotelModel = new AmenityHotelModel();
        $amenityHotelModel->amnity_id = $amenityModel->id;
        $amenityHotelModel->hotel_id = $userid;
        $amenityHotelModel->save();

        // print($amenityModel->id);

        //return redirect('/layout-pricing')->with('fStatus',"Insert successfully");

        

        return redirect('/newamenity')->with('fStatus',"Insert successfully");
    }

    public function delete($id){

        DB::table('amenity')->delete($id);
        DB::table('amenity')->delete($id);

        AmenityHotelModel::where('amnity_id',$id)->delete();
        $tables = DB::select('select * from amenity');

        // $usedid = auth()->user()->id;

        // $tables = DB::select('select * from facilities_services where userid = '. $usedid);
        return view('forms.amenities.index', ['datas'=>$tables]);
    }
}
