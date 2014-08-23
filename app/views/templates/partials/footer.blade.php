<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> {{ Config::get('ensuites.contact.address') }}</p></li>
                        <li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> {{ Config::get('ensuites.contact.email') }}</p></li>
                        <li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a
                                    href="mailto:{{ Config::get('ensuites.contact.email') }}">{{ Config::get('ensuites.contact.email') }}</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="supplier_search">
                    <h4>Find a provider</h4>
                    <p>Enter your postcode below to find your nearest supplier.</p>

                    {{ Form::open(array('route' => 'search')) }}
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Postcode" name="postcode">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Search</button>
                            </span>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>© Copyright {{ date('Y') }} Ensuites On Tow Pty. Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>