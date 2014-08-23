@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Alliances'))
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

            <div class="tabs tabs-vertical tabs-left">
                <ul class="nav nav-tabs col-sm-3">
                    <li class="active">
                        <a href="#plumbers" data-toggle="tab">Plumbers</a>
                    </li>
                    <li class="">
                        <a href="#wedding" data-toggle="tab">Wedding</a>
                    </li>
                    <li class="">
                        <a href="#event-planners" data-toggle="tab">Event Planners</a>
                    </li>
                    <li class="">
                        <a href="#hire" data-toggle="tab">Hire</a>
                    </li>
                    <li class="">
                        <a href="#suppliers" data-toggle="tab">Suppliers</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="plumbers" class="tab-pane active">

                        <h4>Merret Plumbing</h4>
                        <p>Plumbing and Gasfitting specialists providing quality work for 20 years servicing Melbourne Metro and most of Victoria for all your commercial plumbing requirements.</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.merrettplmbing.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>CMD Bathroom Renovations & Plumbing Services</h4>
                        <p>CMD Bathroom Renovations and Plumbing Services has been creating and providing beautiful Melbourne bathroom renovations for over 10 years. Situated in Melbourne’s Eastern suburbs we really are Melbourne’s bathroom renovations experts!</p>
                        <a class="btn btn-default"  rel="nofollow" target="_blank" href="http://www.cmdplumbing.com.au/">Visit site</a>

                    </div>
                    <div id="wedding" class="tab-pane">

                        <a rel="nofollow" target="_blank" href="http://www.registeryourwedding.com.au/">
                            <img src="http://www.registeryourwedding.com.au/images/450x75banner.jpg" alt="Register" your="" wedding="" is="" the="" essential="" tool="" for="" all="" couples="" organising="" their="" dream="" in="" australia="" width="450" height="75" border="0">
                        </a>
                        <a class="btn btn-default"  rel="nofollow" target="_blank" href="http://www.registeryourwedding.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>OnCue Events</h4>
                        <p>Offering the highest quality Wedding Event Management services in South Australia. Specialising in marquee weddings, OnCue Events have packages to suit all stages of the wedding planning process.</p>
                        <a class="btn btn-default"  rel="nofollow" target="_blank" href="http://www.oncueevents.com.au/">Visit site</a>

                    </div>
                    <div id="event-planners" class="tab-pane">
                        <h4>OnCue Events</h4>
                        <p>Offering the highest quality Wedding Event Management services in South Australia. Specialising in marquee weddings, OnCue Events have packages to suit all stages of the wedding planning process</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.oncueevents.com.au/">Visit site</a>
                    </div>
                    <div id="hire" class="tab-pane">

                        <h4>Loe's Hardware and Hire</h4>
                        <p>Servicing the Bass Coast Shire and South Gippsland Shire and surrounding areas of Victoria for the past 30 years, supplying everything from steel reinforcement for concreters, down to supplying all the builders and tradesman's power and hand tools</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.loeshardware.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>Bedouin Tents</h4>
                        <p>Make a bold statement at your next event or production with one of our unique range of bedouin-style freeform stretch marquees, tents and canopies. Sydney, Melbourne, Brisbane & the Gold Coast</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.bedouintents.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>South Gippsland Hire</h4>
                        <p>At S.G Hire we are always updating our equipment to suit our customers needs so give us a call.</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.sghire.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>S & S Equipment Hire</h4>
                        <p>Covering all your equipment hire needs in and around Morwell Victoria.</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.ssequipmenthire.com.au/">Visit site</a>

                        @include('modules.hr')

                        <h4>iParty Online</h4>
                        <p>Be it a quiet get together around the pool, an office party with workmates, a wedding, a bucks or hens party, an 18th, 21st or 81st birthday, a raging party for the teenagers that takes over the whole yard, a kid’s party in air-conditioned confines, or a more conservative corporate style event, we have all your audio-visual hire needs sorted.</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.ipartyonline.com.au/">Visit site</a>

                    </div>
                    <div id="suppliers" class="tab-pane">

                        <h4>Accommodation Amenities</h4>
                        <p>Suppliers and distributors of hotel and resort amenities through out the Asia Pacific region.</p>
                        <a class="btn btn-default" rel="nofollow" target="_blank" href="http://www.accam.com.au/">Visit site</a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            @include('modules.franchise-enquiries')
            @include('modules.search')
            @include('modules.accolades')
        </div>
    </div>
</div>
@stop