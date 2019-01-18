<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CrypCash The Global Decentralize Network</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('assets/img/favicon/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/preloader.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/elements.css')}}" rel="stylesheet">
    <link href="{{asset('styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('main.css')}}" rel="stylesheet">

</head>


<body>
	@include('includes.errors')

<a href="#slider-section" class="scrolltotop"><span class="ti-angle-double-up"></span> </a>

<div class="bg-popup-wrap" style="display: none;"></div>

<div class="pop-up-wrap" id="popup2" style="display: none;">
    <div class="popup-rel">
        <h2>Also Follow Us</h2>
        <p>Don’t miss anything, Stay Connected</p>
        <div class="social-links">
            <a href="https://twitter.com/JanLizFonts" target="_blank"><span class="ti-twitter-alt"></span></a>
            <a href="#" target="_blank"><span class="ti-pinterest"></span></a>
            <a href="#" target="_blank"><span class="ti-facebook"></span></a>
            <a href="#" target="_blank"><span class="ti-tumblr-alt"></span></a>
            <a href="https://www.linkedin.com/in/janlizfonts/" target="_blank"><span class="ti-linkedin"></span></a>
        </div>
        <div class="popup-close">
            <span class="ti-close"></span>
        </div>
    </div>
</div>
<div class="pop-up-wrap" id="popup1" style="display: none;">
    <div class="popup-rel">
        <h2>Subscribe for Latest Update</h2>
        <p>Don’t miss anything, Stay Connected</p>
        <form action="">
            <input type="email" value="" name="EMAIL" class="popup-email" id="mce-EMAIL" placeholder="Enter your Email address" required="">
            <input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
        </form>
        <div class="popup-close">
            <span class="ti-close"></span>
        </div>
    </div>
