<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scroda a Decentralized Revolution</title>
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
                            <form method="POST" onsubmit="return regFunc()" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input name="name" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" required type="password" class="form-control" id="regPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Repeat Password</label>
                                    <input name="password_confirmation" required type="password" class="form-control" id="regPasswordConfirm" placeholder="Password">
                                </div>
                                <div id="passwordNotMatch" style="display: none" class="form-group">
                                    <smal><div class="alert alert-danger">Password don't match</div></smal>
                                </div>
                                <div class="form-group">
                                    <label class="checkboxes">
                                        <input name="agree" required type="checkbox" id="agree"> I agree to the Terms and Conditions
                                    </label>
                                    <a target="_blank" class="btn btn-default" href="/policy">View</a>
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
                            <p class="token-title mb-15px">Private Sale Phase 1</p>
                            <p class="fs-30px fw-600 mb-25px">
                                <span class="text-purple">Buy Now</span>


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
                                    0M
                                </div>
                                <div class="cap-item">
                                    Hard Cap <br>
                                    207M
                                </div>
                            </div>
                            <div class="cap-bar">
                                <div class="filled-cap" style="width: 0%;"></div>
                            </div>
                            <p class="price-info">
                                Current Price
                                <span>1 SCR = 0.5 USD</span>
                            </p>
                            <p class="slider-links">
                                <a href="#" class="slider-btn animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" data-toggle="modal" data-target="#myModal">Buy SCR NOW</a>
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
                                Scroda is offering unorthodox solutions through patent pending methodologies which directly advances the
                                entirety of blockchain technology from it's current barriers and limitations. Scroda is <strong>revolutionizing democracy</strong>
                                while continuing it´s focus on <strong>efficiency</strong>, <strong>security</strong>, and <strong>privacy</strong> thus giving the Scroda infrastructure a higher integrity level over other currently publicized infrastructures.
                                The use of <strong>EEG</strong> as a <strong>biometric encryption</strong> allows Scroda to give power to the people by fusing <strong>democracy</strong> and blockchain technology together for the realization of world evolution and the freedom of all global citizens.
                                Scroda´s ´Power to the People´ infrastructure is the working concept that has for ever been sought after since the very beginning of democracy (dēmokratia) in 507 B.C.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-50px">
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/privacy-flawed.png" width="513" height="442" alt="Next-Generation Identification">
                        <div class="token-meta">
                            <h4>True, Flawless Privacy</h4>
                            <p>The fusion of <strong>homomorphic encryption</strong>, <strong>zero-proof knowledge</strong>, <strong>salting & hashing</strong>, <strong>routing & mixing</strong> and <strong>symmetric encryption</strong> allows for maximum privacy to be obtained on the Scroda infrastructure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/token-exchange.png" width="510" height="468" alt="Token Automation Exchange">
                        <div class="token-meta">
                            <h4>State-of-the-Art Consensus</h4>
                            <p>Scroda introduces Proof-of-Participation, a <strong>consensus mechanism</strong> in where nodes are rewarded for partaking in specific task required in upkeeping the Scroda platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-token t-align-center">
                        <img src="assets/img/icons/identification-generation.png" width="507" height="430" alt="True Un-Flawed Privacy">
                        <div class="token-meta">
                            <h4>Next-Generation Identification</h4>
                            <p>Scroda gives birth to an unsurpassable, true identification framework from the use of <strong>medically advanced EEG</strong> that is accompanied by <strong>complex biometric identification</strong>. This is a patent-pending solution that was made to advance all world use cases.</p>
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
                        <h2>How is the Scroda Platform achieving flawless privacy?</h2>
                        <div class="crypcash-content no-left">
                            <p>Through thousands of hours dedicated to researching and analyzing the standings of current blockchain infrastructures and many failures, Scroda has been able to obtain its goal in evolving the current blockchain concept. The removal of <strong>third parties</strong> when <strong>routing transactions</strong> in order to <strong>maintain anonimity</strong>, requirement of <strong>one-time-use</strong> addreses, implementation of a <strong>mixing pool</strong> in order to <strong>merge funds</strong> from multiple <strong>one-time-use</strong> addresses ensures <strong>privacy</strong> and <strong>unlinkability</strong> in all transactions performed on the Scroda platform, thus surpassing current barriers in blockchain technology. Through the utilization of the mechanism found in colored coins the Scroda platform is able to categorize addresses into different <strong>Tier Levels</strong> based on the value stored in each address. Each Tier will implement a <strong>Time-Lock mechanism</strong> in where a specified time-frame will be set that restricts a address from conducting a transaction upon obtaining funds until its expiry in order to prevent abuse on the network of the Scroda platform.</p>
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
                    <h2>A State-of-the-Art Consensus Mechanism</h2>
                    <div class="crypcash-content">
                        <p>In Scroda we introduce a new <strong>consensus mechanism</strong> named Proof-of-Participation (PoP) that employs a deterministic (pseudo-random) solution to define the creator of the next block, who will receive a block reward of freshly minted coins. The constructed chance of someone becoming the following block creator depends on their pre-historic <strong>participation level</strong> on specific tasks that are considered important to the network (i.e. connectivity time as a node, participation level as an issuance and incubator officer, the number of sidechains successfully upholding, etc). As Scroda moves further into becoming a blockchain that is fully selfgoverned by its users, more required tasks will be added in order to uphold the <strong>quality</strong> and <strong>power</strong> of the Scroda network.</p>
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
                            <strong>EEG</strong>, accompanied by <strong>complex identifying biometrics</strong>. With Scroda ID, and the Scroda patent pending
                            identification method, Scroda is able to birth and introduce a breakthrough in the space for the way in
                            which data, profiles, accounts, and grids can be securely and identifiably accessed, while providing
                            government infrastructure and corporate standings a much sought-after solution for the true identification
                            of personnel and beings of interest. With this, Scroda ID brings forth a new security framework that
                            allows for a <strong>spoof</strong> and <strong>tamper</strong> free identification and authentication method which can be implemented and
                            adopted in any standing, infrastructure, or setting, placing Scroda in the forefront of revolutionary
                            blockchain advancement through removing all vulnerabilities in private keys, passphrases, passwords, as
                            well as through creating new real-world possibilities via Scroda's answer to unbeatable <strong>true</strong> and <strong>accurate</strong>
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
                            Scroda is dedicated to be the worlds infrastructure. Adiding nations, people, and industriess in realizing a world of freedom and true purpose. With this vision being one of significance, we understand what it will take. This is why Scroda will not only be a infrastructure of one layer, but rather a global infrastructure of many layers, resources and possibilities.
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
                            Scroda Citizenship is the life of each and every Scroda user within the Scroda Network. Scroda ID is the main key that fosters the possibility of a future global revolution and true freedom.
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
                            With Scroda’s vision being directly tied to global equality and inclusion, we retain the same approach and essence within the blockchain space by providing everyone with the ability to reap the direct benefits of Scroda through the use of Scroda’s Decentralized Exchange (SDE).
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
                            Scroda’s Decentralized Incubator is fully self-governed thus giving a fair opportunity to anyone and everyone with an exceptional idea to be able to gather a team and gain funding to make their vision reality.
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
                                    It is widely understood and agreed to, that in this day and age, we should not be participating in vital elections through methods known to be prone to many risks and potential downfalls. Methods including electronic voting machines and manual paper submission are becoming more vulnerable by the day, and the demand to eliminate electoral fraud is one that is rapidly rising amongst voters around the world. By adopting a system that empowers votes to be immutable, verifiable, traceable, and instant, a change within citizens in all parts of the world will begin to take place and further advance ¨The People¨ as they regain trust in the democratic system they once lost hope for. Such an implementation would give life to a new democratic system that would ensure value, integrity, power, privacy and security to each vote. Scroda is bringing evolution to the democratic process worldwide, and by ensuring that the Scroda Platform abides to the laws in each country, changes in the democratic system can be made more rapidly than ever before.
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
                                    Scroda's Decentralized Exchange (SDE) utilizes sidechain layers to connect directly to the Scroda Main Chain, which enables the flow of Outside Currency Deposits to be automatically converted to SCR, a requirements which allows all Outside Currency Deposits to reap the benefits from the features offered within the Scroda Infrastructure.
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
                                    Incubator Officers protect investors from bad investments by only allowing qualified projects with an exceptional idea to be able to gather a team and gain funding to make their vision reality.
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
                    <h2>Benefits obtained through the use of SCR</h2>
                    <p>With the many advancements in which Scroda has achieved, holders of SCR are able to reap many great benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon.png" alt="">
                    <div class="token-meta">
                        <h4>Node Rewards</h4>
                        <p>Nodes are rewarded for maintaining the network and performing specific task required of the Scroda Platform.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-2.png" alt="">
                    <div class="token-meta">
                        <h4>Fee-less</h4>
                        <p>Through the categorization of Tier Levels and use of a Time Lock Mechanism, SCR is able to be transacted with Zero-Fees.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-3.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda ID Access</h4>
                        <p>Through the use of EEG and a Scroda ID Headset users will have the ability to utilize the Scroda ID framework in the platform, wallet, and/or outside networks.</p>
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
                        <p>SCR will allow users to use the Scroda Automation Exchange platform to exchange their SCR for other market tokens in an untraceable manner.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-5.png" alt="">
                    <div class="token-meta">
                        <h4>Scroda Transaction Privacy</h4>
                        <p>The Scroda network will allow users to transfer SCR and transact with others privately through the privacy features implemented into the use of SCR.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-token t-align-center">
                    <img src="assets/img/icons/token-icon-6.png" alt="">
                    <div class="token-meta">
                        <h4>Competitive Transaction Speed</h4>
                        <p>Through the interaction of Main Chains and Side Chains and Isolated Environments stored Off-the-Chain we aim to provide Extremely Fast transaction confirmations and network functionalities.</p>
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
                    <p>Strategic allocation breakdown of the Coin Distribution Event and Uses of Funds</p>
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
                        <h2><span>Scroda</span> Roadmap</h2>
                        <p>Key future milestones for the Scroda Platform and Infrastructure. Formulated to help visualize the strong and powerful output that is to be expected from the Scroda team.</p>
                    </div>
                </div>
            </div>
            <div class="rodmap-carsoule">
                <div class="single-item single-item_1">
                    <div class="single-item-inner">
                        <h5>Q1 - 2019</h5>
                        <p>Team Development</p>
                    </div>
                </div>
                <div class="single-item single-item_2">
                    <div class="single-item-inner">
                        <h5>Q1 - 2019</h5>
                        <p>Start of Headset Development Scientific Research</p>
                    </div>
                </div>
                <div class="single-item single-item_3">
                    <div class="single-item-inner">
                        <h5>Q2 - 2019</h5>
                        <p>Headset Prototype Developed</p>
                    </div>
                </div>
                <div class="single-item single-item_4">
                    <div class="single-item-inner">
                        <h5>Q2 - 2019</h5>
                        <p>Phase 1 Alpha Wallet Launch + Headset Integration</p>
                        <p>Implement SOS feature</p>
                        <p>Wills and Goods and/or Service Bookkeeping Implemented</p>
                    </div>
                </div>
                <div class="single-item single-item_5">
                    <div class="single-item-inner">
                        <h5>Q3 - 2019</h5>
                        <p>Phase 1 Beta + Phase 2 Alpha + Mobile Wallet Release</p>
                        <p>Scroda's Decentralized File Storage Side Chain Introduction</p>
                    </div>
                </div>
                <div class="single-item single-item_6">
                    <div class="single-item-inner">
                        <h5>Q4 - 2019</h5>
                        <p>Phase 2 Beta + Phase 3 Alpha</p>
                        <p>Side Chain for Gaming, Streaming, and Book Content Hosting</p>
                    </div>
                </div>
                <div class="single-item single-item_7">
                    <div class="single-item-inner">
                        <h5>Q1 - 2020</h5>
                        <p>Phase 3 Beta</p>
                        <p>Gaming Blockchain Console Reveal</p>
                    </div>
                </div>
                <div class="single-item single-item_8">
                    <div class="single-item-inner">
                        <h5>Q2 - 2020</h5>
                        <p>Official Scroda Wallet Launch</p>
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
                    <p>Legally crafted documents. Key research and study information dedicated to enlighten the mind of all Scroda supporters.
                    </p>
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
                        <h4>One pager</h4>
                        <span class="ti-agenda"></span>
                        <div class="download-icon">
                            <span class="ti-download"></span>
                        </div>
                    </div>
                </div>
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
                        <h4>Articles of Incorporation</h4>
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
            </div>
        </div>
        <div class="row">
            <div class="document">

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
                        <h4>T&C</h4>
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
                    <p>The Scroda Team consists of world class members. Truly focused on the ability to deliver and create success and value through grade A team effort.</p>
                </div>
            </div>
        </div>
        <div class="row mb-54">
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="d-flex">
                        <div class="team-info">
                            <h5 class="team-name">Jan Liz-Fonts</h5>
                            <span class="team-title">CEO</span>
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
                            <li>8+ years blockchain enthusiast</li>
                            <li>Having formely been a Community Manager at Lisk and presently a former Comunnity Manager at Buddy.</li>
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
                    <p>Many questions are good to ask. We believe in the freedom and power of knowledge. Here are the Frequently asked questions of the Scroda Platform.</p>
                </div>
            </div>
        </div>    <!--TAB AREA-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="tabs animated-slide-2  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">Scroda Platform</a></li>
                        <li role="presentation"><a href="#token-sale" aria-controls="token-sale" role="tab" data-toggle="tab">Obtaining Privacy</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="general">

                            <article class="beefup example-opensingle">
                                <h4 class="beefup__head">
                                    1. Is Scroda a completely fee-less environment?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>Scroda is mainly a fee-less environment if a user wishes to not be restricted to a certain time frame on when they are allowed to send funds then they are presented the option of paying a fee.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. How does Scroda’s PoP consensus mechanism work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p> Proof of Participation is a consensus mechanism based on Proof-of-Stake but in which nodes are rewarded based on their participation in upholding the Scroda network and penalized through the use of their unique Scroda-ID.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. How does Scroda prevent a network attack?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>In the event of a network attack Scroda will adjust the Time Frame on the restriction of transfer of funds per Tier Level real-time.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. Does the time lock restriction interfere with confirmation time?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>No, while a address may be restricted from sending funds it does not interfere with the time it takes to confirm a transaction.
                                    </p>
                                </div>
                            </article>

                        </div>
                        <div  role="tabpanel" class="tab-pane fade" id="token-sale">

                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    1. Why are Tier Levels used?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>Tier Levels are used in order to provide fee-less transactions to SCR holders while at the same time aiding in the prevention of a network attack.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    2. When does the Time-Lock restriction take place?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body">
                                    <p>The Time-Lock restriction starts to take place after a address has been confirmed to having received funds on the network.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    3. How does Scroda’s mixing pool work?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>Scroda’s mixing pool allows for funds from one-time-use address to be merged together in a unlinkable manner.
                                    </p>
                                </div>
                            </article>
                            <article class="beefup example-opensingle ">
                                <h4 class="beefup__head">
                                    4. Why are all cryptocurrencies that are to be exchanged automatically converted to SCR?
                                    <span class="ti-angle-down"></span>
                                </h4>

                                <div class="beefup__body" >
                                    <p>All external cryptocurrencies that are to exchanged on the Scroda network are to be automatically converted to SCR in order for users to maintain private, unlinkable, and untraceable transactions while exchanging on the Scroda network.
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
                                <p class="single-contact-info"><a href="tel:326578912">+1 000 000 0000</a></p>
                            </div>

                            <div class="single-address">
                                <div class="address-icon-bg">
                                    <span class=" ti-email"></span>
                                </div>
                                <p class="single-contact-info"><a href="mailto:inquiries@scroda.io">inquiries@scroda.io</a> </p>
                            </div>

                            <div class="single-address">
                                <div class="address-icon-bg">
                                    <span class="ti-pin2"></span>
                                </div>
                                <p>Saint Kitts and Nevis</p>
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
                <p class="copy-rights">Copyright 2019, Scroda Platform Ltd.  All Rights Reserved.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="footer-right text-right">
                    <ul class="list-inline">
                        <li><a href="#">Terms & Condition</a></li>
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
        /*$(window).load(function () {
            changeColor(".show-dapps", ["#0d98ba", "#3350FE"], 1500);
        });*/
    });
    function regFunc(){
        var password= $('#regPassword').val();
        var passwordConfirm= $('#regPasswordConfirm').val();
        if(password===passwordConfirm)
            return true;
        else {
            $('#passwordNotMatch').show();
            return false;
        }
    }
</script>

</body>

</html>
