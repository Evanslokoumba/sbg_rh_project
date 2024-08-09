<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

        </div>
        <a class="navbar-brand" href="{{ url('/accueil') }}">
            <div class="d-flex align-items-center"><img class="me-2" src="{{asset('rh/assets/img/x.png')}}" alt="" width="150" /><span class="font-sans-serif text-primary"></span>
            </div>
        </a>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#mon-espace" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="mon-espace">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text ps-1">Mon espace</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="mon-espace">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/accueil') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Acceuil</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">

                    <!--
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">formations
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link dropdown-indicator" href="#demande-formations" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="demande-formations">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plus"></span></span><span class="nav-link-text ps-1">Demande</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="demande-formations">
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">nouvelle demande</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">en édition</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">en traitement</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    -->




                </li>

                <!--- SECTION DEMANDES & TRAITEMENTS --->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Demandes & Traitement de formations
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                    </div>

                    <!-- DEMANDE -->
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#demande" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-file-alt"></span>
                        </span>
                        <span class="nav-link-text ps-1">Demandes de formation</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="demande">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#error-modal">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plus"></span></span>
                                    <span class="nav-link-text ps-1">nouvelle demande</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/creation-formulaire'}}">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-edit"></span></span>
                                    <span class="nav-link-text ps-1">demandes en édition</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <!-- STATUT -->
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#statut" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-info-circle"></span></span><span class="nav-link-text ps-1">Statut validation</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="statut">
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-check-circle"></span>
                                </span>
                                <span class="nav-link-text ps-1">Demandes validées</span>
                            </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                                <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-times-circle"></span>
                                </span>
                                    <span class="nav-link-text ps-1">Demandes refusées</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- HISTORIQUE -->
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#historique" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-clock"></span></span><span class="nav-link-text ps-1">Historique</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="historique">
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="javascript:;" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-list-ol"></span>
                                </span>
                                <span class="nav-link-text ps-1">Liste demandes</span>
                            </div>
                            </a>
                        <!-- more inner pages-->
                            <ul class="nav collapse" id="demande_soumise">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-list-alt"></span>
                                        </span>
                                            <span class="nav-link-text ps-1">Mes demandes</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!--- SECTION PLANIFICATIONS --->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Planifications
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                    </div>

                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#planning" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="planning">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-calendar"></span>
                        </span>
                        <span class="nav-link-text ps-1">Calendrier formations</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="planning">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="javascript:;" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-route"></span>
                                </span>
                                <span class="nav-link-text ps-1">Planifications</span>
                            </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse" id="simple">
                                <li class="nav-item"><a class="nav-link" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-school"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">Formations</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text ps-1">Historique participants</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="user">
                        <li class="nav-item"><a class="nav-link" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-user-clock"></span>
                                </span>
                                <span class="nav-link-text ps-1">Fiches présence</span>
                            </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <!--- SECTION AUTRES MODULES --->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules supplémentaires
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                    </div>
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#module_sup" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="module_sup">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-plus"></span>
                        </span>
                        <span class="nav-link-text ps-1">Itntitulé</span>
                    </div>
                    </a>
                    <ul class="nav collapse" id="module_sup">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-window-minimize"></span>
                                </span>
                                <span class="nav-link-text ps-1">Item</span>
                            </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse" id="basic">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('connexion-page')}}">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-plus"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">contenu 1</span>
                                </div>
                                </a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </div>

   

</nav>

<!-- MODAL -->

