<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}">
    <!-- Site Title  -->
    <title>Client - SCRODA</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/vendor.bundle.css?ver=100')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css?ver=100')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/custom.css')}}">


</head>

<body class="user-dashboard">


<div class="topbar">
    <div class="topbar-md d-lg-none">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="toggle-nav">
                    <div class="toggle-icon">
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                    </div>
                </a><!-- .toggle-nav -->

                <div class="site-logo">
                    <a href="index.html" class="site-brand">
                        <!--<img src="../assets/img/patent-4.png" alt="logo" srcset="images/logo2x.png 2x">-->
                        <img src="../assets/img/patent-4.png" alt="logo">
                    </a>
                </div><!-- .site-logo -->

                <div class="dropdown topbar-action-item topbar-action-user">
                    <a href="#" data-toggle="dropdown"> <img class="icon" src="{{asset('dashboard/images/user-thumb-sm.png')}}" alt="thumb"> </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-dropdown">
                            <div class="user-dropdown-head">
                                <h6 class="user-dropdown-name">{{Auth::user()->name}} {{--<span>(IXIA1A105)</span>--}}</h6>
                                <span class="user-dropdown-email">{{Auth::user()->email}}</span>
                            </div>
                            <div class="user-dropdown-balance">
                                <h6>SCR BALANCE</h6>
                                <h3>0 SCR</h3>
                                <ul>
                                    <li>~ ETH</li>
                                    <li>~ BTC</li>
                                    <li>~ LTC</li>
                                    <li>~ XMR</li>
                                    <li>~ DASH</li>
                                </ul>
                            </div>
                            {{-- @if(!Auth::user()->email_verified_at)
                              <ul class="user-dropdown-btns btn-grp guttar-10px">
                                  <li><a href="{{ route('verification.resend') }}" class="btn btn-xs btn-warning">Confirm Email</a></li>
                                  --}}{{--<li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>--}}{{--
                              </ul>
                             @endif--}}
                            <div class="gaps-1x"></div>
                            <ul class="user-dropdown-links">
                                <li>

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ti ti-power-off"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .toggle-action -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .topbar-md -->
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="topbar-lg d-none d-lg-block">
                <div class="site-logo">
                    <a href="index.html" class="site-brand">
                        <!--<img src="../assets/img/patent-4.png" alt="logo" srcset="images/logo2x.png 2x">-->
                        <img src="../assets/img/patent-4.png" alt="logo">
                    </a>
                </div><!-- .site-logo -->
            </div><!-- .topbar-lg -->

            <div class="topbar-action d-none d-lg-block">
                <ul class="topbar-action-list">
                    <li class="topbar-action-item topbar-action-link">
                        <a href="#"><em class="ti ti-home"></em> Go to main site</a>
                    </li><!-- .topbar-action-item -->

                    <li class="dropdown topbar-action-item topbar-action-language">
                        <a href="#" data-toggle="dropdown"> EN <em class="ti ti-angle-down"></em> </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">FR</a></li>
                            <li><a href="#">JY</a></li>
                            <li><a href="#">CH</a></li>
                        </ul>
                    </li><!-- .topbar-action-item -->

                    <li class="dropdown topbar-action-item topbar-action-user">
                        <a href="#" data-toggle="dropdown"> <img class="icon" src="{{asset('dashboard/images/user-thumb-sm.png')}}" alt="thumb"> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-dropdown">
                                <div class="user-dropdown-head">
                                    <h6 class="user-dropdown-name">{{Auth::user()->name}}{{--<span>(IXIA1A105)</span>--}}</h6>
                                    <span class="user-dropdown-email">{{Auth::user()->name}}</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>SCR BALANCE</h6>
                                    <h3>0 SCR</h3>
                                    <ul>
                                        <li>~ ETH</li>
                                        <li>~ BTC</li>
                                        <li>~ LTC</li>
                                        <li>~ XMR</li>
                                        <li>~ DASH</li>
                                    </ul>
                                </div>
                                <ul class="user-dropdown-links">
                                    <li>

                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="ti ti-power-off"></i> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .topbar-action-item -->
                </ul><!-- .topbar-action-list -->
            </div><!-- .topbar-action -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
<!-- TopBar End -->


<div class="user-wraper">
    <div class="container">
        <div class="d-flex">
            <div class="user-sidebar">
                <div class="user-sidebar-overlay"></div>
                <div class="user-box d-none d-lg-block">
                    <div class="user-image">
                        <img src="{{asset('dashboard/images/user-thumb-lg.png')}}" alt="thumb">
                    </div>
                    <h6 class="user-name">{{Auth::user()->name}}</h6>
                    <div class="user-uid">Unique ID: <span>{{Auth::user()->id}}</span></div>
                    {{--<ul class="btn-grp guttar-10px">
                        <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                    </ul>--}}
                </div><!-- .user-box -->
                <ul class="user-icon-nav">
                    <li><a href="/client/dashboard"><em class="ti ti-dashboard"></em>Dashboard</a></li>
                    <li><a href="/common/conversion"><em class="ti ti-stats-up"></em>Conversion Tool</a></li>
                </ul><!-- .user-icon-nav -->
                <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
                <ul class="user-nav">
                    <li><a href="#">Whitepaper</a></li>
                    <li>Contact Support<span>inquiries@scroda.io</span></li>
                </ul><!-- .user-nav -->
                <div class="d-lg-none">
                    <div class="user-sidebar-sap"></div>
                    <div class="gaps-1x"></div>
                    <ul class="topbar-action-list">
                        <li class="topbar-action-item topbar-action-link">
                            <a href="/"><em class="ti ti-home"></em> Go to main site</a>
                        </li><!-- .topbar-action-item -->
                        <li class="dropup topbar-action-item topbar-action-language">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true"> EN <em class="ti ti-angle-up"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">FR</a></li>
                                <li><a href="#">JY</a></li>
                                <li><a href="#">CH</a></li>
                            </ul>
                        </li><!-- .topbar-action-item -->
                    </ul><!-- .topbar-action-list -->
                </div>
            </div><!-- .user-sidebar -->

            <div class="user-content">
                <div class="user-panel">
                    @yield('content')

                </div><!-- .user-panel -->
            </div><!-- .user-content -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
<!-- UserWraper End -->


<div class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <span class="footer-copyright">Copyright 2019, <a href="#">Scroda</a>.  All Rights Reserved.</span>
            </div><!-- .col -->
            <div class="col-md-5 text-md-right">
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- FooterBar End -->


<!-- JavaScript (include all script here) -->
<script src="{{asset('dashboard/assets/js/jquery.bundle.js?ver=100')}}"></script>
<script src="{{asset('dashboard/assets/js/script.js?ver=100')}}"></script>
@yield('scripts')
</body>
</html>
