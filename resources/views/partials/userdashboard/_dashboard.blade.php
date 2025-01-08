<div class="row">
    <div class="col-md-12 mt-5">
        <form>
            <div class="form_container">
                <label for="search" class="h5 font-weight-500 text-white ml-1 text-center">Dashboard</label>
                <div class="form-group  mt-4 mb-2">
                    <a href
                    ="{{  route('personalinfo') }}" class="btn btn-primary text-white text-center w-100"
                        style="height: 3.5rem; font-size: 15px;">
                        <i class="fa fa-user-circle mr-1"></i> Personal
                        Information
                    </a>
                </div>

                <div class="form-data mb-2">
                    <a href
                    ="{{  url('bookingdetails') }}" class="btn btn-primary text-white text-center w-100"
                        style="height: 3.5rem;  font-size: 15px;">
                        <i class="fa fa-history mr-1 align-left"></i> Booking
                        History
                    </a>
                </div>

                <div class=" form-data mb-4">
                    <a href
                    ="{{ route('passwordchange') }}" class="btn btn-primary text-white text-center w-100"
                        style="height: 3.5rem;  font-size: 15px;">
                        <i class="fa fa-unlock-alt mr-1"></i> Reset Password
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>