</div>

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog  signup-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title">
                    <img src="assets/img/Scroda_Cutout_v3_final-01.svg" alt="" style="width: 100px;">
                </div>
            </div>
            <div class="modal-body">
                <div>
                    <div class="bg-img" id="work_area_bg1">
                        <img src="assets/img/section-bg/1.png" alt="">
                    </div>
                    <!-- Nav tabs -->
                    <ul class="signup-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="home" role="tab" data-toggle="tab">Log In</a></li>
                        <li role="presentation"><a href="#signup" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="login">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input  required name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <p><a href="/password/reset">Forgot Password?</a></p>
                                <button type="submit" class="btn btn-default btn-signup-modal">Submit</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="signup">
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input name="name" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Repeat Password</label>
                                    <input name="password_confirmation" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="checkboxes">
                                        <input name="agree" required type="checkbox" id="agree"> I agree to Terms and Policy.
                                    </label>
                                </div>
                                {{--<div class="form-group">
                                    <label class="checkboxes">
                                        <input type="checkbox" id="checkbox_2">
                                    </label>
                                </div>--}}
                                <button type="submit" class="btn btn-default btn-signup-modal">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<header id="sticker" class="header-top homepage-3 header-light-scheme">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="logo main-logo">
                    <!-- <a href="#"><img  src="assets/img/patent3.png" alt="logo" ></a> -->
                </div>
            </div>
            <div class="col-md-10 col-sm-12">
                <nav>
                    <div class="mainmenu text-right">
                        <ul id="nav" class="menu">
                            <li><a href="#slider-section">HOME</a></li>
                            <li><a href="#why_scroda">WHY &amp; HOW</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#tokensection">TOKEN</a></li>
                            <li><a href="#roadmap-area">ROADMAP</a></li>
                            <li><a href="#teamsection">TEAM</a></li>
                            <li><a href="#faqsection">FAQ</a></li>
                            <li><a href="blog.html">BLOG</a></li>
                            <li class="select-nice">
                                <select name="nice" id="select">
                                    <option value="Eng">ENG</option>
                                    <option value="Eng">GER</option>
                                    <option value="Eng">FRA</option>
                                </select>
                            </li>
                            @if(!Auth::check())
                            <li class="login"> <a class="sing-up" href="#" data-toggle="modal" data-target="#myModal">SIGN UP</a></li>
                            @else
                                <li class="login"> <a class="btn signup btn-sm" href="/{{Auth::user()->role_id==2?'client':'admin'}}/dashboard" ><i class="ti ti-dashboard"></i> Dashboard</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<section id="slider-section" class="homepage-2 slider_area hero-light">
    <div class="bg-hero bg-1">
        <img src="assets/img/Bg1.png" alt="" class="">
    </div>
    <div class="bg-hero bg-2">
        <img src="assets/img/Bg2.png" alt="" class="">
    </div>
    <div class="bg-hero-bullet">
        <img src="assets/img/bullet1.png" alt="" class="bullet-img" id="bullet1">
        <img src="assets/img/bullet1.png" alt="" class="bullet-img" id="bullet2">
        <img src="assets/img/bullet1.png" alt="" class="bullet-img" id="bullet3">
    </div>
    <div class="hero-slide">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 ">
                    <div class=" slide-caption-inner slider-text">
                        <h2 class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"> Scroda a Decentralized Revolution Introducing Next-Generation Blockchain Infrastructures.</h2>
                        <p class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">Providing true and advanced solutions to blockchain through cutting-edge, never before seen patent-pending methods.</p>
                        <div class="slider-links">
                            <ul>
                                <li><a href="#" class="slider-btn animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">View Scroda Whitepaper</a></li>
                                <li><a href="#" class="slider-btn slider-btn-2 wow  animated  fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Join Telegram <img src="assets/img/telegram-logo.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="hero-token-phase">
                        <div class="token-phase-wrapper t-align-center" id="clock-div">
                            <p class="token-title mb-15px">Token Sale Phase</p>
                            <p class="fs-30px fw-600 mb-25px">
                                <span class="text-purple">Buy Now</span>
                                <br>
                                get 25% Bonus!
                            </p>
                            @php

                            $start_date = new DateTime();
                            $end_date= new DateTime('2019-02-14');
                            $interval = $start_date->diff($end_date);

                            @endphp
                            <div class="expiry-time">
                                <div class="expiry-item">
                                    <p class="date mb-5px days">{{$interval->format('%a')}}</p>
                                    <p>Days</p>
                                </div>
                                <div class="expiry-item">
                                    <p class="date mb-5px hours">
                                        {{$interval->format('%h')}}
                                    </p>
                                    <p>Hours</p>
                                </div>
                                <div class="expiry-item">
                                    <p class="date mb-5px minutes">
                                        {{$interval->format('%i')}}
                                    </p>
                                    <p>Mins</p>
                                </div>
                                <div class="expiry-item">
                                    <p class="date mb-5px seconds">
                                        {{$interval->format('%s')}}
                                    </p>
                                    <p>Sec</p>
                                </div>
                            </div>
                            <div class="token-cap">
                                <div class="cap-item">
                                    Raised <br>
                                    50M
                                </div>
                                <div class="cap-item">
                                    Hard Cap <br>
                                    100M
                                </div>
                            </div>
                            <div class="cap-bar">
                                <div class="filled-cap" style="width: 50%;"></div>
                            </div>
                            <p class="price-info">
                                Current Price
                                <span>1 ETH = 4,345 CRYP</span>
                            </p>
                            <p class="slider-links">
                                <a href="#" class="slider-btn animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" data-toggle="modal" data-target="#myModal">Buy Token NOW</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="work_area" class="work_area homepage-2 homepage-4 pb-100px">
    <div class="bg-img" id="work_area_bg1">
        <img src="assets/img/section-bg/1.png" alt="">
    </div>
    <div class="bg-img" id="work_area_bg2">
        <img src="assets/img/section-bg/2.png" alt="">
    </div>
    <div class="bg-img" id="work_area_bg3">
        <img src="assets/img/section-bg/3.png" alt="">
    </div>

    <div class="why-scroda animated wow fadeInUp" id="why_scroda" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="crypcash-left sc-h-it-work mb-50px">
                        <h2 class="text-center">Why Scroda?</h2>
                        <div class="crypcash-content mb-65px text-center">
                            <p>
                                Scroda is offering unorthodox solutions and advancing blockchain from it's
                                current barriers and limitations. Offering a unique decentralized storage solution
                                where the security benefits of a <strong>Traditional Database</strong>  are implemented in a
                                <strong>Decentralized Manner</strong>. Run from the inside out in a purely <strong>Autonomous
                                    Environment</strong>  with no <strong>Third Parties</strong>  involved, Scroda is giving power to the
                                people by fusing Democracy and the Blockchain together creating a truly fair
                                <strong>Democratic Infrastructure</strong>  that has been in the makings since <strong>507 B.C</strong>,
                                allowing for many unique benefits that each voter will end up inheriting, that will
                                be coming to your country soon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-50px">
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/identification-generation.png" width="513" height="442" alt="Next-Generation Identification">
                        <div class="token-meta">
                            <h4>Next-Generation Identification</h4>
                            <p>Scroda births an unsurpassable true Identification framework from the use of medically advanced EEG accompanied by complex identifying biometrics. A patent pending solution born to advance all world use-cases.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/token-exchange.png" width="510" height="468" alt="Token Automation Exchange">
                        <div class="token-meta">
                            <h4>Token Automation Exchange</h4>
                            <p>Scroda enables and allows for every cryptocurrency to obtain the security and privacy benefits offered in Scroda through exchanging their tokens for SCR within the automated Scroda token exchange system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/privacy-flawed.png" width="507" height="430" alt="True Un-Flawed Privacy">
                        <div class="token-meta">
                            <h4>True Un-Flawed Privacy</h4>
                            <p>Scroda introduces truly unflawed privacy solutions to its infrastructure as well as SCR tokens through its patent-pending sole ledger blockchain concept.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dna animated wow fadeInUp" id="about" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="row"><!--
                    <div class="bg-hero bg-2">
                        <img src="assets/img/Bg2.png" alt="" class="">
                    </div> -->
                <div class="bg-img" id="work_area_bg4">
                    <img src="assets/img/spiderweb-half.png" alt="">
                </div>
                <div class="col-md-12">
                    <div class="crypcash-left no-left sc-h-it-work mb-100px mt-80px">
                        <h2>How is Scroda Achieving Evolution?</h2>
                        <div class="crypcash-content no-left">
                            <p>Through the removal of Third Parties and Private keys</p>
                            <p>Scroda's mission is to evolve the current blockchain concept to a state of achieving limitation breakthrough through the use of our (2) newly founded patent pending technologies. The introductions of our concepts are based on the removal of third parties and private keys which has been discovered to offer Blockchain technology barriers, disadvantages, and hard-set risks, since infancy. Scroda, through thousands of hours dedicated to researching and analyzing the standings of current Blockchain infrastructures, has discovered and developed solutions to overcome these known hurdles in such a way that will allow all players in the blockchain space to gain insight and answers as means to leap forward in the path they find themselves in today. We are establishing Scroda’s infrastructure to include and allow all market tokens to reap the Scroda benefits of security and privacy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="promo-video-area pt-0px">
                        <div class="video-demo-image">
                            <div class="overlay-grad-one">
                                <img src="assets/img/bg-shape/home-3-vedio-bg-2.png" alt="place your img" class="img-responsive center-block">
                            </div>
                            <div class="video-area-bg" >
                                <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=5SVR7x1ENm4"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="crypcash-area" class="crypcash-area homepage-2 scroda-exp pt-50px pb-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="promo-video-area pt-150px">
                        <div class="video-demo-image">
                            <div class="overlay-grad-one">
                                <img src="assets/img/bg-shape/home-3-vedio-bg-2.png" alt="place your img" class="img-responsive center-block">
                            </div>
                            <div class="video-area-bg">
                                <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=5SVR7x1ENm4"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="crypcash-left">
                    <h2>Scroda Privacy through the removal of Third Parties</h2>
                    <div class="crypcash-content">
                        <p>Scroda is achieving privacy through the first patent that we have pending which removes the involvement of Third parties. The vision for the Scroda infrastructure includes a decentralized, turing complete, virtual machine that is powered and hosted by Scroda node runners who do not distribute sensitive information but rather communicate pure data through a specially developed and encrypted network which is connected to the Scroda singular ledger. The data communication and connection to Scroda will be accessible only through external form while systematically prohibiting the distribution of sensitive data which may place user and transaction details at risk from being viewed or obtained, defeating privacy. With the Scroda Ledger, a community-selected group of 5,000 users, referred to as Scroda Cadets, will be positioned to launch Scroda on the Scroda Independence Day which will be publicly announced when the right time comes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="crypcash-area" class="crypcash-area homepage-2 scroda-exp scroda-id pt-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="id-img">
        <img src="assets/img/Picture1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="crypcash-left">
                    <h2>Scroda Next-Generation True Identification Framework</h2>
                    <div class="crypcash-content">
                        <p>
                            Scroda's second patent-pending revolutionary feature provides never-before-seen solution for true
                            identification, authentication, and authorization through the use of medicines most advanced findings;
                            EEG, accompanied by complex identifying biometrics. With Scroda ID, and the Scroda patent pending
                            identification method, Scroda is able to birth and introduce a breakthrough in the space for the way in
                            which data, profiles, accounts, and grids can be securely and identifiably accessed, while providing
                            government infrastructure and corporate standings a much sought-after solution for the true identification
                            of personnel and beings of interest. With this, Scroda ID brings forth a new security framework that
                            allows for a spoof and tamper-free identification and authentication method which can be implemented and
                            adopted in any standing, infrastructure, or setting, placing Scroda in the forefront of revolutionary
                            blockchain advancement through removing all vulnerabilities in private keys, passphrases, passwords, as
                            well as through creating new real-world possibilities via Scroda's answer to unbeatable true and accurate
                            identification.
                        </p>
                        <p class="slider-links">
                            <a href="#" class="slider-btn  wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">Read Scroda Whitepaper</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="promo-video-area pt-150px">
                        <div class="video-demo-image">
                            <div class="overlay-grad-one">
                                <img src="assets/img/bg-shape/home-3-vedio-bg-2.png" alt="place your img" class="img-responsive center-block">
                            </div>
                            <div class="video-area-bg">
                                <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=5SVR7x1ENm4"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="m-0">
