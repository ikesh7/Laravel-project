@extends('admin.layouts.master')

@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">

                            @if(request()->segment(3)!=0)
                            Edit User
                            @else
                            Create User
                            @endif
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    @php $id=request()->segment(3);@endphp
                    <form action="{{route('users.store',[$id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" my-4 col-6 offset-1 ml-4 mr-1">
                                <div class="card-body">
                                    <div class="mx-2">
                                        <div
                                            class="form-group @if($errors->has('username'))  validate is-invalid @endif">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username"
                                                class="form-control @if($errors->has('username')) is-invalid @endif"
                                                placeholder="john_doe"
                                                value="{{ old('username') ?? $object->username  ?? ''}}">

                                            @if($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div
                                            class="form-group @if($errors->has('display_name'))  validate is-invalid @endif">
                                            <label for="display_name">Full Name</label>
                                            <input type="text" name="display_name" id="display_name"
                                                class="form-control @if($errors->has('display_name')) is-invalid @endif"
                                                placeholder="John Doe"
                                                value="{{ old('display_name') ?? $object->display_name  ?? ''}}">

                                            @if($errors->has('display_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('display_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group @if($errors->has('email'))  validate is-invalid @endif">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @if($errors->has('email')) is-invalid @endif"
                                                placeholder="johndoe@mail.com"
                                                value="{{ old('email') ?? $object->email  ?? ''}}">
                                            @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group @if($errors->has('pass'))  validate is-invalid @endif">
                                            <label for="pass">Password</label>
                                            <input type="text" name="pass" id="pass"
                                                class="form-control @if($errors->has('pass')) is-invalid @endif"
                                                value="{{old('pass') ?? ''}}">
                                            @if($errors->has('pass'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('pass') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="about">About</label>
                                            <textarea class="form-control" name="about" rows="7" cols="10" id="about"
                                                placeholder="Short Information about User">{{ old('about') ?? $object->about ?? ''}}</textarea>

                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-sm btn-outline-primary" type="submit">Save
                                            </button>
                                            <a class="btn btn-sm btn-outline-danger"
                                                href="{{route('users.index')}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- secondary form --}}
                            <div class="my-4 col-5 ml-4 mr-1">
                                <div class="card-body">
                                    <div class="mx-2">
                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select name="is_active" id="is_active" class="form-control">
                                                <option disabled>Select an Option</option>
                                                <option value="1" @if( isset($object) && ($object->is_active==1))
                                                    selected @endif>
                                                    Active
                                                </option>
                                                <option value="0" @if(isset($object) && $object->is_active==0))
                                                    selected @endif>Inactive
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Roles</label>
                                            @foreach($roles as $role)
                                            <div class="form-check">
                                                <label class="form-check-label text-capitalize">
                                                    <input type="checkbox" class="form-check-input " name="roles[]"
                                                        id="role{{$role->id}}" value="{{$role->id}}" @isset($object)
                                                        @if(isSelected(\App\User::find($object->user_id)->roles,$role))
                                                    checked @endif @endisset >
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                            @endforeach

                                            <small id="name" class="text-muted">Select all roles associated with
                                                this user.
                                            </small>

                                            @error('roles')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="user_image">User Image</label>

                                            <input type="file" name="user_image" id="user_image" class="form-control">
                                            @error('user_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            @isset($object)
                                            @if(is_file(public_path('storage/users/'.$object->avatar)))
                                            <img src="{{ asset('storage/users/'.$object->avatar) }}" alt="" width="150">
                                            @endif
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    $(function () {
            var $body = $("body");
            $body.on('change', '.js-change-content-language', function (event) {
                event.preventDefault();
                var current = $(this);
                window.location.href = current.attr('data-href') + current.val();
            });
        })
</script>
@endpush
@section('content-head')
@include('admin.partials.content-head',[
'title' => request()->segment(3)==0?'Create User':'Edit User',
'formLink' => '/admin/users',
'head' => 'List Users:'
])
@endsection
