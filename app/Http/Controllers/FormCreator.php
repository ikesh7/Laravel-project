<?php

namespace App\Http\Controllers;

use App\Models\DynamicForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class FormCreator extends Controller
{
    //
    public function index()
    {
        return view('form-creator.index');
    }

    public function addForm(Request $request)
    {

        $data = $request->input();

        var_dump($data);

        var_dump(auth()->user()->id);

        // $rules = [
		// 	'title' => 'required|string|min:5|max:255'
		// ];

        // $validator = Validator::make($request->all(),$rules);

        // if ($validator->fails()) {
		// 	return redirect('form-creator')
		// 	->with('fStatus', $validator);
		// }else{
            $data = $request->input();

        //     var_dump($data);

            $inputType = new DynamicForm();

            $inputType->title = $data['title'];
            $inputType->input_type = $data['input_type'];
            $inputType->form_section = $data['form_section'];
            $inputType->userid = auth()->user()->id;

            // print($data['title']);
            // print($data['input_type']);
            // print($data['form_section']);
            // // $inputType->contact_no = $data['contact_no'];

            $inputType->save();

            return redirect('/form-creator')->with('fStatus',"Insert successfully");
        // }
        // return redirect('/form-creator')->with('fFailed',"Insert successfully");

    }

    public function viewForms()
    {
        $tables = DB::select('select * from tbl_forms_inputs where userid = '.auth()->user()->id);
        return view('form-creator.view-form', ['datas'=>$tables]);
        // return view('form-creator.view-form');
    }

    public function editForm($id){
        $tables = DB::select('select * from tbl_forms_inputs where id = '.$id);
        return view('form-creator.edit-form', ['datas'=>$tables]);
    }

    public function updateForm(Request $request,$id){

        $title = $request->input('title');
        $form_section = $request->input('form_section');
        $input_type = $request->input('input_type');
        DB::update('update tbl_forms_inputs set title = ?, form_section = ?, input_type = ? where id = ?',[$title, $form_section, $input_type, $id]);
        $tables = DB::select('select * from tbl_forms_inputs where id = '.$id);
        return view('form-creator.edit-form', ['datas'=>$tables])->with('fStatus',"Updated successfully");
        print_r($request->input());

    }

    public function deleteForm(Request $request,$id){

        $title = $request->input('title');
        $form_section = $request->input('form_section');
        $input_type = $request->input('input_type');
        DB::table('tbl_forms_inputs')->delete($id);
        $tables = DB::select('select * from tbl_forms_inputs');
        return view('form-creator.view-form', ['datas'=>$tables])->with('dStatus',"Updated successfully");
        // return view('form-creator.edit-form', ['datas'=>$tables])->with('fStatus',"Updated successfully");
        print_r($request->input());

    }
}
