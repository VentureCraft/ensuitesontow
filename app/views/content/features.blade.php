@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Features'))
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

            <h2>Fully appointed portable bathrooms</h2>

            <p class="lead">Convenient and Hygienic, simply a <strong>pleasure to use</strong></p>
            @include('modules.hr')

            <h3>Bathroom features</h3>

            <ul class="team-list">

                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/vanity.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Vanity Area</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>A large semi-recessed porcelain basin with chrome mixer tap is located
                                within a spacious vanity top positioned beneath a large well lit mirror provides you
                                with the comfort of a premium quality bathroom.</p>
                        </span>
                    </div>
                </li>


                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/shower.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Large Shower</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Enjoy the space and convenience of a full sized shower complete with curtain, standard shower head, easy to use mixer tap and large in-built soap and shampoo recesses.</p>
                        </span>
                    </div>
                </li>


                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/toilet.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Flushing Toilet</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>A dual flush toilet suite just like the one at home. The waste is automatically treated and pumped away to the sewer, septic or holding tank as soon as you flush.</p>
                        </span>
                    </div>
                </li>
            </ul>


            <ul class="team-list">
                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/bright-light.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Bright Lighting</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Fluorescent lighting provides a bright well lit bathroom while the exterior courtesy step light makes those night trips to the bathroom a whole lot easier (and safer!) The high capacity exhaust fan easily removes steam from the shower and eliminates any leftover odours.</p>
                        </span>
                    </div>
                </li>


                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/skylight.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Skylight</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>The fully adjustable skylight fitted with retractable sun/privacy screen and insect screen ensures plenty of natural light, while allowing additional fresh air ventilation.</p>
                        </span>
                    </div>
                </li>


                <li class="col-md-4">
                    <div class="team-item thumbnail">
                        <a href="#" class="thumb-info team">
                            <img src="{{ asset('assets/img/features/chrome-rail.jpg') }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Chrome Towel Rails</span>
                            </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Every ensuite has a towel shelf, incorporating hanging rails and a space to hang your clothes with additional clothes hook.</p>
                        </span>
                    </div>
                </li>



            </ul>

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