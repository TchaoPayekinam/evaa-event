<li class="side-nav-item">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Tableau de bord </span>
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('pumps.index') }}" class="side-nav-link">
        <i class="mdi mdi-gas-station"></i>                    
        <span> Index Pompes </span>
        <!-- @if (is_null(getDateUpdateStock(getAuthStation()->id)) || (\Carbon\Carbon::parse(getDateUpdateStock(getAuthStation()->id))->format('Y-m-d') != date('Y-m-d')))
        <span class="badge badge-pill badge-danger font-10 float-right">Mettre à jour</span>
        @endif -->
    </a>
</li> 
<li>
    <a href="{{ route('sales.index') }}" class="side-nav-link">
        <i class="mdi mdi-sale"></i>
        <span> Ventes </span>
        @if (is_null(getDateUpdateSale(getAuthStation()->id)) || (\Carbon\Carbon::parse(getDateUpdateSale(getAuthStation()->id))->format('Y-m-d') != date('Y-m-d')))
        <span class="badge badge-pill badge-warning-lighten font-10 float-right">Entrer ventes</span>
        @endif
    </a>
</li>
<li class="side-nav-item">
    <a href="{{ route('stocks.index') }}" class="side-nav-link">
        <i class="uil-window"></i>                    
        <span> Stocks </span>
        @if (is_null(getDateUpdateStock(getAuthStation()->id)) || (\Carbon\Carbon::parse(getDateUpdateStock(getAuthStation()->id))->format('Y-m-d') != date('Y-m-d')))
        <span class="badge badge-pill badge-danger font-10 float-right">Mettre à jour</span>
        @endif
    </a>
</li>                 
<li class="side-nav-item">
    <a href="javascript: void(0);" aria-expanded="false" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Commandes </span>
    </a>
    <ul class="side-nav-third-level" aria-expanded="false">
        <li>
            <!-- <a href="{{ route('orders.index') }}">Carburants</a> -->
            <a href="{{ route('orders.index') }}">
                @if(ordersAwaitingConfirmation(getAuthStation()->id)!=0)
                    <span class="badge badge-danger float-right text-white" style="font-size: 75%;line-height: 1; min-width: 20px;">{{ ordersAwaitingConfirmation(getAuthStation()->id) }}
                    </span>
                @endif
                <span> Carburants </span>
            </a>
        </li>
        <li>
            <a href="{{ route('gas.orders') }}">GAZ</a>
        </li>
        <li>
            <a href="{{ route('lubes.orders') }}">Lubrifiants</a>
        </li>
    </ul>
</li>

<!-- <li class="side-nav-item">
    <a href="{{ route('orders.index') }}" class="side-nav-link">
        <i class="uil-store"></i>
        @if(ordersAwaitingConfirmation(getAuthStation()->id)!=0)
            <span class="badge badge-danger float-right text-white" style="font-size: 75%;line-height: 1; min-width: 20px;">{{ ordersAwaitingConfirmation(getAuthStation()->id) }}
            </span>
        @endif
        <span> Commandes </span>
    </a>
</li> -->
<li class="side-nav-item">
    <a href="{{ route('settings.index') }}" class="side-nav-link">
        <i class="uil-bright"></i>                    
        <span> Paramétrage </span>
    </a>
</li> 
<li class="side-nav-item">
    <a href="{{ route('breakdowns.index') }}" class="side-nav-link">
        <i class="uil-drill"></i>
        <span class="badge badge-outline-danger text-white"> Pannes</span>  
    </a>
</li>

<!-- @if((getAuthStation()->id == 10) || (getAuthStation()->id == 11) || (getAuthStation()->id == 13) || (getAuthStation()->id == 48) || (getAuthStation()->id == 49))
@else @endif -->