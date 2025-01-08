
<x-app-layout>

   
<x-slot name="header">
   <div class="head2"> 
       {{ __('My Bookings') }}
       </div>
</x-slot>


<!-- <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <div class="p-6 bg-white border-b border-gray-200">
               You're logged in as a user !
           </div>
       </div>
   </div>
   <div class="form-group">
       <input type="text" name="city_name" id="city_name" class="form-control input-lg" placeholder="Search City" />
       <div id="cityList">
       </div>
   </div>
   {{ csrf_field() }}
</div> -->


<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr class="value_table">
                    <th class="text-center"> #</th>
                    <th class="text-center text-small"> Booking Code</th>
                    <th class="text-center text-small"> Room </th>
                    <th class="text-center text-small"> Price </th>
                    <th class="text-center text-small"> Check In </th>
                    <th class="text-center text-small"> Check Out </th>
                    <th class="text-center text-small"> Status </th>
                    <th class="text-center text-small"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td class="text-center fill-current text-white"> {{ $loop->index + 1 }} </td>
                        <td class="text-center fill-current text-white"> {{ $booking->booking_code }} </td>
                        @foreach($bookingDetails as $bookingDetail)
                            @if($booking->ID == $bookingDetail->booking_id)
                                @foreach($rooms as $room)
                                    @if($bookingDetail->room_id == $room->id)
                                    <td class="text-center fill-current text-white"> {{ $room->name }} </td>
                                    @endif
                                @endforeach
                                <td class="text-center fill-current text-white"> Rs. {{ $bookingDetail->price }} /- </td>
                                <td class="text-center fill-current text-white"> {{ $bookingDetail->check_in }} </td>
                                <td class="text-center fill-current text-white"> {{ $bookingDetail->check_out }} </td>
                            @endif
                        @endforeach
                        
                        
                        
                           
                        @foreach($bookingEvents as $bookingEvent)
                            @if($bookings->id == $bookingEvent->booking_id)
                                @if($bookingEvent->status == 0)
                                <td class="text-center fill-current text-white">  {{ "Pending" }} </td>
                                @elseif($bookingEvent->status == 1)
                                <td class="text-center fill-current text-white font-weight-bold">   {{ "Booked" }} </td>
                                @elseif($bookingEvent->status == 2)

                                <td class="text-center fill-current text-danger"> {{ "Cancelled" }}</td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>

<script>
$(document).ready(function(){

$('#city_name').keyup(function(){ 
   var query = $(this).val();
   if(query != '')
   {
    var _token = $('input[name="_token"]').val();
    $.ajax({
     url:"{{ route('autocomplete.fetch') }}",
     method:"POST",
     data:{query:query, _token:_token},
     success:function(data){
      $('#cityList').fadeIn();  
               $('#cityList').html(data);
     }
    });
   }
});

$(document).on('click', 'li', function(){  
   $('#city_name').val($(this).text());  
   $('#cityList').fadeOut();  
});  

});
</script>
