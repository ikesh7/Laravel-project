<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Facility;
use App\Models\Hotel;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::where('user_id', auth()->id())->firstOrFail();
        return view('forms.facilities-services.list', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = Facility::where('is_active', true)->get();
        $hotelFacilities =  Hotel::where('user_id', auth()->id())->firstOrFail()->facilities->pluck('id')->toArray();
        return view('forms.facilities-services.index', compact('facilities', 'hotelFacilities'));
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
        $hotel = Hotel::where('user_id', auth()->id())->firstOrFail();
        $hotel->facilities()->sync($data['facilities']);
        return redirect()->route('facilities.index')->with('success', "added successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hotel = Hotel::where('user_id', auth()->id())->firstOrFail();
        $hotel->facilities()->detach([$id]);

        return redirect()->route('facilities.index')->with('success', "delted sucessfully");
    }
}
