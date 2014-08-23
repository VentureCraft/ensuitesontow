@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Hire Service'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Hire Services for Luxury Bathrooms</h2>
            <p class="lead">Ensuites on Tow provides comprehensive portable bathroom hire services that cater to anyone requiring temporary amenities, whether they need a complete portable bathroom, shower or toilet. We not only supply the best quality luxury bathrooms available in Australia but we offer a delivery service to match. Our service guarantee endorses our commitment and ensures customer satisfaction.</p>

            @include('modules.hr')


            <h3>Accreditation</h3>

            <p>When it comes to the delivery and installation of our luxury portable bathrooms, the safety of our customers and operators is paramount. Therefore all Ensuites on Tow operators have undergone an exclusive training and certification program to ensure they can assess safety risks and take the relevant steps to eliminate any such risk should they occur. This ensures that all Ensuites on Tow customers enjoy a safe and comfortable experience with us. All Ensuites on Tow operators carry comprehensive insurance cover including product and public liability.</p>

        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.franchise-enquiries')
        </div>
    </div>
</div>
@stop