<section id="work_area" class="work_area homepage-2 homepage-4 dapps-section pb-50px pt-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="bg-img" id="work_area_bg4">
        <img src="assets/img/section-bg/4.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="crypcash-left sc-h-it-work mb-10px mt-50px">
                    <h2 class="text-center">Dapps</h2>
                    <div class="crypcash-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor
                            congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada
                            libero, sit amet commodo magna eros quis urna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/passport-02.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda Citizenship</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor
                            congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada
                            libero, sit amet commodo magna eros quis urna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/dex.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda Decentralized Exchange</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor
                            congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada
                            libero, sit amet commodo magna eros quis urna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/incubator.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda Decentralized Incubator</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor
                            congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada
                            libero, sit amet commodo magna eros quis urna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- <a href="#dappslist" class="show-more-btn" id="view-content"> -->
                <button class="show-more-btn show-dapps" href="#dappslist" id="view-content">
                    <img src="assets/img/icons/down-arrow.png" width="32" height="32" class="more-arrow">
                </button>
                <!--                    <a class="show-more-btn show-dapps" href="#dappslist" id="view-content"><span class="ti-angle-double-down"></span> </a>-->
            </div>
        </div>
        <!-- <div class="dappscontent animated hide" id="dappslist"> -->
        <div class="dappscontent">
            <div class="dapps-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="crypcash-left sc-h-it-work mb-10px mt-50px">
                            <h2 class="text-center">Scroda Citizenship</h2>
                            <div class="crypcash-content">
                                <p>
                                    <strong>In this day and age we should not be voting by placing a mark on a piece of paper or through
                                        Standalone Electronic Voting Machines as they are becoming more vulnerable to being hacked
                                        day by day making the need to</strong> eliminate electoral fraud a concern that is rapidly spreading
                                    among voters around the world. By making votes <strong>Immutable</strong>, <strong>Verifiable</strong>,
                                    <strong>Traceable</strong> and <strong>Instant</strong> it will enable citizens to be sure that their
                                    vote was correctly accounted for by ensuring <strong>Value</strong>, <strong>Integrity</strong>,
                                    <strong>Power</strong>, <strong>Privacy</strong> and <strong>Security</strong> to each vote. Scroda is
                                    bringing change to the democratic process worldwide and by ensuring that the Scroda Platform abides to
                                    the laws in each country, changes in the democratic system can be made more rapidly than ever before.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 pass-book">
                        <img src="assets/img/passport-new.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="crypcash-content">
                            <p>
                                For a user to be able to get started in voting in any important matter that correlates to their
                                country of residency a user must first obtain Citizenship in the Scroda Infrastructure.
                            </p>
                        </div>
                    </div>
                    <div class="row prement-system">
                        <div class="col-sm-4">
                            <div class="prement js-tilt-container">
                                <!-- <span class="ti-shield"></span> -->
                                <p>
                                    The First Step is for a user to obtain approval locally from 10 <strong>Issuance Officers</strong>
                                    during this step purely basic information of a user is collected such as a users
                                    age and all nationalities in which a user holds.
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="prement js-tilt-container">
                                <!-- <span class="ti-mouse"></span> -->
                                <p>
                                    Afterwards an 80% vote is required from the <strong>Issuance Committee</strong>  which
                                    ensures all Issuance Officers followed all prerequisite and obtained all
                                    documentains correctly.
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="prement js-tilt-container">
                                <!-- <span class="ti-receipt"></span> -->
                                <p>
                                    Finally after all required information on a user has been collected they are finally
                                    able to partake in the Voting Platform in which laws and regulations are kept
                                    updated by the <strong>Round Table</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dapps-item">
                <div class="row">
                    <hr/>
                    <div class="col-md-12">
                        <div class="crypcash-left sc-h-it-work mb-10px mt-50px">
                            <h2 class="text-center">Scroda Decentralized Exchange</h2>
                            <div class="crypcash-content">
                                <p>
                                    Scroda's Decentralized Exchange utilities Sidechain connected to Scroda Mainchain in
                                    order to allows users to deposit different cryptocurrentcy funds to then be automatically
                                    converted to SCR. The automatic Scroda conversion function will allow for all cryptocurrencies
                                    that are sent into the Scroda eco-system to benefit from the features Scroda provides no matter
                                    what coin the Deposit, Exchange or Withdraw within the Scroda Environment. Cryptocurrencies
                                    deposited in the Scroda environment will be held in a frozen state until a user decides to
                                    unfreeze them in order to exchange, withdraw or official convert them to SCR, upon doing any
                                    of the two will cause for the remaining unused coin to be burned if withdrawing the equivalent
                                    of what is being withdrawn will be burnt in the Scroda Network and if a coin is officially being
                                    converted to SCR the equivalent of the cryptocurrency initially deposited will be sent to a burn
                                    address for that specific cryptocurrency.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dapps-item">
                <div class="row">
                    <hr/>
                    <div class="col-md-12">
                        <div class="crypcash-left sc-h-it-work mb-10px mt-50px">
                            <h2 class="text-center">Scroda Decentralized Incubator</h2>
                            <div class="crypcash-content">
                                <p>
                                    Scroda’s Decentralized Incubator is fully self-governed it gives a fair
                                    opportunity to anyone and everyone with an exceptional ideal to be able to
                                    gather a team and gain funding to make their vision reality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row prement-system prement-incubator">
                    <div class="col-sm-4">
                        <div class="prement js-tilt-container">
                            <p>
                                Incubator Officers review a users project application to make sure that the
                                project vision serves a purpose and meets the set standard in order to qualify
                                which then a 35% approval is needed from Officers to proceed.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="prement js-tilt-container">
                            <p>
                                Incubator Officers review a users project application to make sure that the
                                project vision serves a purpose and meets the set standard in order to qualify
                                which then a 35% approval is needed from Officers to proceed.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="prement js-tilt-container">
                            <p>
                                Investors will be able to go through approved projects in Scrodas Incubator and
                                invest in Projects that spark their interest, funds invested will be sent to a
                                smart contract that will go into the project development and request to withdraw
                                funds must gain a approval from 70% of the investors of the project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <button class="show-more-btn hide-dapps" id="hide-content">
                        <p>Hide All</p>
                        <img src="assets/img/icons/up-arrow.png" width="32" height="32" class="more-arrow">
                    </button>
                    <!--                        <a class="show-more-btn hide-dapps" href="#dappslist" id="hide-content"><span class="ti-angle-double-up"></span> </a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="mt-25px">

