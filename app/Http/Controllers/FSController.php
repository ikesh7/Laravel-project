<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\FSModel;

class FSController extends Controller
{
    public function index(){

        $tables = DB::select('select * from tbl_forms_inputs');
        return view('forms.facilities-services.index', ['datas'=>$tables]);
    }

    public function list(){

        $id = auth()->user()->id;

        // print("***********************************************************".$id);

        $tables = DB::select('select * from facilities_services where userid = '. $id);
        return view('forms.facilities-services.list', ['datas'=>$tables]);
    }

    public function editView($id){

       
        $tables = DB::select('select * from facilities_services where id = '. $id);

       
        return view('forms.facilities-services.edit', ['datas'=>$tables]);
    }

    public function edit(Request $request, $id){

        // print_r($request->input());

        $parking =- $request->input('parking');
        $breakfast = $request->input('breakfast');
        $breakfast_type = $request->input('breakfast_type');
        $breakfast_price = $request->input('breakfast_price');

        $free_wifi = $request->input('free_wifi');
        $restaurant = $request->input('restaurant');
        $room_service = $request->input('room_service');
        $bar = $request->input('bar');

        $front_desk = $request->input('front_desk');
        $sauna = $request->input('sauna');
        $fitness_center = $request->input('fitness_center');
        $garden = $request->input('garden');

        $terrace = $request->input('terrace');
        $non_smoking_rooms = $request->input('non_smoking_rooms');
        $airport_shuttle = $request->input('airport_shuttle');
        $family_rooms = $request->input('family_rooms');

        $spa = $request->input('spa');
        $hot_tub_jaccuzi = $request->input('hot_tub_jaccuzi');
        $air_conditioning = $request->input('air_conditioning');
        $water_park = $request->input('water_park');
        $swimming_pool = $request->input('swimming_pool');
        // $price = $request->input('price');
        // $no_of_room = $request->input('no_of_room');

        DB::update('update facilities_services set parking = ?, breakfast = ?, breakfast_type = ?, breakfast_price = ?, free_wifi = ?, restaurant = ?, room_service = ?, bar = ?, front_desk = ?, sauna = ?, fitness_center = ?, garden = ?, terrace = ?, non_smoking_rooms = ?, airport_shuttle = ?, family_rooms = ?, spa = ?, hot_tub_jaccuzi = ?, air_conditioning = ?, water_park = ?, swimming_pool = ? where id = ?',[$parking, $breakfast, $breakfast_type, $breakfast_price, $free_wifi, $restaurant, $room_service, $bar, $front_desk, $sauna, $fitness_center, $garden, $terrace, $non_smoking_rooms, $airport_shuttle, $family_rooms, $spa, $hot_tub_jaccuzi, $air_conditioning, $water_park, $swimming_pool, $id]);
        
        // $tables = DB::select('select * from layout_pricing where id = '. $id);
        // $table2 = DB::select('select * from tbl_forms_inputs');
        // return view('forms.layoutpricing.edit', ['datas'=>$tables, 'datas2'=> $table2])->with('fStatus',"Updated successfully");
        // $is_active = $request->input('is_active');

        // $tables = DB::select('select * from bedtype');
        $tables = DB::select('select * from facilities_services where id = '. $id);

        // // print($tables.);
        $table2 = DB::select('select * from tbl_forms_inputs');
        // return view('forms.facilities-services.edit', ['datas'=>$tables, 'datas2'=>$table2]);
        return redirect('/all-facilities-services')->with('fStatus',"Updated successfully");
    }

    public function formSubmit(Request $request){

        $data = $request->input();

       
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

        print($others);

        $fs = new FSModel();
        $fs->parking = $data['parking'];
        $fs->breakfast = $data['breakfast'];
        $fs->breakfast_type = $data['breakfast_type'];
        $fs->breakfast_price = $data['breakfast_price'];
        $fs->free_wifi = $data['free_wifi'];
        $fs->restaurant = $data['restaurant'];
        $fs->room_service = $data['room_service'];
        $fs->bar = $data['bar'];
        $fs->front_desk = $data['front_desk'];
        $fs->sauna = $data['sauna'];
        $fs->fitness_center = $data['fitness_center'];
        $fs->garden = $data['garden'];
        $fs->terrace = $data['terrace'];
        $fs->non_smoking_rooms = $data['non_smoking_rooms'];
        $fs->airport_shuttle = $data['airport_shuttle'];
        $fs->family_rooms = $data['family_rooms'];
        $fs->spa = $data['spa'];
        $fs->hot_tub_jaccuzi = $data['hot_tub_jaccuzi'];
        $fs->air_conditioning = $data['air_conditioning'];
        $fs->water_park = $data['water_park'];
        $fs->swimming_pool = $data['swimming_pool'];
        $fs->userid = auth()->user()->id;
        $fs->others = $others;

        $fs->save();

        //return redirect('/layout-pricing')->with('fStatus',"Insert successfully");

        

        return redirect('/all-facilities-services')->with('fStatus',"Added successfully");
    }

    public function delete($id){

        DB::table('facilities_services')->delete($id);
        $tables = DB::select('select * from facilities_services');

        $usedid = auth()->user()->id;

        // print("***********************************************************".$id);

        $tables = DB::select('select * from facilities_services where userid = '. $usedid);
        return view('forms.facilities-services.list', ['datas'=>$tables]);
        // return view('forms.bed.index', ['datas'=>$tables])->with('fStatus',"Deleted successfully");
        // return view('forms.room.index', ['datas'=>$tables]);
    }


}
