@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Contact'))
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="alert alert-success hidden" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="alert alert-danger hidden" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
            </div>

            <h2 class="short"><strong>Contact</strong> Us</h2>

            <form id="contactForm" action="php/contact-form.php" method="POST" novalidate="novalidate">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Your name *</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                   class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label>Your email address *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address."
                                   data-msg-email="Please enter a valid email address." maxlength="100"
                                   class="form-control" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Subject</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100"
                                   class="form-control" name="subject" id="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Message *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10"
                                      class="form-control" name="message" id="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg"
                               data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">

            <h4 class="push-top">Get in <strong>touch</strong></h4>

            <p>If you're looking to hire an ensuite, please search for the provider closest to you and contact them directly.</p>
            <p>For franchise or any other enquiries, please either fill in the form to the left or contact us by any of the methods below.</p>

            <hr>

            <h4>The <strong>Office</strong></h4>
            <ul class="list-unstyled">
                <li><i class="icon icon-map-marker"></i> <strong>Address:</strong> {{ Config::get('ensuites.contact.address') }}
                </li>
                <li><i class="icon icon-phone"></i> <strong>Phone:</strong> {{ Config::get('ensuites.contact.phone') }}</li>
                <li><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:{{ Config::get('ensuites.contact.email') }}">{{ Config::get('ensuites.contact.email') }}</a>
                </li>
            </ul>

        </div>

    </div>

</div>

@stop