<section class="token-area homepage-4 pt-50px pb-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Benefits of the SCR Tokens</h2>
                    <p>With the many advancements Scroda offers, SCR tokens is what enables users to reap the great benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon.png" alt="">
                    <div class="token-meta">
                        <h4>Early Bonus</h4>
                        <p>20% off for first 100 Tken Share crypcash Holders. ipsum dolor sit amerereet, nsecate adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-2.png" alt="">
                    <div class="token-meta">
                        <h4>Low Cost</h4>
                        <p>20% off for first 100 Tken Share crypcash Holders. ipsum dolor sit amerereet, nsecate adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-3.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda ID Access</h4>
                        <p>With SCR tokens users will have the ability to utilize the Scroda ID framework in their applications, wallet, and/or outside networks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row t-mt-80">
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-4.png" alt="">
                    <div class="token-meta">
                        <h4>Private Token Conversion</h4>
                        <p>SCR tokens will allow users to use the Scroda Automation Exchange platform to exchange their SCR for other market tokens in an untraceable manner.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-5.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda Transaction Privacy</h4>
                        <p>The Scroda network will allow users to transfer SCR and transact with others privately through the implementation of Scroda's patent pending concept.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-6.png" alt="">
                    <div class="token-meta">
                        <h4>Competitive Transaction Speed</h4>
                        <p>Through the introduction of Scroda's sole ledger and patent pending methods, SCR tokens will benefit from, and experience, extremely fast transactions and network functionalities.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="tokensection"></div>
    </div>
