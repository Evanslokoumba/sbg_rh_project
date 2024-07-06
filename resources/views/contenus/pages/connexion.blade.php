<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>RH | Demandes &amp; Formations</title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="shortcut icon" type="image/x-icon" href="https://castel-gabon.sobraga.bgi/apps/img/sbg.png">
        <link rel="manifest" href="https://castel-gabon.sobraga.bgi/apps/img/sbg.png">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <script src="{{asset('rh/assets/js/config.js')}}"></script>
        <script src="vendors/simplebar/simplebar.min.js"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="assets/css/theme-rtl.css" rel="stylesheet" id="style-rtl">
        <link href="{{asset('rh/assets/css/theme.css')}}" rel="stylesheet" id="style-default">
        <link href="assets/css/user-rtl.css" rel="stylesheet" id="user-style-rtl">
        <link href="assets/css/user.css" rel="stylesheet" id="user-style-default">
        <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
        </script>
    </head>
    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container" data-layout="container">
                <script>
                    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                    if (isFluid) {
                        var container = document.querySelector('[data-layout]');
                        container.classList.remove('container');
                        container.classList.add('container-fluid');
                    }
                </script>
                <div class="row flex-center min-vh-100 py-6">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <a class="d-flex flex-center mb-4" >
                            <img class="me-2" src="{{asset('rh/assets/img/x.png')}}" alt="" width="170" />
                            <img class="me-2" src="{{asset('rh/assets/img/y.png')}}" alt="" width="170" />
                            <img class="me-2" src="{{asset('rh/assets/img/z.png')}}" alt="" width="170" />
                            <span class="font-sans-serif text-primary fw-bolder fs-5 d-inline-block"></span>
                        </a>
                        <div class="card">
                            <div class="offcanvas-header settings-panel-header bg-shape">
                                <div class="justify-content-between align-items-center mb-1">
                                    <h5 class="text-white mb-0 me-2 opacity-75"> Bienvenue sur la Plateforme de <br>gestion des Formations </h5>
                                    <p class="mb-0 fs--1 text-white opacity-75">Veuillez-vous connecter s'il vous plaît</p>
                                </div>
                            </div>
                            <div class="card-body p-4 p-sm-5">
                            
                                <div class="row flex-between-center mb-2">
                                    
                                    <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">or</span> <span><a href="/">Test accueil</a></span></div>
                                </div>
                                    <form action="{{route('auth.login')}}" method="post" >
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email">Matricule</label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Insérer votre matricule" />
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Mot de passe</label>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Insérer votre mot de passe" />
                                            @error('password')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked" />
                                                <label class="form-check-label mb-0" for="basic-checkbox">Vérifier</label>
                                            </div>
                                            </div>
                                            <!--
                                            <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
                                            -->
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">connexion</button>
                                        </div>
                                    </form>
                                <div class="position-relative mt-4">
                                    <hr />
                                    <div class="divider-content-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->


        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{asset('rh/vendors/popper/popper.min.js')}}"></script>
        <script src="{{asset('rh/vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('rh/vendors/anchorjs/anchor.min.js')}}"></script>
        <script src="{{asset('rh/vendors/is/is.min.js')}}"></script>
        <script src="{{asset('rh/vendors/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('rh/vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{asset('rh/vendors/lodash/lodash.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{asset('rh/vendors/list.js/list.min.js')}}"></script>
        <script src="{{asset('rh/assets/js/theme.js')}}"></script>
    </body>
</html>