@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'About Us'))
@stop

@section('content')

<div class="container">

    <h2>How we <strong>started</strong></h2>
    <p class="lead">
        Ensuites On Tow was originally founded in 2003 to provide portable bathroom services for the home or office renovation market. Our luxury portable bathrooms (LPBs) were designed to offer a comfortable and convenient alternative when the existing bathroom in the home or workplace was being renovated or redesigned. That demand soon spread to providing LPBs for a range of public and private purposes including community events, sporting carnivals, film location shoots, wedding receptions, outdoor parties and much more.
    </p>

    @include('modules.hr')

    <div class="row">
        <div class="col-md-9">

            <h3>Our <strong>expansion</strong></h3>
            <p>Beginning in our home state of Victoria and expanding throughout to South Australia and Queensland, Ensuites On Tow plans to grow nationally through our franchise options. Our current franchisees have tapped into a growing market and enjoy the flexibility of growing their own business at their own pace. Whether you are based in one of our already serviced locations or wish to break new ground with us in New South Wales, Western Australia or elsewhere throughout Australia, Ensuites On Tow can happily help you!</p>

            <p>Want to get in touch or join the team? <a class="btn btn-primary" href="{{ route('contact') }}">Contact Us</a></p>
            <div class="text-center">
                <div class="img-thumbnail">
                    <img class="img-responsive" src="{{ asset('assets/img/team.jpg') }}" alt="The Team">
                </div>
            </div>

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