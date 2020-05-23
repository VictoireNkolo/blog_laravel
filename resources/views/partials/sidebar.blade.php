<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ \Illuminate\Support\Facades\Auth::user()->role == 'admin' ? route('admin.dashboard.index') : route('user.dashboard.index') }}">Tableau de bord</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">
                        Utilisateurs
                    </span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="tables.html">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">
                            Posts
                        </span>
                    </a>
                </li>
            @else
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">
                        Posts
                    </span>
                    </a>
                </li>
            @endif

        </ul>

    </div>
</nav>
