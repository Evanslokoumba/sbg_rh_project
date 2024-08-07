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

        </div><a class="navbar-brand" href="{{ url('/accueil') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="theme/public/assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span>
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
                        <li class="nav-item"><a class="nav-link active" href="javascript:;">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Acceuil</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">

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

                </li>
            </ul>
        </div>
    </div>
</nav>
