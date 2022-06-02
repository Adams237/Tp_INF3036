<div>
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="dashbord"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Planifier un cours</a>
                <ul class="sub-menu children dropdown-menu">
                    @foreach ($filieres as $filiere )
                        
                        <form method="POST" action="{{ route('formFiliere') }}">
                            @csrf
                            <li >
                                <input name="nom" value="{{ $filiere->nom_filiere }}" type="hidden">
                                <input name="id"  value="{{ $filiere->id }}" type="hidden">
                                <a href=""><button type="submit" style="background: none; border:none" ><span style="cursor: pointer">{{ $filiere->nom_filiere }}</span></button></a>
                            </li>
                        </form>
                    @endforeach
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Afficher emplois de temps</a>
                <ul class="sub-menu children dropdown-menu">
                @foreach ($filieres as $filiere )
                        
                        <form method="POST" action="{{ route('afficher') }}">
                            @csrf
                            <li >
                                <input wire.model = "nom" name="nom" value="{{ $filiere->nom_filiere }}" type="hidden">
                                <input wire:model = "id" name="id_filiere"  value="{{ $filiere->id }}" type="hidden">
                                <a href=""><button type="submit" style="background: none; border:none" ><span style="cursor: pointer">{{ $filiere->nom_filiere }}</span></button></a>
                            </li>
                        </form>
                    @endforeach </form>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>emplois de temps enseignant</a>
                <ul class="sub-menu children dropdown-menu">
                @foreach ($enseignants as $enseignant )
                        
                        <form method="POST" action="{{ route('enseignant') }}">
                            @csrf
                            <li >
                                <input  name="nom_ens" value="{{ $enseignant->nom_ens }}" type="hidden" >
                                <input  name="id_ens"  value="{{ $enseignant->id }}" type="hidden">
                                <a href=""><button type="submit" style="background: none; border:none" ><span style="cursor: pointer">{{ $enseignant->nom_ens }}</span></button></a>
                            </li>
                        </form>
                    @endforeach </form>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="form">Advanced Form</a></li>
                </ul>
            </li>

            <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                    <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                    <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                    <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>
            {{-- <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="">Logout</a></li>
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
