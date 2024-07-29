<li class="side-nav-item">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-title side-nav-item">Gestion des pannes</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="uil-drill"></i>
        <span> Pannes </span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ route('stations.breakdowns') }}">Liste</a>
        </li>
        <li>
            <a href="{{ route('stationsBreakdowns.reports') }}">Rapports</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('breakdowntypes.index') }}" class="side-nav-link">
        <i class="uil-layer-group"></i>
        <span> Types de panne </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('breakdown_subcategories.index') }}" class="side-nav-link">
        <i class="uil-servers"></i>
        <span> Sous-Categories de panne </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('services.index') }}" class="side-nav-link">
        <i class="uil-monitor"></i>
        <span> Services de Maintenance </span>
    </a>
</li>