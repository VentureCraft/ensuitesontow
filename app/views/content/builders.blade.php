@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Builders and Renovators'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>On-site Bathroom Hire Services for Builders & Renovators</h2>
            <p class="lead">Attention builders and renovators: Ensuites on Tow has been designed to enhance your business, setting you apart from other builders and enable you to provide a duty of care to your customers. Through our luxury portable bathroom hire services your customers can survive the disruptive bathroom renovation process with ease, having access to a fully equipped bathroom. This allows you the freedom to avoid the pressure of that completion date when things don’t go to plan!</p>

            @include('modules.hr')

            <h3>Hire an on-site portable toilet for your clients' convenience</h3>

            <p>If your client has just too many people for one bathroom, or they have more than one bathroom in their home, that’s great! Offering Ensuites on Tow to your clients can allow you to renovate both bathrooms at the same time without completely inconveniencing the household. Additionally, offering this service to your customers could actually help generate work for your business when your clients have no alternative!</p>

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