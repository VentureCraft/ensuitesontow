@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Benefits'))
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2>The Complete Solution</h2>
            <p>Ensuites On Tow provides the compete solution to your temporary toilet, shower or bathroom needs. Our trained operators take care of everything for you from delivery, through to collection. All you need to do is make one simple phone call and book the bathroom for the time you require it...<br type="_moz"></p>

            <h2>High Quality Product</h2>
            <p>The Ensuites On Tow bathrooms are constructed with highest quality materials from the galvanized chassis to the chrome plated towel rails, We have thoroughly tested each component and fitting ensuring its suitability within the construction process of or bathroom and constantly research the market for improvements. We ensure any additional equipment required to compliment the hire is of the same exacting standards to provide the best possible experience for you.</p>

            <h2>Safe &amp; Hygienic</h2>
            <p>Our Luxury Portable Bathrooms have been stringently designed and constructed to meet all the relevant Australian Safety and Hygiene Standards and are fitted with a range of safety equipment and features protecting users from potential danger. Our operators are highly skilled in positioning the bathrooms and temporary service connections in a safe manner to avoid risk of injury to clients during the hire period.</p>

            <h2>Low Impact</h2>
            <p>Due to the light weight construction and maneuverability of our trailer mounted bathrooms there is no requirement for trucks or heavy equipment risking damage to driveways or lawns during delivery. The bathrooms sit off the ground so cause too much halm to the grass&nbsp;if they are required to be positioned on the lawn for extended periods. As we use no chemicals within the waste water process there is no environmental impact and we can even divert the shower water onto your lawn or gardens.</p>

            <h2>Awards &amp; Recognition</h2>
            <p>We are proud to boast our Luxury Portable Bathrooms have won several National, State and industry awards. We have received notable recognition from our pears, industry leaders and Design Australia which only endorses the quality of our product and service.</p>

            <h2>Hire Rate</h2>
            <p>Each Territory is operated by independent franchisees who are able to negotiate directly with their customers to ensure they get the best possible pricing to reflect their individual requirements (i.e. number of bathrooms required, length of hire period, delivery distances, complimentary equipment &amp; services required etc.)</p>
            <p>Please contact you local operator to discuss hire rates based on your requirements.</p>
            <p><a href="#">CLICK HERE</a> to contact your local operator.</p>
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