@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Hire an Ensuite On Tow'))
@stop

@section('content')

<div class="container">

    <h2>Luxury Portable Bathroom Hire</h2>
    <p class="lead">Enter your postcode below to find your nearest provider</p>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
            {{ Form::open(array('route' => 'franchisee.search')) }}
            <div class="input-group">
                {{ Form::input('number', 'postcode', null, array('class' => 'form-control')) }}
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search</button>
            </span>
            </div>
            {{ Form::close() }}

        </div>
    </div>


    @include('modules.hr')

    <div class="row">
        <div class="col-md-9">

            <p>When you're working on a construction site or attending an outdoors party or work function away from
                fixed amenities, the convenience of having portable bathroom rental options on site is something that
                everyone appreciates.</p>

            <p><a href="{{ route('site.index') }}">Ensuites on Tow</a> provides luxury toilet hire that gives everyone
                on site or in attendance the peace of mind that relief is close by.</p>

            <p>There are a multitude of situations where portable bathroom hire can be beneficial. Rent a bathroom from
                Ensuites on Tow for your:</p>
            <ul>
                <li>Outdoor party</li>
                <li>Construction or home renovation site</li>
                <li>Film set or location shoot</li>
                <li>Work function</li>
                <li>Outdoor concert or festival</li>
                <li>Wedding reception</li>
                <li>Community event</li>
                <li>Sporting event</li>
            </ul>
            <p>You'll be surprised at how appreciated your portable bathroom is!</p>

            <h3>Why choose Ensuites on Tow for your bathroom rental needs?</h3>

            <p>Rent a bathroom from Ensuites on Tow and you’ll receive:</p>

            <ul>
                <li>Efficient and professional delivery to your nominated location or address.</li>
                <li>A fully safety certified and insured Ensuites on Tow operator to take care of all your positioning and
                    connections services.</li>
                <li>No special requirements or permits needed.</li>
                <li>A guarantee that your bathroom rental will be spotlessly clean open delivery</li>
            </ul>

            <p>Currently we provide portable bathroom hire in Melbourne, Adelaide and Cairns with plans to expand
                Australia wide. For luxury portable toilet hire for your next event or occasion, call Ensuites On Tow on
                {{ Config::get('ensuites.contact.phone') }} today.</p>

        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.franchise-enquiries')
        </div>
    </div>
</div>
@stop