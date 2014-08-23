@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Weddings'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Luxury Ensuite Hire for Weddings</h2>
            <p class="lead">Outdoor bathroom hire services for your convenience</p>

            @include('modules.hr')

            <p>Ensuites on Tow provides luxury outdoor toilet and bathroom hire for weddings; ideal for outdoor ceremonies or receptions. As far as outdoor wedding ceremony ideas go, portable bathroom hire is one that will prove to be truly invaluable to the success of your special day. Your guests will appreciate the convenience of having luxury ensuite facilities nearby, and our luxury ensuite hire for weddings are beyond comparison.</p>

            <p>Whether you’re the groom looking to enjoy a quick shower before the ceremony or a proud mother needing to reapply her makeup following an emotional speech at the reception, you’ll love the comfort and style of our luxury ensuite hire options. With plenty of <a href="{{ route('features') }}">features</a> that will make you feel like you’re in your ensuite at home, contact Ensuites on Tow today for deluxe outdoor toilet and bathroom hire for weddings today.</p>
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