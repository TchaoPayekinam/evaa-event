<li class="side-nav-item {{ Request::is('ste/dashboard*') ? 'mm-active' : '' }}">
    <a href="{{ route('dashboard') }}" class="side-nav-link {{ Request::is('ste/dashboard*') ? 'active' : '' }}">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('currentOrdersDetails') }}" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Commandes en cours </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('ste-orders.processed') }}" class="side-nav-link">
        <i class="uil-dna"></i>
        <span> Commandes à Charger </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('stations.detours') }}" class="side-nav-link">
        <i class="uil-corner-up-right-alt"></i>
        <span> Détours </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('ste.orders_received_reported') }}" class="side-nav-link">
        <i class="uil-expand-from-corner"></i>
        <span class="badge badge-danger float-right text-white" style="font-size: 75%; line-height: 1; min-width: 20px;">{{ App\Models\Reported_received_order::where('status', null)->count() }}</span>
        <span> Réceptions Signalées </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-presentation"></i>
        <span> Rapports </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <a href="{{ route('ste-orders.reports') }}">Journaliers</a>
        </li>
        <li>
            <a href="{{ route('steOrdersLoaded.reportsByStation') }}">Détails par station</a>
        </li>
    </ul>
</li>