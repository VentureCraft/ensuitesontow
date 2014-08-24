@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Page not found'))
@stop

@section('content')<section class="page-not-found">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="page-not-found-main">
                <h2 class="text-muted">404 <i class="icon icon-file"></i></h2>
                <p>We're sorry, but the page you were looking for doesn't exist.</p>
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