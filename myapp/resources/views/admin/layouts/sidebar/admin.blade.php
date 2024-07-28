<!--  Menu Administrateur -->
<li class="side-nav-item">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
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
    <a href="{{ route('stations.index') }}" class="side-nav-link">
        <i class="uil-globe"></i>
        <span> Stations </span>
    </a>
</li>

<!-- <li class="side-nav-item">
    <a href="{{ route('notificationSMS.params') }}" class="side-nav-link">
        <i class="uil-envelope"></i>
        <span> Envoi de SMS </span>
    </a>
</li> -->

<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Commandes </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <!-- <a href="{{ route('currentOrdersDetails') }}">En cours de traitement</a> -->
            <a href="{{ route('admin.currentOrders') }}">En cours de traitement</a>
        </li>
        <li>
            <a href="{{ route('orders.loaded') }}">Chargées</a>
        </li>
        <li>
            <a href="{{ route('orders.validated') }}">Validées</a>
        </li>
        <li>
            <a href="{{ route('orders.showStations') }}">Détails par station</a>
        </li>
        <li>
            <a href="{{ route('stations.orderReceptionsValidation') }}">Validation réceptions</a>
        </li>
    </ul>
</li>

<li class="side-nav-item">
    <a href="{{ route('admin.all_stations') }}" class="side-nav-link">
        <i class="uil-analysis mr-1"></i>
        <span> Reconciliation de stocks </span>
    </a>
</li>

<li class="side-nav-title side-nav-item">MENU CSC</li>
<!--  -->
<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <!-- <i class="uil-globe"></i> -->
        <span> CSC </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ route('csc.dashboard') }}">
                <i class="uil-home-alt mr-1"></i> 
                <span> Tableau de bord </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.index') }}">
                <i class="uil-bars mr-1"></i> 
                <span> Stations </span>
            </a>
        </li>
        <li>
            <a href="{{ route('stations.inventories') }}">
                <i class="uil-window mr-1"></i> 
                <span> Etat des Stocks </span>
            </a>
        </li>
        <li>
            <a href="{{ route('csc.orders') }}">
                <i class="uil-dna mr-1"></i> 
                <span> Commandes en cours </span>
            </a>
        </li>                 
        <li class="side-nav-item">
            <a href="javascript: void(0);" aria-expanded="false">
                <i class="uil-layer-group mr-1"></i>
                <span> Pannes </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="{{ route('stations.breakdowns') }}">Liste des pannes</a>
                </li>
                <li>
                    <a href="{{ route('breakdowntypes.index') }}">Types de panne</a>
                </li>
            </ul>
        </li>
    </ul>
</li> 
<!--  -->

<li class="side-nav-title side-nav-item">MENU STE</li>
<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <!-- <i class="uil-globe"></i> -->
        <span> STE </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <!-- <li>
            <a href="{{ route('csc.dashboard') }}">
                <i class="uil-home-alt mr-1"></i> 
                <span> Tableau de bord </span>
            </a>
        </li> -->
        <li>
            <a href="{{ route('currentOrdersDetails') }}">
                <i class="uil-store mr-1"></i>
                <span> Commandes en cours </span>
            </a>
        </li>
        <li>
            <a href="{{ route('ste-orders.processed') }}">
                <i class="uil-bars mr-1"></i> 
                <span> Commandes à Charger </span>
            </a>
        </li>
        <li>
            <a href="{{ route('ste-orders.reports') }}">
                <i class="uil-window mr-1"></i> 
                <span> Rapports </span>
            </a>
        </li> 
    </ul>
</li>

<li class="side-nav-title side-nav-item">MENU GAZ / LUBRIFIANTS</li>
<!--  -->
<li class="side-nav-item {{ Request::is('ste/dashboard*') ? 'mm-active' : '' }}">
    <a href="{{ route('dashboard') }}" class="side-nav-link {{ Request::is('ste/dashboard*') ? 'active' : '' }}">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-item" style="display: none;">
    <a href="{{ route('gasOrdersProcessed') }}" class="side-nav-link">
        <i class="uil-dna"></i>
        <span> Commandes du Gaz </span>
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

<!--  -->
<li class="side-nav-title side-nav-item">Gestion du GAZ</li>
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
        <span> Paramètrage bouteille</span>
    </a>
</li>

<!--  -->
<li class="side-nav-title side-nav-item">Gestion des Lubrifiants</li>
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
        <span> Produits</span>
    </a>
</li>

<!--  -->
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

<!--  -->
<li class="side-nav-title side-nav-item">Administration</li>
<li class="side-nav-item">
    <a href="{{ route('commercials.index') }}" class="side-nav-link">
        <i class="uil-user-circle"></i>
        <span> Personnel Commerciaux </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('serviceCustomers.index') }}" class="side-nav-link">
        <i class="uil-user-circle"></i>
        <span> Personnel CSC </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('users.index') }}" class="side-nav-link">
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
<!-- <li class="side-nav-item">
    <a href="#" class="side-nav-link">
        <i class="uil-lock"></i>
        <span> Permissions </span>
    </a>
</li> -->