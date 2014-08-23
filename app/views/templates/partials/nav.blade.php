<div class="navbar-collapse nav-main-collapse collapse">
    <div class="container">
        <nav class="nav-main mega-menu">
            <ul class="nav nav-pills nav-main" id="mainMenu">
                <li class="{{ activeState('site.index') }}">
                    <a href="{{ route('site.index') }}">
                        Home
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#">
                        Ensuites
                        <i class="icon icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ activeState('features') }}">
                            <a href="{{ route('features') }}">Features</a>
                        </li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#">
                        Services
                        <i class="icon icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Builders and Renovators</a></li>
                        <li><a href="#">Event Organisers</a></li>
                        <li><a href="#">Installation</a></li>
                        <li><a href="#">Showers</a></li>
                        <li><a href="#">Toilets</a></li>
                        <li><a href="#">Outdoor Weddings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Hire</a>
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