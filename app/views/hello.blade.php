@extends('templates.default')

@section('content')

@include('modules.home-slider')

@include('modules.home-intro-bar')

@include('modules.perfect-for')

@include('modules.bubbles', array('show_large' => true))

@include('modules.hr')

<section class="featured">
    <div class="container">

        <h2 class="push-top">Luxury Portable Ensuites & Bathrooms for Hire</h2>

        <div class="row">
            <div class="col-md-6">

                <h3 class="lead">
                    Rent from Australia's premium portable bathroom and ensuite hire service
                </h3>

                <p class="tall">
                    Ensuites on Tow's award winning luxury portable toilets and bathrooms hire have been specially
                    designed to
                    ensure you, your family and/or guests enjoy the comfort, convenience and safety of a clean,
                    hygienic, fully
                    appointed portable bathroom. We currently provide our luxury portable bathroom franchise hire
                    services to
                    VIC, SA and QLD and are growing nationally.
                </p>

                <p class="tall">
                    Our portable bathrooms and ensuites are perfect for most temporary situations whether you require a
                    complete
                    bathroom, portable shower or spacious portable toilets for your next event, party, wedding or
                    bathroom
                    renovation etc. Contact Ensuites on Tow for the best ensuite hire service and let us cater to your
                    specific
                    needs.
                </p>
            </div>
            <div class="col-md-6">

                <h3 class="lead">The portable ensuite hire Victoria prefers</h3>

                <p class="tall">
                    When you choose Ensuites on Tow for your luxury portable ensuite hire needs, your satisfaction is
                    guaranteed! We deliver our portable bathrooms to your location, set them up, (including temporary
                    connection
                    to the required services) and take them away when you have finished, all without you having to lift
                    a
                    finger.
                </p>

                <p class="tall">
                    Our portable ensuite hire service is available for daily, weekly or monthly hire to suit your
                    specific
                    requirements. Contact us today to rent a bathroom for your next event!
                </p>

                <p class="tall">
                    Find out about more about our Bathroom Franchise Opportunities Here.
                </p>

                <p class="tall">
                    So “When a portable loo just won’t do” you can rely on Ensuites On Tow.
                </p>
            </div>
        </div>
    </div>
</section>


<div>
    <section class="featured footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @include('modules.home-accolades')
                </div>
                <div class="col-md-6">
                    @include('modules.testimonials')
                </div>
            </div>
        </div>
    </section>
</div>


@stop