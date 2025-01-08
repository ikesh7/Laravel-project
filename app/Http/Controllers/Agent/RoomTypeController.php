<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\RoomType;
use Room;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $tables = RoomType::all();
        return view('forms.roomtype.index', ['datas' => $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.roomtype.newroomtype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: validate Data
        $data = $request->input();
        RoomType::create($data);

        return redirect()->route('roomtype.index')->with('success', "Insert successfully");
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
     * Display the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tables = RoomType::findOrFail($id);
        return view('forms.roomtype.updateroomtype', ['data' => $tables]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $roomType = RoomType::findOrFail($id);
        // TODO: validate Data
        $name = $request->input('name_en');
        $slug = $request->input('slug');
        $description_en = $request->input('description_en');
        $roomType->update(['name_en' => $name, 'slug' => $slug, 'description_en' => $description_en]);
        return redirect()->route('roomtype.index')->with('success', "Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomType = RoomType::findOrFail($id);
        $roomType->delete();
        return redirect()->route('roomtype.index')->with('success', "Delete successfully");
    }
}
