<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AmenityModel;
use App\Models\AmenityHotelModel;

use DB;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = DB::select('select * from amenity');

        
        return view('forms.amenities.index', ['datas'=>$tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $tables = DB::select('select * from tbl_forms_inputs');
        $tables2 = DB::select('select * from amenity');
        return view('forms.amenities.add', ['datas'=>$tables, "data2"=>$tables2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();

        

        $amenityModel = new AmenityModel();
        $amenityModel->name_en = $data['name_en'];
        $amenityModel->description_en = $data['description_en'];
        $amenityModel->price = $data['price'];
        

        $amenityModel->save();

        $hotels = DB::select('select * from hotels where user_id = '.auth()->user()->id);
        foreach($hotels as $hotel){
            $id = $hotel->id;
        }

        $userid = $id;
        $amenityHotelModel = new AmenityHotelModel();
        $amenityHotelModel->amenity_id = $amenityModel->id;
        $amenityHotelModel->hotel_id = $userid;
        $amenityHotelModel->save();

        

        return redirect()->route('amenity.index')->with('success', "Insert successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenity = AmenityModel::findOrFail($id);
      
        return view('forms.amenities.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $amenity = AmenityModel::findOrFail($id);
        $name = $request->input('name_en');
        $desciption_en = $request->input('desciption_en');
        $price = $request->input('price');
        DB::update('update amenity set name_en = ?, desciption_en = ?, price = ? where id = ?',[$name, $desciption_en, $price, $id]);
        $tables = DB::select('select * from amenity where id = '.$id);
        return view('forms.amenities.edit', ['datas'=>$tables], compact('amenity'))->with('fStatus',"Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('amenity')->delete($id);
        return redirect()->route('amenity.index');
    }
}
