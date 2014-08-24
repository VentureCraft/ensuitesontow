@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Oops, something went wrong'))
@stop

@section('content')
<section class="page-not-found">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="page-not-found-main">
                <h2 class="text-danger">UHOH <i class="icon icon-warning"></i></h2>

                <p>We're sorry, something seems to have gone wrong:</p>

                <p>If this keeps happening, please <a href="{{ route('contact') }}">let us know</a> so we can fix the
                    issue.</p>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Here are some useful links</h4>
            <ul class="nav nav-list primary">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a href="{{ route('franchisee.hire') }}">Find a provider</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</section>

@stop