<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\BedType;
use App\Models\Hotel;
use DB;


class RoomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Hotel::where('user_id', auth()->id())->firstOrFail()->rooms()->paginate(10);
        return view('forms.room.index', ['datas' => $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = RoomType::all();
        $bedTypes = BedType::all();
        return view('forms.room.newroom', compact('roomTypes', 'bedTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotels = DB::select('select * from hotels where user_id = ' . auth()->user()->id);
        foreach ($hotels as $hotel) {
            $hotelId = $hotel->id;
        }
        $data = $request->input();

        $numberOfRooms = $data['room_number'];

        print_r($data);

        $room = new Room();
        $room->name = $data['name'];
        $room->room_type_id = $data['room_type_id'];
        $room->bed_type_id = $data['bed_type_id'];
        $room->room_type_id = $data['room_type_id'];
        $room->room_capacity_adult = $data['room_capacity_adult'];
        $room->room_capacity_child = $data['room_capacity_child'];
        $room->base_price = $data['base_price'];
        $room->is_active = $data['is_active'];
        $room->hotel_id = $hotelId;
        // $room->available = $numberOfRooms;
        // Room::create($data);
        $room->save();
        return redirect()->route('room.index')->with('Success', "Insert successfully");
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
        $room = Room::findOrFail($id);
        $roomTypes = RoomType::all();
        $bedTypes = BedType::all();

        return view('forms.room.updateroom', compact('room', 'bedTypes', 'roomTypes'));
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
        $room = Room::findOrFail($id);
        $name = $request->input('name');
        $room_type_id = $request->input('room_type_id');
        $bed_type_id = $request->input('bed_type_id');
        $room_capacity_adult = $request->input('room_capacity_adult');
        $room_capacity_childd = $request->input('room_capacity_childd');
        $base_price = $request->input('base_price');
        $is_active = $request->input('is_active');
        $room->update(['name' => $name, 'room_type-id' => $room_type_id, 'bed_type_id' => $bed_type_id, 'room_capacity_adult' => $room_capacity_adult, 'is_active' => $is_active, 'room_capacity_childd' => $room_capacity_childd, 'base_price' => $base_price, $id]);

        return redirect()->route('room.index')->with('success', "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('room.index')->with('success', "Deleted successfully");
    }

    public function addImage(Room $room)
    {
        return view('forms.room.addImage', compact('room'));
    }

    public function upload(Request $request, Room $room)
    {
        if ($request->has('image')) {
            $room->addMedia($request->files->get('image'))
                ->toMediaCollection('gallery');
        }
        return redirect()->back()->withSuccess('Image uploaded successfully');
    }

    public function deleteImage($mediaId, $modelId)
    {
        $hotelRooms = Hotel::where('user_id', auth()->id())->firstOrFail()->rooms->pluck('id')->toArray();
        if (!in_array($modelId, $hotelRooms)) {
            return redirect()->back()->withError('Image not valid');
        }
        Media::where(['id' => $mediaId, 'model_id' => $modelId])->delete();
        return redirect()->back()->withSuccess('Image removed successfully');
    }
}
