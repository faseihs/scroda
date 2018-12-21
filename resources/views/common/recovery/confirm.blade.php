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
    <title>User Center - ICO Crypto</title>
    <!-- Vendor Bundle CSS -->
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/vendor.bundle.css?ver=100')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css?ver=100')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/custom.css')}}">


</head>

<body class="user-ath">

<div class="user-ath-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center">
                <div class="user-ath-logo">
                    <a href="#">
                        <img src="{{asset('dashboard/images/logo-sm.png')}}"  srcset="images/logo-sm2x.png 2x" alt="icon">
                    </a>
                </div>
                <div class="user-ath-box">
                    <h4>Verify Your Email</h4>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            An email has been sent to your email address
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ route('verification.resend') }}">{{ __('Click here to send verification email') }}</a>.
                </div>
                <div class="gaps-2x"></div>
                <div class="form-note">
                    Not a member? <a href="/register">Sign up now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript (include all script here) -->
<script src="{{asset('dashboard/assets/js/jquery.bundle.js?ver=100')}}"></script>
<script src="{{asset('dashboard/assets/js/script.js?ver=100')}}"></script>
</body>
</html>
