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
                    <h4>Request Your Password</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" class="user-ath-form">
                        @csrf
                        <!--
                                                    <div class="note note-lg note-no-icon note-danger">
                                                        <p>There is no account with this email.</p>
                                                    </div>
                                                    <div class="note note-lg note-no-icon note-success">
                                                        <p>Password recovery instruction sent to your email, Please check.</p>
                                                    </div>
                        -->
                        <div class="input-item">
                            <input type="email" name="email" placeholder="Your Email" class="input-bordered {{ $errors->has('email') ? ' is-invalid' : '' }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="gaps"></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary">Reset</button>
                            <span> <a href="/login" class="simple-link"><em class="ti ti-arrow-right"></em> Login Here</a></span>
                        </div>
                    </form>
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
