<h2>What <strong>Client's Say</strong></h2>

<div class="row">
    <div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
        @foreach(Testimonial::orderByRaw("RAND()")->take(3)->get() as $testimonial)
        <div>
            <div class="col-md-12">
                @include('modules.testimonial')
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('testimonials') }}">Read more testimonials here</a>
    </div>
</div>