</section>

<section class="chart-description-area homepage-3 homepage-4 pt-25px animated wow fadeInUp" id="token" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title ">
                    <h2>Token Distribution &amp; Use of Fund</h2>
                    <p>We are proud to be a awesome theam. They are really awespme people with their good knoledge.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <h4 class="chart-heading">Token Distribution </h4>
                    <div class=" col-md-6 col-sm-6">
                        <div class="chart-left ">
                            <canvas id="tokenDist" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="chart-right">
                            <ul>
                                <li class="chsrt-list diff-color-1">82% Private Sale, Pre-ICO and ICO</li>
                                <li class="chsrt-list diff-color-2">10% Project Team</li>
                                <li class="chsrt-list diff-color-3">3% Advisors and Partners</li>
                                <li class="chsrt-list diff-color-4">2.5% Bonus and Reserve</li>
                                <li class="chsrt-list diff-color-5">2.5% Bounty</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <h4 class="chart-heading mt-80px">Uses of Fund</h4>
                    <div class="col-md-6 col-sm-6">
                        <div class="chart-left ">
                            <canvas id="usesFund" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="chart-right">
                            <ul>
                                <li class="chsrt-list diff-color-1">40 % Team, IT and Research Development</li>
                                <li class="chsrt-list diff-color-2">30 % Sales and Marketing</li>
                                <li class="chsrt-list diff-color-3">13.5 % Admins and Advisors</li>
                                <li class="chsrt-list diff-color-4">7 % Partnership</li>
                                <li class="chsrt-list diff-color-5">6 % Headquarters Land Development</li>
                                <li class="chsrt-list diff-color-6">3.5 % Legal and Financial</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="roadmap-area" class="roadmap-area homepage-3 homepage-4 pb-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="section-bg">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>CrypCash</span> Roadmap</h2>
                        <p>We are proud to be a awesome theam. They are really awespme people with their good knowledge.</p>
                    </div>
                </div>
            </div>
            <div class="rodmap-carsoule">
                <div class="single-item single-item_1">
                    <div class="single-item-inner">
                        <h5>Aug - Sep 2018</h5>
                        <p>Team Development</p>
                    </div>
                </div>
                <div class="single-item single-item_2">
                    <div class="single-item-inner">
                        <h5>Sep - Oct 2018</h5>
                        <p>Start of Headset Development Scientific Research</p>
                    </div>
                </div>
                <div class="single-item single-item_3">
                    <div class="single-item-inner">
                        <h5>Oct - Dec 2018</h5>
                        <p>Headset Prototype Developed</p>
                        <p>Hidden Headset Functionality Reveal</p>
                    </div>
                </div>
                <div class="single-item single-item_4">
                    <div class="single-item-inner">
                        <h5>Jan - Apr 2019</h5>
                        <p>Phase 1 Alpha Wallet Launch + Headset Integration</p>
                        <p>Implement SOS feature</p>
                        <p>Wills and Goods and/or Service Bookkeeping Implemented</p>
                    </div>
                </div>
                <div class="single-item single-item_5">
                    <div class="single-item-inner">
                        <h5>Apr - Jun 2019</h5>
                        <p>Phase 1 Beta + Phase 2 Alpha + Mobile Wallet Release</p>
                        <p>Scroda's Decentralized File Storage Side Chain Introduction</p>
                    </div>
                </div>
                <div class="single-item single-item_6">
                    <div class="single-item-inner">
                        <h5>Jul - Aug 2019</h5>
                        <p>Phase 2 Beta + Phase 3 Alpha</p>
                        <p>Side Chain for Gaming, Streaming, and Book Content Hosting</p>
                    </div>
                </div>
                <div class="single-item single-item_7">
                    <div class="single-item-inner">
                        <h5>Aug - Dec 2019</h5>
                        <p>Phase 3 Beta</p>
                        <p>Gaming Blockchain Console Reveal</p>
                    </div>
                </div>
                <div class="single-item single-item_8">
                    <div class="single-item-inner">
                        <h5>Jan - Mar 2020</h5>
                        <p>New Coin Reveal + Official Scroda Wallet Launch</p>
                        <p>New Coin/Project will be revealed which will work side by side with Scroda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whitepaper-area homepage-3 homepage-4 pt-100px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Legal Documents</h2>
                    <p>We are proud to be a awesome theam. They are really awespme people with their good knoledge.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="document">
                <div class="single-document">
                    <div class="document-content">
                        <h4>White papers</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>One papers</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>CNR</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Legal Paper</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>One papers</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="document">
                <div class="single-document">
                    <div class="document-content">
                        <h4>Registration</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Marketing Plan</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Certificate</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Tokens</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Tokenholders Benefits</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="document">
                <div class="single-document">
                    <div class="document-content">
                        <h4>Financial Plan</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>Token Quantity</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
                <div class="single-document">
                    <div class="document-content">
                        <h4>User Reviews</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="teamsection"></div>
