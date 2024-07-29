<li class="side-nav-item {{ Request::is('ste/dashboard*') ? 'mm-active' : '' }}">
    <a href="{{ route('dashboard') }}" class="side-nav-link {{ Request::is('ste/dashboard*') ? 'active' : '' }}">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-dna"></i>
        <span> Commandes </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <a href="{{ route('gasOrdersProcessed') }}">Gaz</a>
        </li>
        <li>
            <a href="{{ route('lubes.ordersProcessed') }}">Lubrifiants</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-presentation"></i>
        <span> Rapports </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <a href="{{ route('gasOrders.report') }}">Commandes GAZ</a>
        </li>
        <li>
            <a href="{{ route('lubOrders.report') }}">Commandes LUB</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('lubricants.index') }}" class="side-nav-link">
        <i class="uil-bright"></i>
        <span> Produits LUB</span>
    </a>
</li>