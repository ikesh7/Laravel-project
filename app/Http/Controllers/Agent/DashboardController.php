<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

use App\Models\Hotel;
use App\Models\City;
use App\Models\PropertyType;


class DashboardController extends Controller
{
    public function index()
    {
        $hotel = Hotel::where('user_id', auth()->id())->first();
        $cities = City::all();
        $propertyTypes = PropertyType::all();

        return view('agents.index', compact('cities', 'propertyTypes', 'hotel'));
    }
}
