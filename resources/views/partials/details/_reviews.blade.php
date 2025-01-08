<div class="mt-5">
    @if(count($reviews)>0)
    <div class="d-flex justify-content-between">
        <h4 class="font-weight-bold text-primary">
            Guest Reviews
        </h4>
        <div class="btn btn-primary text-white">
            See availability
        </div>
    </div>
    <div class="d-flex flex-column">
        <div class=" d-flex justify-content-between">
            <div><span class="badge badge-primary p-1" style="font-size:1em">8.1</span>

                Excellent <span class="text-muted">. {{ count($reviews) }} reviews</span><a href="#"
                    class="text-primary text-center ml-2">Read all
                    reviews</a></div>
            <div>
            </div>


        </div>

        <div class="row no-gutters mt-4 mb-5">
            <div class="card-group">
                @foreach ($reviews as $r)
                <div class="card px-2">
                    <div class="card-body">
                        <h5 class="card-title text-secondary font-weight-bold text-center">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    @else
    <div class="d-flex justify-content-between">
        <h4 class="font-weight-bold text-primary">
            No Reviews Yet
        </h4>
    </div>
    @endif
</div>
