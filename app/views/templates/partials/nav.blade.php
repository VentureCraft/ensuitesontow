<div class="navbar-collapse nav-main-collapse collapse">
    <div class="container">
        <nav class="nav-main mega-menu">
            <ul class="nav nav-pills nav-main" id="mainMenu">
                <li class="{{ activeState('site.index') }}">
                    <a href="{{ route('site.index') }}">
                        Home
                    </a>
                </li>
                <li class="dropdown {{ activeState(['features']) }}">
                    <a class="dropdown-toggle" href="{{ route('features') }}">
                        Ensuites
                        <i class="icon icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ activeState('features') }}">
                            <a href="{{ route('features') }}">Features</a>
                        </li>
                        <li class="{{ activeState('gallery') }}">
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown {{ activeState(['hireservices', 'builders', 'events', 'installation', 'showers', 'toilets', 'wedding']) }}">
                    <a class="dropdown-toggle" href="{{ route('hireservice') }}">
                        Services
                        <i class="icon icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ activeState('builders') }}"><a href="{{ route('builders') }}">Builders and Renovators</a></li>
                        <li class="{{ activeState('events') }}"><a href="{{ route('events') }}">Event Organisers</a></li>
                        <li class="{{ activeState('installation') }}"><a href="{{ route('installation') }}">Installation</a></li>
                        <li class="{{ activeState('showers') }}"><a href="{{ route('showers') }}">Showers</a></li>
                        <li class="{{ activeState('toilets') }}"><a href="{{ route('toilets') }}">Toilets</a></li>
                        <li class="{{ activeState('weddings') }}"><a href="{{ route('weddings') }}">Outdoor Weddings</a></li>
                    </ul>
                </li>
                <li class="{{ activeState('search') }}">
                    <a href="{{ route('search') }}">Hire</a>
                </li>
                <li class="{{ activeState('benefits') }}">
                    <a href="{{ route('benefits') }}">Benefits</a>
                </li>
                <li class="{{ activeState('about-us') }}">
                    <a href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="{{ activeState('franchise') }}">
                    <a href="{{ route('franchise') }}">Franchise</a>
                </li>
                <li class="{{ activeState('alliances') }}">
                    <a href="{{ route('alliances') }}">Alliances</a>
                </li>
                <li class="{{ activeState('testimonials') }}">
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </li>
                <li class="{{ activeState('contact') }}">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</div>