<x-guest-layout>
    <div class="row mx-0 px-0 search_container">

        <div class="col-md-3 mb-5">
            @include('partials.userdashboard._dashboard')



        </div>

        <div class="col-md-8" style="margin-bottom: 10em;">
            <div class="card mt-5">
                <h4 class="card-header text-white p-3" style="background: rgb(0, 119, 255);"> Reset Password <span class="text-white text-center ml-1" style="font-size: small;">( or
                        change the password of your account )</span>
                </h4>
                <form method="POST" action="{{ route('passwordupdate', $user->id) }}" >
                     {{ method_field('PUT') }}
                            @csrf
                <div class="card-body">
                    <div class="row no-gutters mt-5">
                        <div class="col-md-2 text-center text-muted" style="margin: 1.5em;">
                            Current password
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="Your account's current password" style="width:600px; height: 50px;">
                        </div>
                    </div>
                    <div class="row no-gutters mt-3">
                        <div class="col-md-2 text-center text-muted" style="margin: 1.5em;">
                            New password
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="new_password" class="form-control" placeholder="New password for your account" style="width:600px; height: 50px;">
                        </div>
                    </div>
                    <div class="row no-gutters mt-3">
                        <div class="col-md-2 text-center text-muted" style="margin: 1.5em;">
                            Confirm password
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Confirm your new password" style="width:600px; height: 50px;">
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" style="margin-left: 13em;">Forgot your current password ? </a>
                    </div>
                </div>
                <div class="mb-5" style="margin-left: 14em;">
                    <button class="btn btn-primary text-white text-center font-weight-bold" style="width: 600px;height: 50px;background: rgb(0, 119, 255);">
                        Reset
                    </button>
                </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
