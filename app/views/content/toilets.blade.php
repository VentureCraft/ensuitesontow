@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Toilets'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Portable Toilets</h2>
            <p class="lead">Affordable and reliable spacious toilet hire</p>

            @include('modules.hr')

            <p>There is a range of reason people require the services of a spacious portable toilet. Whether you’re staging an event, expo or an outdoor party or wedding, portable toilet hire is the best way to ensure your guests have easy access to facilities.</p>

            <p>Ensuites On Tow provide the best quality luxury portable toilet hire/rental service in Australia and strives to cater to your every need. We can be on site delivering your <a href="{{ route('site.index') }}">portable bathrooms</a> when required so you don’t have the worry. For the most convenient toilet hire service contact Ensuites On Tow.</p>

            <h3>Delivering portable toilets for a range of applications</h3>

            <p>Portable toilets are one of the most sought after hire products in Victoria, SA and QLD. You cannot sacrifice the quality of spacious toilet hire at your event or function so to make sure your guests have access to the very best amenities call Ensuites On Tow now for an affordable toilet hire solution.</p>

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