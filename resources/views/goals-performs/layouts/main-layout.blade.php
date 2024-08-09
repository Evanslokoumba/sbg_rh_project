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
        <meta name="msapplication-TileImage" content="rh/assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <script src="{{asset('rh/assets/js/config.js')}}"></script>
        <script src="rh/vendors/simplebar/simplebar.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="theme/public/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="theme/public/assets/css/theme-rtl.css" rel="stylesheet" id="style-rtl">
    <link href="theme/public/assets/css/theme.css" rel="stylesheet" id="style-default">
    <link href="theme/public/assets/css/user-rtl.css" rel="stylesheet" id="user-style-rtl">
    <link href="theme/public/assets/css/user.css" rel="stylesheet" id="user-style-default">
    <link href="css/normalize.css" rel="stylesheet" id="user-style-default">
   
    <!--
    <script>
     $(window).load(function(){        
        $('#myModal').modal('show');
    }); 
    </script>
    -->


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
    <div class="container-fluid" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        @include('goals-performs.layouts.left-menu-layout')
        <div class="content">
            @include('goals-performs.layouts.header-layout')
            <div class="page-body mt-2">
                @yield('page-body')
            </div>
        </div>
    </div>

    <!-- Modal  -->
    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
            <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                <h6 class="mb-1" id="modalExampleDemoLabel">Informations - Formation </h6>
            </div>
            <div class="p-4 pb-0">
                <form>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Titre de la formation:</label>
                    <input class="form-control" id="recipient-name" type="text" />
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="message-text">Description de la formation:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" type="button">Enregistrer </button>
            </div>
        </div>
        </div>
    </div>
</main>

<script src="theme/public/vendors/popper/popper.min.js"></script>
<script src="theme/public/vendors/bootstrap/bootstrap.min.js"></script>
<script src="theme/public/vendors/anchorjs/anchor.min.js"></script>
<script src="theme/public/vendors/is/is.min.js"></script>
<script src="theme/public/vendors/echarts/echarts.min.js"></script>
<script src="theme/public/vendors/fontawesome/all.min.js"></script>
<script src="theme/public/vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="theme/public/vendors/list.js/list.min.js"></script>
<script src="theme/public/assets/js/theme.js"></script>

</body>

</html>
