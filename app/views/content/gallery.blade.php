@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Gallery'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Ensuites On Two <strong>in action</strong></h2>

            @include('modules.hr')

            <ul class="portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/renovation.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/renovation.jpg">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Renovation</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                                </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/country-wedding.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/country-wedding.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Wedding</span>
                                <span class="thumb-info-type">in the country</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/country-wedding-1.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/country-wedding-1.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Wedding</span>
                                <span class="thumb-info-type">in the country</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/vanity-area.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/vanity-area.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Vanity Area</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/friendly-staff.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/friendly-staff.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Friendly staff</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/franchise-team.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/franchise-team.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Franchise team</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/multiple-hire.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/multiple-hire.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Multi hire</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/hrt.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/hrt.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Holden</span>
                                <span class="thumb-info-type">Racing Team</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/hrt-b-double-and-units.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/hrt-b-double-and-units.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">HRT</span>
                                <span class="thumb-info-type">B Double & Units</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/scott-cam.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/scott-cam.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Scott Cam</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/australasias-strongman.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/australasias-strongman.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Australasias</span>
                                <span class="thumb-info-type">Strongman</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/bolwell-and-ensuites-on-tow.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/bolwell-and-ensuites-on-tow.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Bolwell</span>
                                <span class="thumb-info-type">and Ensuites On Tow</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/internal-luxury.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/internal-luxury.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Internal</span>
                                <span class="thumb-info-type">Luxury</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/our-door-of-fame.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/our-door-of-fame.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Our door</span>
                                <span class="thumb-info-type">of fame</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/at-the-races.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/at-the-races.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">At the races</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/showgirls.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/showgirls.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Showgirls</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="col-md-4">
                    <div class="portfolio-item img-thumbnail">
                        <a href="assets/img/gallery/showgirls-1.jpg" class="thumb-info">
                            <img alt="" class="img-responsive" src="assets/img/gallery/showgirls-1.jpg">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Showgirls</span>
                            </span>
                            <span class="thumb-info-action">
                                <span title="Universal" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
                            </span>
                        </a>
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