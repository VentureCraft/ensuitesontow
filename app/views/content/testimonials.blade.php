@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Testimonials'))
@stop

@section('content')

<div class="container">


    <div class="row">
        <div class="col-md-9">

            <h2>Don't just take <strong>our</strong> word for it</h2>
            <p class="lead">Hear what some of our our happy clients have said</p>

            @include('modules.hr')

            @foreach($categories as $category)
                <h3>{{ $category->name }}</h3>
                @foreach($category->testimonials as $testimonial)
                    @include('modules.testimonial', array('testimonial' => $testimonial))
                    <hr />
                @endforeach
            @endforeach

        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.franchise-enquiries')
            <hr/>
            @include('modules.accolades')
        </div>
    </div>
</div>
@stop