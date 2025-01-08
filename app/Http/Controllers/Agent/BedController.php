<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\BedType;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $tables = BedType::all();
        return view('forms.bed.index', ['datas'=>$tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.bed.addbed');
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
       BedType::create($data);



        return redirect()->route('bed.index')->with('Sucess ',"Insert successfully");
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
        $bedTypes = BedType::findorfail($id);
            return view('forms.bed.updatebed', compact('bedTypes'));
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
        $bedtype= BedType::findorfail($id);
        $name = $request->input('name_en');
        $description_en = $request->input('desciption_en');
        $bedtype->update(['name_en'=>$name,'description_en'=>$description_en]);
        return redirect()->route('bed.index')->with('success',"updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bedtype = BedType::findorfail($id);
        $bedtype->delete();
        return redirect()->route('bed.index')->with('success',"deletd successfully");
    }
}
