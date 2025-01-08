<x-guest-layout>

    <div class="row mx-0 px-0 search_container">

        <div class="col-md-3 mb-5">
            @include('partials.userdashboard._dashboard')


        </div>

        <div class="col-md-8" style="margin-bottom: 10em;">
            <div class="card mt-5">
                <h4 class="card-header text-white p-3" style="background: rgb(0, 119, 255);"> Personal Information <span class="text-white text-center ml-1" style="font-size: small;">( enter your personal & address details )</span></h4>
                <div class="card-body">
                    <h5 class=" ml-1 mt-3 bg-secondary text-white p-1">PERSONAL DETAILS</h5>
                    
                    <form method="POST" action="{{ route('personalinfoupdate', $user->id) }}" >
                     {{ method_field('PUT') }}
                            @csrf
                    <div class="row p-2">

                            
                            
                            <div class="col-md-4" style="margin-left: 2em;">
                                <label for="">First name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ $user->first_name }}" style="height: 50px;width: 350px;"required>
                            </div>
                            <div class="col-md-4" style="margin-left: 9em;">
                                <label for="">Last name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{ $user->last_name }}" style="height: 50px;width: 350px;"required>
                            </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-4" style="margin-left: 2em;">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="contact_no" placeholder="Contact number" value="{{ $user->contact_no}}" style="height: 50px;width: 350px;" required>
                        </div>
                        <div class="col-md-4" style="margin-left: 9em;">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control"  placeholder="Email address" value="{{ $user->email }}" style="height: 50px;width: 350px;"required>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-4" style="margin-left: 2em;">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Contact number" value="{{ $user->address}}" style="height: 50px;width: 350px;"required>
                        </div>
                        
                    </div>
                    
                </div>
                 <div class="" style="margin: 4em;">
                    <button class="btn text-white text-center font-weight-bold" style="width: 350px;height: 50px;background: rgb(0, 119, 255);">
                        Update
                    </button>
                </div>

                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
