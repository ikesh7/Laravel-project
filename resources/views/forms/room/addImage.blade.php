@extends('agents.layouts.master')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Add Images to Room
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-12">
                    <div class="kt-portlet__body">
                        <h2>Current Images</h2>
                        <div class="row">
                            @forelse($room->getMedia('gallery') as $image )
                            <div class="col-md-4">
                                <img src="{{ $image->getUrl() }}" class="img img-thumbnail" alt="{{ $image->name }}">
                                <form
                                    action="{{ route('room.media.destroy',['mediaId'=>$image->id,'modelId' => $room->id]) }}"
                                    id="deleteImage{{ $image->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <i class="fa fa-trash" onclick="deleteImage(event,{{ $image->id }})"
                                        title="Delete Image"></i>
                                </form>
                            </div>
                            @empty
                            <div class=" col-12 alert alert-info" role="alert">
                                No Images Found
                            </div>
                            @endforelse
                        </div>
                        <form method="POST" action="{{ route('room.upload',$room->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class=" my-4 col-6 offset-1 ml-4 mr-1">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="image">
                                                <img src="{{ asset('images/placeholder.jpg') }}"
                                                    title="click to add image" style="cursor:pointer;" width="250"
                                                    class="img img-thumbnail" alt="">
                                            </label>
                                            <input type="file" name="image" id="image" class="d-none">
                                            @if($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-outline-primary" type="submit">Save
                                            </button>
                                            <a class="btn btn-sm btn-outline-danger"
                                                href="{{route('room.index')}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function deleteImage(e, id) {
                        e.preventDefault();
                        const con = confirm('are you sure?');
                        if (con)
                            document.getElementById('deleteImage' + id).submit();
                        else
                            return false;
                    }
</script>
@endpush
