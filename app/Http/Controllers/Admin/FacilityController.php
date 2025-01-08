<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FacilityDataTableService;
use Illuminate\Http\Request;

use App\Models\Facility;


class FacilityController extends Controller
{
    



    public function __construct(FacilityDataTableService $dataService)
    {
        $this->dataService = $dataService;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facilities');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilitiesform')->withFacility(new Facility());
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
        Facility::create($data);
        return redirect()->route('facility.index')->with('success', "added successfully");
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
    public function edit( $id)
    {   $facility=Facility::findOrFail($id);
        
        return view('admin.facilitiesedit')->withFacility($facility);
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
        $facility = Facility::findOrFail($id);
        // TODO: validate Data
        $name = $request->input('name');
        $slug = $request->input('slug');
        $description = $request->input('description');
        $facility->update(['name' => $name, 'slug' => $slug, 'description' => $description]);
        return redirect()->route('facility.index')->with('success', "Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $facility->delete();
        return redirect()->back()->withSuccess('successfully deleted the facilty');
    }

    public function data()
    {
        return $this->dataService->fetchData();
    }
}
