<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="theme/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="theme/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="theme/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme/public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="theme/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="theme/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="theme/public/assets/js/config.js"></script>
    <script src="theme/public/vendors/simplebar/simplebar.min.js"></script>


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
