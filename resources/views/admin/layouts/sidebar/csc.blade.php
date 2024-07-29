<li class="side-nav-item">
    <a href="{{ route('csc.dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li>
    <a href="{{ route('stations.index') }}" class="side-nav-link">
        <i class="uil-bars"></i> 
        <span> Stations </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('stations.inventories') }}" class="side-nav-link">
        <i class="uil-window"></i> 
        <span> Etat des Stocks </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-dna"></i>
        <span> Commandes en cours </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <!-- <a href="{{ route('csc.orders') }}">Carburants</a> -->
            <a href="{{ route('currentOrdersDetails') }}">Carburants</a>
        </li>
        <li>
            <a href="{{ route('gasOrders.processed') }}">GAZ</a>
        </li>
        <li>
            <a href="{{ route('LubeOrders.processed') }}">Lubrifiants</a>
        </li>
    </ul>
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

<li class="side-nav-title side-nav-item">Gestion des Lubrifiants</li>
<!--  -->
<li class="side-nav-item">
    <a href="{{ route('lubricants.index') }}" class="side-nav-link">
        <i class="uil-bright"></i>
        <span> Produits </span>
    </a>
</li>