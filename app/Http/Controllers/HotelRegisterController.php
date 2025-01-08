<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\City;
use App\Models\PropertyType;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HotelRegisterController extends Controller
{
    //
    public function registerForm()
    {
        return view('hotel-registration.registerform');
    }

    public function editView()
    {
        $hotel = Hotel::where('user_id', auth()->id())->firstOrFail();
        $propertyTypes = PropertyType::all();
        $cities = City::all();
        return view('hotel-registration.edit', compact('hotel', 'propertyTypes', 'cities'));
    }

    public function edit(Request $request)
    {


        $property_type_id = $request->input('property_type_id');
        $name_of_property = $request->input('name_of_property');
        $star_rating = $request->input('star_rating');
        $contact_name = $request->input('contact_name');
        $contact_no = $request->input('contact_no');
        $address = $request->input('address');
        $is_active = $request->input('is_active');
        $slug = $request->input('slug');

        $hotel = Hotel::where('user_id', auth()->id())->firstOrFail();
        $hotel->update([
            'property_type_id' => $property_type_id,
            'name_of_property' => $name_of_property,
            'star_rating' => $star_rating,
            'contact_name' => $contact_name,
            'contact_no' => $contact_no,
            'address' => $address,
            'slug' => $slug,
            'is_active' => $is_active,
        ]);

        return redirect()->route('agent.index')->withSuccess("Updated successfully");
    }

    public function registration(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'registration_document' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'citizen_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'citizen_back' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $rdPath = $request->file('registration_document')->getRealPath();
        $cfPath = $request->file('citizen_front')->getRealPath();
        $cbPath = $request->file('citizen_back')->getRealPath();
        $rd = file_get_contents($rdPath);
        $cf = file_get_contents($cfPath);
        $cb = file_get_contents($cbPath);

        $data = $request->input();

        Hotel::create([
            'property_type_id' => $data['property_type_id'],
            'name_of_property' => $data['name_of_property'],
            'star_rating' => $data['star_rating'],
            'contact_name' => $data['contact_name'],
            'contact_no' => $data['contact_no'],
            'address' => $data['address'],
            'user_id' => auth()->id(),
            'slug' => $data['slug'],
            'registration_document' => base64_encode($rd),
            'citizen_front' => base64_encode($cf),
            'citizen_back' => base64_encode($cb),
            'city_id' => $data['city_id'],
        ]);

        return redirect()->route('agent.index')->with('Success ', "Insert successfully");
    }
    public function addImage(Hotel $hotel)
    {
        if ($hotel->user_id != auth()->id()) abort(404);
        return view('agents.addImage', compact('hotel'));
    }

    public function upload(Request $request, Hotel $hotel)
    {
        if ($hotel->user_id != auth()->id()) {
            return redirect()->back()->withError('Error');
        }
        if ($request->has('image')) {
            $hotel->addMedia($request->files->get('image'))
                ->toMediaCollection('gallery');
        }
        return redirect()->back()->withSuccess('Image uploaded successfully');
    }

    public function deleteImage($mediaId, $modelId)
    {
        $hotels = Hotel::where('hotel_id', auth()->id())->firstOrFail()->hotels->pluck('id')->toArray();
        if (!in_array($modelId, $hotels)) {
            return redirect()->back()->withError('Image not valid');
        }
        Media::where(['id' => $mediaId, 'model_id' => $modelId])->delete();
        return redirect()->back()->withSuccess('Image removed successfully');
    }
}
