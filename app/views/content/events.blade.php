@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Event Organisers'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Bathroom Hire for Outdoor Events</h2>
            <p class="lead">Hire portable toilet facilities for parties, functions, community events + more!</p>

            @include('modules.hr')

            <p>When your clients are organising a special community outdoor event or a large scale work function, enhance your business and theirs by providing Australia’s premium bathroom / toilet hire service Ensuites on Tow. This will give your clients and guests peace of mind, knowing they have an alternative to the old traditional portable loo.</p>

            <p>Designed to enhance any private or corporate event, our award winning bathrooms offer your clients the opportunity to experience the comfort and luxury they and their guests deserve. The fittings featured in our bathrooms are the same as in a home bathroom, while the hygienic waste treatment system eliminates odours and the need for chemicals.</p>

            <p>Whether your clients require a single bathroom or multiple units to cater for numbers we can assist you. We can tailor a package to suit your individual client’s needs, incorporating others services and or equipment as required.</p>

            <p>Enquire about becoming an <span class="alternative-font">Alliance partner</span> and begin receiving the benefit today.</p>

            <a class="btn btn-primary" href="{{ route('contact') }}">Click here to contact us</a>
        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.franchise-enquiries')
        </div>
    </div>
</div>
@stop