<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simposio - @yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="/dashboard/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="/dashboard/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="/dashboard/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/style.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('inicio') }}">
                            <p style="color: orange">Simpósio Internacional</p>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                        </ul>
                        <ul class="nav-right">

                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="/images/avatar.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user text-primary"></i> Perfil
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-modal"><i
                                            class=" ti-unlock text-primary"></i> Alterar Senha</a>
                                    </li>
                                    <li class="waves-effect waves-light">

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="ti-power-off  text-primary"></i>
                                        Terminar Sessão</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="/images/avatar.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label">Navegação</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ route('home') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </nav>
@yield('content')
