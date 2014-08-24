@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => $franchisee->name))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-4">

            <div class="thumbnail">
                @if($franchisee->image)
                <img alt="" width="100%" class="img-responsive" src="{{ asset('assets/img/franchisee/'.$franchisee->image) }}">
                @else
                <img alt="" width="100%" class="img-responsive" src="{{ asset('assets/img/gallery/franchise-team.jpg') }}">
                @endif
            </div>

        </div>

        <div class="col-sm-8">

            <h2 class="shorter">{{ $franchisee->name }}</h2>
            <h4>{{ $franchisee->location }}</h4>

            <table class="table">
                <tr>
                    <td>Service Area</td>
                    <td>{{ $franchisee->location }}</td>
                </tr>
                <tr>
                    <td>Contact Phone Number</td>
                    <td>{{ $franchisee->phone }}</td>
                </tr>
                @if($franchisee->direct_phone)
                <tr>
                    <td>Direct Phone No</td>
                    <td>{{ $franchisee->direct_phone }}</td>
                </tr>
                @endif
                @if($franchisee->email)
                <tr>
                    <td>Direct Email</td>
                    <td>
                        @foreach(explode(';',$franchisee->email) as $email)
                        <a href="mailto:{{ $email }}">{{ $email }}</a><br />
                        @endforeach
                    </td>
                </tr>
                @endif
                @if($franchisee->url)
                <tr>
                    <td>Website</td>
                    <td><a href="{{ $franchisee->url }}">{{ $franchisee->url }}</a></td>
                </tr>
                @endif
            </table>

        </div>
    </div>

</div>
@if($franchisee->about)
<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/img/parallax-transparent.jpg') }}); background-position: 0px -19px;">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">

                <div class="row">
                    <div class="owl-carousel owl-theme owl-carousel-init" data-plugin-options="{&quot;items&quot;: 1}"
                         style="display: block; opacity: 1;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 4680px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 1170px;">
                                    <div>
                                        <blockquote>
                                            {{ $franchisee->about }}

                                            @if($franchisee->area_available)
                                            <hr/>
                                            <p><strong>Please Note: </strong>Other Franchise Territories may be available for sale within this region.</p><p>If you are interested in enquiring about an Ensuites On Tow Franchise<br />please <a href="{{ route('contact') }}">click here</a></p>
                                            @endif

                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif

@stop