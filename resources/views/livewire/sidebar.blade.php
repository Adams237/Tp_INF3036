<div>
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>emplois de temps salles</a>
                <ul class="sub-menu children dropdown-menu">
                @foreach ($salles as $salle )
                        
                        <form method="POST" action="{{ route('salle') }}">
                            @csrf
                            <li >
                                <input  name="nom_salle" value="{{ $salle->nom_salle }}" type="hidden" >
                                <input  name="id_salle"  value="{{ $salle->id }}" type="hidden">
                                <a href=""><button type="submit" style="background: none; border:none" ><span style="cursor: pointer">{{ $salle->nom_salle }}</span></button></a>
                            </li>
                        </form>
                    @endforeach </form>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Supprimer emplou de temps</a>
                <ul class="sub-menu children dropdown-menu">
                    @foreach ($filieres as $filiere )
                        <form method="POST" action="{{ route('choix') }}">
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
        </ul>
    </div>
</div>
