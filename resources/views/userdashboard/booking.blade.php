<x-guest-layout>
    <div class="row mx-0 px-0 search_container">

        <div class="col-md-3 mb-5">
            @include('partials.userdashboard._dashboard')

        </div>

        <div class="col-md-8" style="margin-bottom: 10em; margin-top: 3.3em;">

            <h4 class="card-header  p-3" style="background: rgb(0, 119, 255);"> Booking History <span class=" text-center ml-1"
                    style="font-size: small;">( the details of your booking via
                    your account )</span>
            </h4>



            <table class="table table-bordered">
                <thead>
                 <tr class="value_table">
                    <th scope="col" class="text-center"> #</th>
                    <th scope="col" class="text-center text-muted"> Booking Code</th>
                    <th scope="col" class="text-center text-muted"> Room </th>
                    <th scope="col" class="text-center text-muted"> Price </th>
                    <th scope="col" class="text-center text-muted"> Check In </th>
                    <th scope="col" class="text-center text-muted"> Check Out </th>
                    <th scope="col" class="text-center text-muted"> Status </th>
                    <th scope="col" class="text-center text-small"></th>
                </tr>
                    
                </thead>
                <tbody>
                    <tr>
                     @foreach($bookings as $booking)
                    <tr>
                        <td class="text-center fill-current "> {{ $loop->index + 1 }} </td>
                        <td class="text-center fill-current "> {{ $booking->booking_code }} </td>
                        @foreach($bookingDetails as $bookingDetail)
                            @if($booking->id == $bookingDetail->booking_id)
                                @foreach($rooms as $room)
                                    @if($bookingDetail->room_id == $room->id)
                                    <td class="text-center fill-current "> {{ $room->name }} </td>
                                    @endif
                                @endforeach
                                <td class="text-center fill-current "> Rs. {{ $bookingDetail->price }} /- </td>
                                <td class="text-center fill-current "> {{ $bookingDetail->check_in }} </td>
                                <td class="text-center fill-current "> {{ $bookingDetail->check_out }} </td>
                            @endif
                        @endforeach
                        
                        
                        
                           
                        @foreach($bookingEvents as $bookingEvent)
                            @if($booking->id == $bookingEvent->booking_id)
                                @if($bookingEvent->status == 0)
                                <td class="text-center fill-current ">  {{ "Pending" }} </td>
                                @elseif($bookingEvent->status == 1)
                                <td class="text-center fill-current  font-weight-bold">   {{ "Booked" }} </td>
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
    </div>
</x-guest-layout>