@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Nevil Langley'))
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-4">

            <div class="thumbnail">
                <img alt="" width="100%" class="img-responsive" src="{{ asset('assets/img/franchisee/nevil_langley.jpg') }}">
            </div>

        </div>

        <div class="col-sm-8">

            <h2 class="shorter">Nevil Langley</h2>
            <h4>Adelaide North</h4>

            <table class="table">
                <tr>
                    <td>Service Area</td>
                    <td>Adelaide North</td>
                </tr>
                <tr>
                    <td>Contact Phone Number</td>
                    <td>0418 823 149</td>
                </tr>
                <tr>
                    <td>Direct Email</td>
                    <td><a href="mailto:nevil.langley@ensuitesontow.com.au">nevil.langley@ensuitesontow.com.au</a></td>
                </tr>
                <tr>
                    <td>Direct Phone No</td>
                    <td>0418 823 149</td>
                </tr>
            </table>


        </div>
    </div>

</div>

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
                                            <p><i class="icon icon-quote-left"></i> We are a family owned business
                                                committed to providing excellent customer service covering Adelaide and
                                                regional areas. Whether it be a bathroom renovation, wedding, corporate
                                                event, party, or just extra guests we can supply you with the best
                                                portable bathroom facilities available while guaranteeing a friendly and
                                                professional service.</p>
                                            <span>- Some Dude.</span>
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
@stop