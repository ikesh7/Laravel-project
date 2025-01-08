<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\Facility;
use App\Models\PropertyType;
use Cache;
// use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        print_r($request->input());
        $data = $request->input();

        $data = $data['datefilter'];

        $dateArray = $pieces = explode("-", $data);
        // $adult = $data['number_of_adults'];

        // print_r($request->number_of_children);
        print_r($request->number_of_adults);
        print_r($request->number_of_children);

        

       

        $request->session()->put('arrivalDate', $dateArray[0]);
        $request->session()->put('departureDate', $dateArray[1]);
        $request->session()->put('capacity_adult', $request->number_of_adults);
        $request->session()->put('capacity_child', $request->number_of_children);

        // print_r("vkuadshjfchsadkjhfc");
        $facilities = Cache::remember('facilities', 60 * 60, function () {
            return Facility::where('is_active', true)->get();
        });
        $propertyTypes =  Cache::remember('propertyTypes', 60 * 60, function () {
            return PropertyType::where('is_active', true)->get();
        });
        $rooms = Room::where('is_active', true)->with('hotel:id,name_of_property,details,city_id,slug','hotel.city:id,name_en','hotel.media')->paginate(10);
        return view('search-results', compact('rooms', 'facilities','propertyTypes'));
    }

    public function filter(Request $request)
    {
        // var_dump($request->input());

        $data = $request->input();

        $minimum = $request->input('minimim');
        $maximum = $request->input('maximum');
        $tables = DB::table('hotel')->distinct()
            ->leftjoin('room', function ($join) use ($minimum, $maximum) {
                $join->on('room.userid', '=', 'hotel.user_id');
                $join->on('base_price', '>=', DB::raw("'" . $minimum . "'"));
                $join->on('base_price', '<=', DB::raw("'" . $maximum . "'"));
            })->get();



        echo '<pre>';
        print_r($tables);
        echo '</pre>';
    }

    public function details($slug)
    {
        $facilities = \Cache::remember('facilities-list', 60000, function () {
            return Facility::all();
        });
        $hotel = Hotel::with('rooms', 'facilities:id,name')->where('slug', $slug)->firstOrFail();
        return view('search-details', compact('hotel', 'facilities'));
    }
}
