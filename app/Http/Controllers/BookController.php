<?php

namespace App\Http\Controllers;

use App\Models\BookDetailsModel;
use App\Models\BookEventModel;
use App\Models\BookModel;
use Illuminate\Http\Request;
use DB;
// use Request;

class BookController extends Controller
{
    //
    public function index($id){

        

        $tables = DB::select('select * from room where userid = '.$id);

        foreach($tables as $table){
            $roomType = DB::select('select * from roomtype where id = '.$table->room_type_id);
            $bedType = DB::select('select * from bedtype where id = '.$table->bed_type_id);
        }
       
        return view('book.index', ['datas' => $tables, 'roomtypes' => $roomType, 'bedtypes' => $bedType]);
    }

    public function confirmindex(Request $request, $id){

        $value = $request->session()->get('key', 'default value');
       
        $booking = DB::select('select * from booking');
        $booking_details = DB::select('select * from booking_details');

        $roomTypes = DB::select('select * from room_types');
        $bedTypes = DB::select('select * from bed_types');

        $room = DB::select('select * from rooms where hotel_id = '. $id);
        $hotels = DB::select('select * from hotels where id = '. $id);
        foreach($hotels as $hotel){
            $hotelName = $hotel->name_of_property;
            $hotelSlug = $hotel->slug;
            $hotelImg = $hotel->image;
        }
        // print_r($room);
        return view('book.reserve', ["hotelId" => $id, "hotelName" => $hotelName, "hotelSlug" => $hotelSlug, "hotelImg" => $hotelSlug, "rooms" => $room, 'roomTypes' => $roomTypes, 'bedTypes' => $bedTypes]);
    }

    public function insert(Request $request, $hotelId){

        
        $data = $request->input();

        // $rooms = DB::select('select * from room where id = '.$data['roomId']);

        print_r($data);

    //    foreach($rooms as $room){
    //        $price = $room->base_price;
    //    }

    

    //     $tables = DB::select('select * from room where id = '.$data['roomId']);

    //     foreach($tables as $table){
    //        $hotelId = $table->userid;
    //     }

        $booking = new BookModel();
        $booking->booking_type = "";
        $booking->booking_code =  generateRandomString(8);
        $booking->user_id = auth()->user()->id;
        $booking->agentId = $hotelId;
        $booking->ipaddress = $request->ip();

        $booking->save();

        $bookingId = $booking->id;

        $users = DB::select('select * from users where id = '.auth()->user()->id);

        print_r($users);

        $aDate = strtotime( session('arrivalDate') );  
        $dDate = strtotime( session('departureDate') );  
        // print date('Y-m-d', $timestamp );

        foreach($users as $user){
            $firstname = $user->first_name;
            $lastname = $user->last_name;
            $gender = $user->gender;

            $bookingDetail = new BookDetailsModel();
            $bookingDetail->booking_id = $bookingId;
            $bookingDetail->room_id = $data['roomId'];
            $bookingDetail->price = $data['basePrice'];
            $bookingDetail->no_of_guest_adult = session('capacity_adult');
            $bookingDetail->no_of_guest_children = session('capacity_child');
            $bookingDetail->first_name = $firstname;
            $bookingDetail->last_name = $lastname;
            $bookingDetail->gender = $gender;
            $bookingDetail->agentId = $hotelId;
            $bookingDetail->check_in = date('Y-m-d', $aDate );
            $bookingDetail->check_out = date('Y-m-d', $dDate );

            $bookingDetail->save();


        }



      
        $request->session()->forget('arrivalDate');
        $request->session()->forget('departureDate');
        $request->session()->forget('capacity_adult');
        $request->session()->forget('capacity_child');

        $bookingEvent = new BookEventModel();
        $bookingEvent->booking_id = $bookingId;

        $bookingEvent->save();

        return redirect()->route('booking')->with('fStatus',"Inserted successfully");



        // print_r($bookingEvent)


        // return redirect('/book/confirm/'.$data['roomId'])->with('fStatus',"Booked successfully");


        

        
    }

    public function bookingList(){
        $id = auth()->user()->id;

        
        $tables = DB::select('select * from booking where agentId = '.$id);

        
        $bookingDetails = DB::select('select * from booking_details');
        $bookingEvents = DB::select('select * from booking_events where status=true');
        $bookingUsers = DB::select('select * from users');

        
        return view('agents.booking', ['bookings' => $tables, 'bookingDetails' => $bookingDetails, 'bookingEvents' => $bookingEvents, 'bookingUsers' => $bookingUsers ]);
    }
    public function unverifiedbookingList(){
        $id = auth()->user()->id;

        
        $tables = DB::select('select * from booking where  agentId = '.$id);

        
        $bookingDetails = DB::select('select * from booking_details');
        $bookingEvents = DB::select('select * from booking_events where status=false');
        $bookingUsers = DB::select('select * from users');

        
        return view('agents.booking', ['bookings' => $tables, 'bookingDetails' => $bookingDetails, 'bookingEvents' => $bookingEvents, 'bookingUsers' => $bookingUsers ]);
    }

    public function editView($id){
        $bookingDetails = DB::select('select * from booking_details where booking_id = '.$id);
        foreach($bookingDetails as $data){
            $rooms = DB::select('select * from room where id = '.$data->room_id);
            $bookingEvents = DB::select('select * from booking_events where booking_id = '. $data->booking_id);
        }
        return view('agents.update', ['bookingDetails' => $bookingDetails, 'rooms' => $rooms, 'bookingEvents' => $bookingEvents]);
    }

    public function updateBooking(Request $request, $id){

        

        $id = $request->input('eventId');
        $status = $request->input('bookingEvent');
        DB::update('update booking_events set status = ? where id = ?',[$status, $id]);
        

        $bookingDetails = DB::select('select * from booking_details where booking_id = '.$id);

        var_dump($bookingDetails);

        return redirect()->route('bookings')->with('fStatus',"Upodated successfully");
        


   }

   public function mybookingList(){
    $id = auth()->user()->id;

  
    var_dump($id);
    $tables = DB::select('select * from booking where user_id = '.$id);

    
    $bookingDetails = DB::select('select * from booking_details');
    $rooms = DB::select('select * from rooms');
    $bookingEvents = DB::select('select * from booking_events');
    
    return view('userdashboard.booking', ['bookings' => $tables, 'bookingDetails' => $bookingDetails, 'bookingEvents' => $bookingEvents, 'rooms' => $rooms ]);
}
}



function generateRandomString($length) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getClientIPaddress(Request $request) {

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)){
        $clientIp = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $clientIp = $forward;
    }
    else{
        $clientIp = $remote;
    }

    return $clientIp;
 }
