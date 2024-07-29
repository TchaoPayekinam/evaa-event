<li class="side-nav-item">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="uil-globe"></i>
        <span> Stations </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ route('stations.create') }}">
                <i class="uil-plus mr-1"></i>
                <span> Ajouter </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.index') }}">
                <i class="uil-bars mr-1"></i>
                <span> Fiche </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.pumps') }}">
                <i class="mdi mdi-gas-station mr-1"></i>
                <span> Index Pompes </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.sales') }}">
                <i class="mdi mdi-sale mr-1"></i>
                <span> Etat des Ventes </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.inventories') }}">
                <i class="uil-window mr-1"></i>
                <span> Etat des Stocks </span>
            </a>
        </li>
        @if(Auth::check() && ((Auth::User()->username == "T-Oil")||(Auth::User()->username == "userKen")))
            <li>
                <a href="{{ route('stations.overview') }}">
                    <i class="uil-chart-pie-alt mr-1"></i>
                    <span> Vue globale </span>
                </a>
            </li>
        @endif
        <li class="side-nav-item">
            <a href="javascript: void(0);" aria-expanded="false">
                <i class="uil-bright mr-1"></i>
                <span> Paramétrages </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="{{ route('stations.tanks') }}">Cuves</a>
                </li>
                <li>
                    <a href="{{ route('pumps.showStations') }}">Réinitialisation d'Index Pistolet</a>
                </li>
                <li>
                    <a href="{{ route('stations.settings.stock_rupture') }}">Stocks de rupture</a>
                </li>
                <li>
                    <a href="{{ route('stations.settings.minimum_orders') }}">Commandes minimales</a>
                </li>
                <li>
                    <a href="{{ route('stations.settings.sales_target') }}">Objectifs de vente</a>
                </li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javascript: void(0);" aria-expanded="false">
                <i class="uil-store mr-1"></i>
                <span> Commandes </span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="{{ route('currentOrdersByProduct') }}">En cours de traitement</a>
                </li>
                <li>
                    <a href="{{ route('loadedOrdersByProduct') }}">Chargées</a>
                </li>
                <li>
                    <a href="{{ route('orders.validated') }}">Validées</a>
                </li>
                <li>
                    <a href="{{ route('ste.orders_received_reported') }}">
                        <span class="badge badge-danger float-right text-white" style="font-size: 75%; line-height: 1; min-width: 20px;">{{ App\Models\Reported_received_order::where('status', null)->count() }}</span>
                        <span>Réceptions Signalées</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.showStations') }}">Détails par station</a>
                </li>
            </ul>
        </li>
        <li class="side-nav-item" style="display: none;">
            <a href="javascript: void(0);" aria-expanded="false">
                <i class="uil-exchange-alt mr-1"></i>
                <span> Détours </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="{{ route('stations.detours') }}">Nouveau</a>
                </li>
                <li>
                    <a href="#">Liste</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('stations.detours') }}">
                <i class="uil-exchange-alt mr-1"></i>
                <span> Détours </span>
            </a>
        </li>
        <!-- <li>
            <a href="{{ route('stations.etats.stocks') }}">
                <i class="uil-chart-line mr-1"></i>
                <span> Statistiques </span>
            </a>
        </li> -->
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('products.index') }}" class="side-nav-link">
        <i class="uil-store"></i>
       <span> Produits </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="uil-bolt-alt"></i>
        <span> Excellence opérationnelle </span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ route('operational_effectiveness.form') }}">Formulaire</a>
        </li>
        <li>
            <a href="{{ route('operational_effectiveness.reports') }}">Rapports</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('performance_management.index') }}" class="side-nav-link">
        <i class="uil-analysis"></i>
        <span> Gestion des performances </span>
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

<!-- <li class="side-nav-item">
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
</li> -->

<li class="side-nav-title side-nav-item">Gestion du GAZ</li>
<!--  -->
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Commandes Gaz</span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <a href="{{ route('gasOrders.processed') }}">En cours</a>
        </li>
        <li>
            <a href="{{ route('gasOrders.loaded') }}">Chargées</a>
        </li>
        <li>
            <a href="{{ route('gasOrders.delivered') }}">Validées</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('gasSettings.index') }}" class="side-nav-link">
        <i class="uil-bright"></i>
        <span> Paramètrage bouteille </span>
    </a>
</li>

<li class="side-nav-title side-nav-item">Gestion des Lubrifiants</li>
<!--  -->
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Commandes Lub</span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <a href="{{ route('LubeOrders.processed') }}">En cours</a>
        </li>
        <li>
            <a href="{{ route('LubeOrders.loaded') }}">Chargées</a>
        </li>
        <li>
            <a href="{{ route('LubeOrders.delivered') }}">Validées</a>
        </li>
    </ul>
</li>
<li class="side-nav-item">
    <a href="{{ route('lubricants.index') }}" class="side-nav-link">
        <i class="uil-bright"></i>
        <span> Produits </span>
    </a>
</li>

<!-- <li class="side-nav-title side-nav-item">Gestion des contrats</li>
<li class="side-nav-item">
    <a href="{{ route('adminContracts.index') }}" class="side-nav-link">
        <i class="uil-moneybag"></i>
        <span> Contrats </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('public_procurement.index') }}" class="side-nav-link">
        <i class="uil-document-layout-right"></i>
        <span> Suivi des marchés publics </span>
    </a>
</li> -->
