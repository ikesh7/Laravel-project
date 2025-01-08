@extends('agents.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            {{-- <i class="kt-font-brand flaticon2-bar-chart"></i> --}}
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Bookingss
                        </h3>
                    </div>


                   
                    
                </div>


    <div class="kt-portlet__body">
                    <table class="table table-bordered table-striped table-hover table-condensed" id="beds-table">
            <thead>
                <tr class="value_table">
                    <th class="text-center"> #</th>
                    <th class="text-center"> Booking Code</th>
                    <th class="text-center"> Booked By </th>
                    <th class="text-center"> Check In </th>
                    <th class="text-center"> Check Out </th>
                    <th class="text-center"> Status </th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td class="text-center fill-current text-white"> {{ $loop->index + 1 }} </td>
                        <td class="text-center fill-current text-white"> {{ $booking->booking_code }} </td>
                        <td class="text-center fill-current text-white"> 
                            @foreach($bookingUsers as $bookingUser)
                                @if($booking->user_id == $bookingUser->id)
                                    {{ $bookingUser->first_name }} {{ $bookingUser->last_name }}
                                @endif
                            @endforeach 
                        </td>

                        @foreach($bookingDetails as $bookingDetail)
                            @if($booking->ID == $bookingDetail->booking_id)
                                <td class="text-center fill-current text-white"> {{ $bookingDetail->check_in }} </td>
                                <td class="text-center fill-current text-white"> {{ $bookingDetail->check_out }} </td>
                            @endif
                        @endforeach
                        
                        
                        <td class="text-center fill-current text-white"> 
                           
                            @foreach($bookingEvents as $bookingEvent)
                                @if($booking->ID == $bookingEvent->booking_id)
                                    @if($bookingEvent->status == 0)
                                        {{ "Pending" }}
                                    @elseif($bookingEvent->status == 1)
                                        {{ "Booked" }}
                                    @elseif($bookingEvent->status == 2)

                                        {{ "Cancelled" }}
                                    @endif
                                @endif
                            @endforeach
                           
                           
                        </td>
                        <td>
                            <div class="row justify-content-center">
                                <a href="{{url('booking/update/'.$booking->ID)}}" class="mr-2"><h4 class="btn fill-current text-white add_btn">Edit</h4></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection