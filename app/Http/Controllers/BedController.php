<?php

namespace App\Http\Controllers;

use App\Models\BedType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class BedController extends Controller
{
    //
    public function index(){

        $tables = DB::select('select * from bed_types');
        return view('forms.bed.index', ['datas'=>$tables]);
    }

    public function addbed(){

        // $tables = DB::select('select * from bedtype');
        return view('forms.bed.addbed');
    }

    public function bedadd(Request $request){

        $data = $request->input();
        $bed = new BedType();
        $bed->name_en = $data['name_en'];
        $bed->desciption_en = $data['desciption_en'];
        // $bedModel->userid = auth()->user()->id;

        $bed->save();



        return redirect('/addbed')->with('fStatus',"Insert successfully");

    }

    public function editbed($id){

        
        $tables = DB::select('select * from bed_types where id = '.$id);
        return view('forms.bed.updatebed', ['datas'=>$tables]);
    }

    public function updatebed(Request $request, $id){

        
        $name = $request->input('name_en');
        $desciption_en = $request->input('desciption_en');
        DB::update('update bed_type set name_en = ?, desciption_en = ? where id = ?',[$name, $desciption_en, $id]);
        $tables = DB::select('select * from bed_types where id = '.$id);
        return view('forms.bed.updatebed', ['datas'=>$tables]);
    }

    public function deleteBed(Request $request,$id){

      
        DB::table('bed_types')->delete($id);
        $tables = DB::select('select * from bed_type');
        return view('forms.bed.index', ['datas'=>$tables])->with('fStatus',"Deleted successfully");
   

    }
}
