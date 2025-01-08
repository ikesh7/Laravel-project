<div class=" mt-5">
    <div class="d-flex flex-wrap">
        @forelse ($gallery as $key => $image )
        @if($key <2) <div class="col-md-6  images_details">
            <img class="" src="{{ $image->getUrl() }}">
    </div>
    @else
    <div class="col-md-4  images_details">
        <img class="" src="{{ $image->getUrl() }}">
    </div>
    @endif
    @empty
    <div class="col-md-12  images_details">
        <img class="" src="/images/placeholder.jpg">
    </div>
    @endforelse
</div>
</div>
