@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Installation'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Outdoor Bathroom & Toilet Installation</h2>
            <p class="lead">Expert services providing the convenience you need</p>

            @include('modules.hr')

            <p>The fully trained Ensuites on Tow operators deliver, set up and remove the bathroom units for you.</p>

            <p>Using the unique waste treatment system within our Luxury Portable Bathrooms allows the operator to temporarily connect the unit directly to an existing sewer or septic system. This avoids any odours and the use of chemicals etc. which reduces waste handling issues.</p>

            <p>Water is drawn from the normal mains water supply or tank storage and the power supply is connected to standard 240v 10 amp power supplies. Our operators supply all relevant hoses and power leads and take care of all every detail ensuring you have a fully functional, ready to use bathroom within a very short time.</p>

            @include('modules.bubbles', array('show_large' => false))

            <p>At the completion of the hire period, our operators will disconnect the unit from the relevant services and carefully remove it leaving the site un-harmed; our customers do not have to worry about a thing!</p>

            <ul>
                <li>Where sewer or septic access is not be available, separate holding tanks may be utilised.</li>
                <li>Where water is not available separate holding tanks with pressure pump may be utilised.</li>
                <li>Where 240v power is not available generators may be utilised.</li>
            </ul>

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