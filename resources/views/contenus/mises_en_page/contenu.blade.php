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
                <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                    <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                    </script>
                    <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">

                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Basculer"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                    </div><a class="navbar-brand" href="index.html">
                        <div class="d-flex align-items-center py-3"><img class="me-2" src="{{asset('rh/assets/img/x.png')}}" alt="" width="140" /><span class="font-sans-serif text-primary"></span>
                        </div>
                    </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">


                        <li class="nav-item">
                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Tableau de bord</span>
                            </div>
                            </a>
                            <ul class="nav collapse show" id="dashboard">
                            <li class="nav-item"><a class="nav-link active" href="{{url('accueil_page')}}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Test page accueil</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('connexion_page')}}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Test page connexion</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="dashboard/crm.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">App
                            </div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider" />
                            </div>
                            </div>
                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="email">
                            <li class="nav-item"><a class="nav-link" href="app/email/inbox.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/email/compose.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="events">
                            <li class="nav-item"><a class="nav-link" href="app/events/create-an-event.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/events/event-detail.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/events/event-list.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="e-commerce">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="product">
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-list.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-grid.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-details.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/add-product.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add product</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="orders">
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-list.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-details.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/customer-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/shopping-cart.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/checkout.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/billing.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app/e-commerce/invoice.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>

                        </li>


                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Pages
                            </div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider" />
                            </div>
                            </div>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="authentication">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="simple">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/login.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/logout.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/register.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/forgot-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/confirm-mail.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/reset-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/lock-screen.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="card">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/register.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/forgot-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/confirm-mail.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/reset-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/lock-screen.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="split">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/login.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/logout.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/register.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/forgot-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/confirm-mail.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/reset-password.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/lock-screen.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#authentication-modal" data-bs-toggle="modal">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="user">
                            <li class="nav-item"><a class="nav-link" href="pages/user/profile.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/user/settings.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="pricing">
                            <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Modules
                            </div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider" />
                            </div>
                            </div>
                            <!-- parent pages-->
                            <a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="forms">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="basic">
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/form-control.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/input-group.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/select.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/checks.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/range.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/basic/layout.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="advance">
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/advance-select.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/date-picker.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/editor.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/emoji-button.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/file-uploader.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/input-mask.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input mask</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/range-slider.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range slider</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/advance/rating.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/forms/floating-labels.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/forms/validation.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="tables">
                            <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/tables/bulk-select.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            </ul>
                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span>
                            </div>
                            </a>
                            <ul class="nav collapse" id="charts">
                            <li class="nav-item"><a class="nav-link" href="modules/charts/chartjs.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="modules/charts/d3js.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">D3js</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span>
                                </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse" id="eCharts">
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/line-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/bar-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/candlestick-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/geo-map.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/scatter-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/pie-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/gauge-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Gauge charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/radar-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/heatmap-charts.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/how-to-use.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span>
                                    </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                </ul>
                            </li>
                            </ul>
                        </li>

                        </ul>
                    </div>
                    </div>
                </nav>

                    <div class="content">
                        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
                            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                            <div class="d-flex align-items-center"><img class="me-2" src="{{asset('rh/assets/img/x.png')}}" alt="" width="100" /><span class="font-sans-serif text-primary"></span>
                            </div>
                            </a>
            
                            <!-- barre de recherche haut - gauche -->
                            <ul class="navbar-nav align-items-center d-none d-lg-block">
                            <li class="nav-item">
                                <div class="search-box" data-list='{"valueNames":["title"]}'>
            
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input fuzzy-search" type="search" placeholder="Recherche..." aria-label="Recherche" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
            
                        
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Contenu</h6><a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center">
                                            <!-- contenu barre de recherche -->
                                        </div>
                                    </a>
                                    <a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center">
                                            <!-- contenu barre de recherche -->
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    </div>
                                </div>
                                </div>
                            </li>
                            </ul>
            
                            <!-- trois icones haut droit -->
                            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                            <!-- icon infos user -->
                            <li class="nav-item ps-2 pe-0">
                                <div class="dropdown theme-control-dropdown">
                                    <a style="margin-top: -10%" class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fas fa-user fs-2" data-fa-transform="shrink-2"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                                        <div class="bg-white dark__bg-1000 rounded-2 py-2"> 
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" >
                                            <a class="nav-link active" href="#">
                                                <span class="fas fa-cogs"></span>
                                                Paramètres
                                            </a>
                                        </button>
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" >
                                            <a class="nav-link active" href="#">
                                                <span class="far fa-address-card"></span>
                                                Profile
                                            </a>
                                        </button>
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" >  
                                            <a class="nav-link active" href="#">
                                                <span class="fas fa-sign-out-alt"></span>
                                                Déconnexion
                                            </a>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
            
                            <!-- icon gestion thèmes template -->
                            <li class="nav-item ps-2 pe-0">
                                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-2" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-2" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Lumineux<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Sombre<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    </div>
                                </div>
                                </div>
                            </li>
            
                            <!-- icon gestion notifications -->
                            <li class="nav-item dropdown">
                                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll">
                                    <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span>
                                </a>
                                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                        <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Marquez tous</a></div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">Voir tout</a></div>
                                </div>
                                </div>
                            </li>
                            </ul>     
                        </nav>
                        <!-- ici se positionne le contenu des autres pages  -->
                        <div class="container">
                                @yield('bodycontent')
                        </div>
                        <!-- fin de contenu  -->
                    </div>


                    <!-- pied de page -->
                        <footer class="footer">
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">SOBRAGA</p>
                            </div>
                        </footer>
                    <!-- fin pied de page -->
            </div>
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <!-- PARTIE MENU DEROULANT DROIT -->
        <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header settings-panel-header bg-shape">
            <div class="z-1 py-1">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="text-white mb-0 me-2">Paramètres</h5>
                    <button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Réinitialiser le style</button>
                </div>
                    <p class="mb-0 fs--1 text-white opacity-75"> Définissez votre propre style personnalisé</p>
            </div>
            <div class="z-1" data-bs-theme="dark">
                <button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
            <h5 class="fs-0">Modèle de couleur</h5>
            <p class="fs--1">Choisissez le mode couleur parfait pour votre application.</p>

            <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-4">
                <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{asset('rh/assets/img/generic/falcon-mode-default.jpg')}}" alt=""/></span><span class="label-text"> Claire</span></label>
                </div>
                <div class="col-4">
                <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{asset('rh/assets/img/generic/falcon-mode-dark.jpg')}}" alt=""/></span><span class="label-text"> Sombre</span></label>
                </div>
                <div class="col-4">
                <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" />
                <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{asset('rh/assets/img/generic/falcon-mode-auto.jpg')}}" alt=""/></span><span class="label-text"> Auto</span></label>
                </div>
            </div>
            </div>

            <hr />

            <h5 class="fs-0 d-flex align-items-center">Style de barre de navigation verticale</h5>
            <p class="fs--1 mb-0">Basculez entre les styles pour votre barre de navigation verticale </p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6">
                <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="{{asset('rh/assets/img/generic/default.png')}}" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="{{asset('rh/assets/img/generic/inverted.png')}}" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="{{asset('rh/assets/img/generic/card.png')}}" alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="{{asset('rh/assets/img/generic/vibrant.png')}}" alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
            </div>
            </div>
        </div>
        </div>
        <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
            
            <small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">PERSONALISER</small>
        </div>
        </a>
        <!-- FIN PARTIE MENU DEROULANT DROIT -->


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