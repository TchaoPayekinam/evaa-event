<header>
    <!-- <div class="header-toolbar-area navbar"> -->
    <div class="header-toolbar-area">
        <ul class="nav left-nav">
            <li class="nav-item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:fuligo.enterprises@gmail.com"><span class="icon-list-text">evaa.event@gmail.com</span></a>
            </li>
            <li class="nav-item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:(+228)92-04-05-94"><span class="icon-list-text">(+228) 92-04-05-94</span></a>
            </li>
        </ul>
        <ul class="nav social-icons">
            <li>
                <a href="https://www.facebook.com/profile.php?id=61561141479602" target="_blank" title="facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://x.com/EvaaEventCom" target="_blank" title="twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/evaa-event-com/?viewAsMember=true" target="_blank" title="linkedin">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.pinterest.fr/evaaevent/_created/" target="_blank" title="pinterest">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <ul class="nav lang">
            <li class="nav-item">
                <a class="nav-link" title="Lisez cette page en français" lang="fr" href="lang/fr" hreflang="fr">Français</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Read this page in English" lang="en" href="lang/en" hreflang="en">English</a>
            </li>
        </ul>
    </div>
    <div id="header-one" class="header-area header-fixed full-width-compress">
        <div class="main-menu-area" id="sticker">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="logo-area">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('event/assets/img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 possition-static">
                        <div class="eventalk-main-menu">
                            <nav class="d-none d-lg-block">
                                <ul>
                                    <li class="{{ Request::is('/*') ? 'current' : ''}}">
                                        <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                                    </li>
                                    <li class="menu-justify {{ Request::is('about*') ? 'current' : ''}}">
                                        <a href="{{ route('home.about') }}">{{ trans('menu.about') }}</a>
                                    </li>
                                    <li class="{{ Request::is('services*') ? 'current' : ''}}">
                                        <a href="{{ route('home.services') }}">Services</a>
                                        <!-- <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="speakers1.html">Speakers 1</a>
                                            </li>
                                            <li>
                                                <a href="speakers2.html">Speakers 2</a>
                                            </li>
                                            <li>
                                                <a href="speakers3.html">Speakers 3</a>
                                            </li>
                                            <li>
                                                <a href="single-speakers.html">Speaker Details</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <!-- <li>
                                        <a href="#">Schedule</a>
                                        <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="schedule1.html">Schedule 1</a>
                                            </li>
                                            <li>
                                                <a href="schedule2.html">Schedule 2</a>
                                            </li>
                                            <li>
                                                <a href="schedule3.html">Schedule 3</a>
                                            </li>
                                            <li>
                                                <a href="schedule4.html">Schedule 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="sponsors.html">Sponsors</a>
                                    </li> -->
                                    <li class="{{ Request::is('contact*') ? 'current' : ''}}">
                                        <a href="{{ route('home.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Mobile Menu start -->
                            <nav id="dropdown" class="d-md-none">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                        <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="index.html">Home 1 (Multi Page)</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">Home 2 (Multi Page)</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Home 3 (Multi Page)</a>
                                            </li>
                                            <li>
                                                <a href="index4.html">Home 4 (Multi Page)</a>
                                            </li>
                                            <li>
                                                <a href="one-page-index.html">Home 1 (One Page)</a>
                                            </li>
                                            <li>
                                                <a href="one-page-index2.html">Home 2 (One Page)</a>
                                            </li>
                                            <li>
                                                <a href="one-page-index3.html">Home 3 (One Page)</a>
                                            </li>
                                            <li>
                                                <a href="one-page-index4.html">Home 4 (One Page)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="pricing-table1.html">Pricing Table 1</a>
                                            </li>
                                            <li>
                                                <a href="pricing-table2.html">Pricing Table 2</a>
                                            </li>
                                            <li>
                                                <a href="pricing-table3.html">Pricing Table 3</a>
                                            </li>
                                            <li>
                                                <a href="comingsoon-event.html">Comingsoon Event</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="single-shop.html">Shop Details</a>
                                            </li>
                                            <li>
                                                <a href="blog-standard.html">Blog Standard</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonry.html">Blog Masonry</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Blog Details</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">Gallery</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Speakers</a>
                                        <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="speakers1.html">Speakers 1</a>
                                            </li>
                                            <li>
                                                <a href="speakers2.html">Speakers 2</a>
                                            </li>
                                            <li>
                                                <a href="speakers3.html">Speakers 3</a>
                                            </li>
                                            <li>
                                                <a href="single-speakers.html">Speaker Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Schedule</a>
                                        <ul class="rt-dropdown-menu">
                                            <li>
                                                <a href="schedule1.html">Schedule 1</a>
                                            </li>
                                            <li>
                                                <a href="schedule2.html">Schedule 2</a>
                                            </li>
                                            <li>
                                                <a href="schedule3.html">Schedule 3</a>
                                            </li>
                                            <li>
                                                <a href="schedule4.html">Schedule 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="sponsors.html">Sponsors</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Mobile Menu End -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 d-none d-lg-block">
                        <ul class="header-action-items">
                            <li>
                                <a href="{{ route('user.login') }}" title="Buy Tickets" class="btn-fill size-xs color-yellow border-radius-5">Buy Tickets</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
