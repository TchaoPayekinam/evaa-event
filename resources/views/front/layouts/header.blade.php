<header>
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
                <a class="nav-link" title="Lisez cette page en français" lang="fr" href="{{ route('switchLang', 'fr') }}" hreflang="fr">Français</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Read this page in English" lang="en" href="{{ route('switchLang', 'en') }}" hreflang="en">English</a>
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
                                    </li>
                                    <li class="{{ Request::is('contact*') ? 'current' : ''}}">
                                        <a href="{{ route('home.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Mobile Menu start -->
                            <nav id="dropdown" class="d-md-none">
                                <ul>
                                    <li>
                                        <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.about') }}">{{ trans('menu.about') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.services') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Mobile Menu End -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 d-none d-lg-block">
                        @auth
                        <div class="eventalk-main-menu">
                            <nav class="d-none d-lg-block">
                                <ul class="header-action-items">
                                    <li>
                                        <a class="d-flex align-items-center btn-fill size-xs color-yellow border-radius-5 menu-btn" href="">Profile</a>
                                        <ul class="rt-dropdown-menu mt-2">
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}">Administration</a>
                                            </li>
                                            <li>
                                                <form class="nav-item" action="{{ route('logout')}}" method="post">
                                                    @csrf
                                                    <button class="nav-link btn-fill size-xs color-yellow border-radius-5">{{ trans('menu.deconnexion') }}</button>
                                                  </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        @endauth
                        @guest
                        <ul class="header-action-items">
                            <li>
                                <a href="{{ route('user.login') }}" title="Buy Tickets" class="btn-fill size-xs color-yellow border-radius-5">{{ trans('menu.button') }}</a>
                            </li>
                        </ul>
                        @endguest 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
