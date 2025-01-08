<div class="card bg-white mt-5">
    <h5 class="card-header bg-primary text-white font-weight-bold">Popular Facilities  </h5>

    <div class="row no-gutters p-3 mb-auto">
        @forelse ( $facilities as $facility )
        <button class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-heart text-white mr-1"></span> {{$facility->name}}</button>
        @empty
            <p></p>
        @endforelse
    </div>

</div>
