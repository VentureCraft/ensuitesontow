@extends('templates.default')

@section('content')

<section class="page-top custom-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Bathroom Hire Franchise&nbsp;Opportunities</h1>
                <p class="lead">Take advantage of cheap portable bathroom franchises for sale.</p>
                <a href="{{ route('contact') }}" class="btn btn-default btn-lg push-bottom">Request an information kit</a> <span class="arrow hlt" style="top: 10px;"></span>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <div class="row">
        <div class="col-md-9">

            <h2>Looking for a home based business opportunity that</h2>
            <ul>
                <li>is affordable to own and offers excellent returns?</li>
                <li>can be tailored to suite your individual situation?</li>
                <li>has flexible hours requiring a minimal time commitment from you?</li>
                <li>can be running from home part time&nbsp;and grown at your own pace? Or</li>
                <li>can be taken on full time and grown to the max?</li>
            </ul>

            @include('modules.hr')


            <h3>This low cost franchise could be the one for <strong>you!</strong></h3>

            <p><a href="{{ route('site.index') }}">Ensuites on Tow</a> portable toilet rental franchises are
                being established in Melbourne Victoria and across all major cities and regions throughout Australia as
                a result of the growing demand for our service in providing luxury portable bathrooms to those requiring
                temporary facilities for bathroom renovations, insurance work, parties, events, functions, and wedding
                etc. etc.</p>

            <h4>The portable ensuite hire <strong>Australia prefers</strong></h4>
            <p>Luxury mobile bathroom franchises that offer terrific returns</p>
            <p>With&nbsp;a <strong>starting price</strong> of only <strong>$32,000.00</strong> plus GST,&nbsp;this small
            business franchise opportunity includes everything necessary to commence operation of&nbsp;your new business
            in one complete package. This includes&nbsp;licensing, training, operation manuals and procedure guides&nbsp;and
            amazingly also <strong>includes the supply of your first "Ensuites On Tow"&nbsp;Luxury Portable Bathroom
                unit</strong>.</p>

            <p>As the saying goes:</p>

            <p class="text-center alternative-font">"Be In Business For Yourself, Not By Yourself"</p>

            <p>Simply plug in to our portable bathroom hire franchise systems and hit the ground running.</p>

            <p><a title="Contact Us" href="{{ route('contact') }}">Contact us today to explore your options</a>
            </p>
            <a class="btn btn-lg btn-block btn-primary push-top" href="{{ route('contact') }}">Request an information kit</a>

            <p style="text-align: center;">** International enquiries welcome **</p>

        </div>
        <div class="col-md-3">
            @include('modules.search')
            <hr/>
            @include('modules.accolades')
        </div>
    </div>
</div>
@stop