</section>

<section class="team-area homepage-3 homepage-4 pb-0px animated wow fadeInUp" id="team_member" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><span>Scroda</span> Team Member</h2>
                    <p>We are proud to be a awesome theam. They are really awespme people with their good knoledge.</p>
                </div>
            </div>
        </div>
        <div class="row mb-54">
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="https://twitter.com/JanLizFonts"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="https://twitter.com/JanLizFonts"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="#"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="#"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="#"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Waylon Dalton</h5>
                            <span class="team-title">CEO &amp; Lead Blockchain</span>
                            <ul class="team-social">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                <li><a href="#"><span class="ti-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="team-photo">
                            <img src="assets/img/team-img/lisk_9122.jpg" alt="team">
                        </div>
                    </div>
                    <div class="team-discription">
                        <p></p>
                        <ul>
                            <li>5+ years in development expericences</li>
                            <li>Vast exprerience in B2C on C-level positions</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="faqsection"></div>
    </div>
</section>

<section id="faq-area" class="faq-area homepage-3 homepage-4 pb-300px pt-50px animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>We are proud to be a awesome theam. They are really awespme people with their good knoledge.</p>
                </div>
            </div>
        </div>    <!--TAB AREA-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="tabs animated-slide-2  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                        <li role="presentation"><a href="#token-sale" aria-controls="token-sale" role="tab" data-toggle="tab">Token Sale</a></li>
                        <li role="presentation"><a href="#roadmap" aria-controls="roadmap" role="tab" data-toggle="tab">Roadmap</a></li>
                        <li role="presentation"><a href="#legal" aria-controls="legal" role="tab" data-toggle="tab">Legal</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="general">

                            <article class="beefup example-opensingle">
                                <h4 class="beefup__head">
                                    1. How does the Crypcash work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. Who started the Bitcoin payment system?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. How many Bitcoins are there left to be mined?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>

                        </div>
                        <div  role="tabpanel" class="tab-pane fade" id="token-sale">

                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    1. How does the Crypcash work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. Who started the Bitcoin payment system?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. How many Bitcoins are there left to be mined?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>

                        </div>
                        <div  role="tabpanel" class="tab-pane fade" id="roadmap">

                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    1. How does the Crypcash work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. Who started the Bitcoin payment system?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. How many Bitcoins are there left to be mined?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>

                        </div>
                        <div  role="tabpanel" class="tab-pane fade" id="legal">

                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    1. How does the Crypcash work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. Who started the Bitcoin payment system?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. How many Bitcoins are there left to be mined?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. Can you make Bitcoins?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>A transaction is a transfer of value between Bitcoin wallets that gets included in the block chain. Bitcoin wallets keep a secret piece of data called a private key or seed, which is used to sign transactions
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="footer-bg homepage-3 homepage-4 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div id="contact-section" class="gray-bg">
        <div class="container">
            <div class="contact-wrapper homepage-3 homepage-4 mt-80px">
                <div class="row">
                    <div class="col-sm-6 boder-right">
                        <div class="contact-form-area  ">
                            <h2 class="text-capitalize">Contact us</h2>
                            <form id="digita-contact-form" action="assets/php/contact-mail.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email Address*">
                                </div>
                                <div class="form-group">
                                    <textarea id="Message" class="form-control" rows="3" name="message" placeholder="Write Message*"></textarea>
                                </div>
                                <button type="submit" class="btn btn-blue"><img src="assets/img/icons/send-icon.png" alt="place your img"></button>
                                <p class="contact-send-message"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="address-wrapper ">
                            <div class="single-address">
                                <div class="address-icon-bg">
                                    <span class="ti-headphone-alt"></span>
                                </div>
                                <p class="single-contact-info"><a href="tel:326578912">+0044 545 989 62698</a></p>
                            </div>

                            <div class="single-address">
                                <div class="address-icon-bg">
                                    <span class=" ti-email"></span>
                                </div>
                                <p class="single-contact-info"><a href="mailto:hasan.nazmulmmc@gamil.com">www.marveltheme.com</a> </p>
                            </div>

                            <div class="single-address">
                                <div class="address-icon-bg">
                                    <span class="ti-pin2"></span>
                                </div>
                                <p>28 Green Tower, Street Name, New York City, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subscribe-box animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <h2>Don’t miss anything, Stay Connected</h2>
                <form action="http://hackinout.us15.list-manage.com/subscribe/post-json?u=e44c1f194bec93e238615469e&amp;id=fa63cb4ac7&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your Email address" required>
                    <input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
                    <div id="subscribe-result">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="footer-area animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="social-links">
                        <a href="https://twitter.com/JanLizFonts" target="_blank"><span class="ti-twitter-alt"></span></a>
                        <a href="#" target="_blank"><span class="ti-pinterest"></span></a>
                        <a href="#" target="_blank"><span class="ti-facebook"></span></a>
                        <a href="#" target="_blank"><span class="ti-tumblr-alt"></span></a>
                        <a href="https://www.linkedin.com/in/janlizfonts/" target="_blank"><span class="ti-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="footer-bottom_area homepage-3 homepage-4">
    <div class="container">
        <div class="row boder-t">
            <div class="col-md-6 col-xs-12">
                <p class="copy-rights">Copyright @ 2018 <a href="#">marveltheme </a>all right resurved.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="footer-right text-right">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Buy or Sell</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
{{--<script src="assets/js/preloader.js"></script>--}}
<script src="{{asset('assets/js/theme.plugins.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/js/ajax-subscribe.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript">
    $("#view-content").on("click", function(){
        $(this).hide();
        $(".dappscontent").show(500);
        //$(".dappscontent").addClass("slideInDown");
        //$(".dappscontent").removeClass("slideOutUp");
        //$("#hide-content").show();
    });
    $("#hide-content").on("click", function(){
        $(".dappscontent").hide(500);
        $("#view-content").show();
        //$(".dappscontent").removeClass("slideInDown");
        //$(".dappscontent").addClass("slideOutUp");
    });
</script>
<script type="text/javascript">
    jQuery(function ($) {
        function changeColor(selector, colors, time) {
            /* Params:
             * selector: string,
             * colors: array of color strings,
             * every: integer (in mili-seconds)
             */
            var curCol = 0,
                timer = setInterval(function () {
                    if (curCol === colors.length) curCol = 0;
                    $(selector).css("background-color", colors[curCol]);
                    curCol++;
                }, time);
        }
        $(window).load(function () {
            changeColor(".show-dapps", ["#0d98ba", "#3350FE"], 1500);
        });
    });
</script>

</body>

</html>
