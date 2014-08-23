@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Showers'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Portable Showers</h2>
            <p class="lead">An affordable and convenient shower hire option</p>

            @include('modules.hr')

            <p>If you’re renovating your home and your bathroom is inaccessible, you need the services of Ensuites On Tow. Providing the very best portable shower options, Ensuites On Tow delivers quality equipment to your door so you don’t have to lift a finger. We can deliver, connect and pick up after use, making sure your regular routine is not interrupted.</p>

            <h3>The most versatile and easy to operate shower hire service</h3>

            <p>Perfect for any application, be it a special event, festival or anything else you need to hire a portable shower for, Ensuites On Tow are the preferred providers of shower hire facilities throughout Victoria, SA, and QLD, offering affordable services, the very best equipment with a speedy delivery and pick up service, you can’t go past an Ensuites On Tow shower hire package the next time you need a portable shower.</p>

            <p>For the best temporary portable showers, contact us, the experts at Ensuites On Tow and make sure you always have access to a hot running shower.</p>

            <p><a class="btn btn-primary" href="{{ route('contact') }}">Click here to contact us</a></p>

        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.franchise-enquiries')
        </div>
    </div>
</div>
@stop