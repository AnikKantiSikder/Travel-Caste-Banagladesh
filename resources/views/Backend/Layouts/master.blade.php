<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>TravelCasteBangladesh</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('public/Backend')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('public/Backend')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('public/Backend')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('public/Backend')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('public/Backend')}}/css/theme.css" rel="stylesheet" media="all">


</head>

<body class="animsition">
    <div class="page-wrapper">


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h4>TravelCasteBangladesh</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="background-color:#58d68d"><!---->
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><b>DASHBOARD</b>
                            </a>
                            <hr>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li >
                                    <a href="{{route('add.newlocation')}}" ><b>Add new location</b></a>
                                </li>
                                <li>
                                    <a href="{{route('add.newhotel')}}" ><b>Add new hotel</b></a>
                                </li>
                                <li>
                                    <a href="{{route('post.request')}}" ><b>New post requests</b></a>
                                </li>

                            </ul>
                             <hr>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                      
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">

                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            @yield('content')
            
            <!-- END PAGE CONTAINER-->
        </div>

    </div>





    <!-- Jquery JS-->
    <script src="{{asset('public/Backend')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('public/Backend')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('public/Backend')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('public/Backend')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('public/Backend')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('public/Backend')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('public/Backend')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('public/Backend')}}/js/main.js"></script>


</body>

</html>
<!-- end document-->
