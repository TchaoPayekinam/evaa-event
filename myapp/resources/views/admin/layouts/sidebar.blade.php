<div class="left-side-menu">
    
    <!-- LOGO -->
    <a href="{{ route('admin.dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('event/assets/img/logo.png') }}" alt="" height="48">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('event/assets/img/logo.png') }}" alt="" height="48">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-title side-nav-item">Menu</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Tableau de bord </span>
                </a>
            </li>
            <li class="side-nav-item d-none">
                <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
                    <i class="uil-moneybag"></i>
                    <span> Paiements </span>
                </a>
                <ul class="side-nav-third-level" aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.payments') }}">En cours de traitement</a>
                    </li>
                    <!-- <li>
                        <a href="">Chargées</a>
                    </li> -->
                    <li>
                        <a href="#">Validés</a>
                    </li>
                    <!-- <li>
                        <a href="">Détails par station</a>
                    </li>
                    <li>
                        <a href="">Validation réceptions</a>
                    </li> -->
                </ul>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.transactions') }}" class="side-nav-link">
                    <i class="uil-bright"></i>
                    <span> Détails des transactions </span>
                </a>
            </li>

            @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile->name == "Administrateur")
                <li class="side-nav-title side-nav-item">Administration</li>
                <li class="side-nav-item">
                    <a href="{{ route('admins.index') }}" class="side-nav-link">
                        <i class="uil-users-alt"></i>
                        <span> Utilisateurs </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="{{ route('profiles.index') }}" class="side-nav-link">
                        <i class="uil-user-square"></i>
                        <span> Profils </span>
                    </a>
                </li>
            @endif
        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>