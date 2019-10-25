<!-- @extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest') -->

    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/main.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" class="main-wrapper" >
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase nav-wrapper" id="mainNav">
        <div class="container container-wrapper">
            <a class="navbar-brand js-scroll-trigger containlink-wrapper" href="#page-top"></a>
                 <!-- <button class="btn btn-primary btn-lg formsubmit-wrapper" type="submit" ><p class="formsubmitpara-wrapper">Sign Up</p></button> -->
                <img src="assets/img/logo.png" class="navimg-wrapper"></span>
                 <!-- <button class="btn btn-primary btn-lg formsubmit-wrapper" type="submit" ><p class="formsubmitpara-wrapper">Sign In</p></button> -->
            <!--  <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded containbutton-wrapper"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button> --> 
            <div class="collapse navbar-collapse navresponsive-wrapper" id="navbarResponsive"><span class="navbar-text">
                
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Youtube</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link navlink-wrapper" href="#" >Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link navlink-wrapper" href="#" >About Me</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger " href="/login">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container container2-wrapper">
        <div class="row text-center d-xl-flex align-items-xl-center contain2row-wrapper">
            <div class="col-xl-4 offset-2 offset-xl-1 align-self-center contain2col-wrapper">
                <div class="row contain2row1-wrapper" >
                    <div class="col offset-xl-0">
                        <img class="img-fluid contain2img-wrapper"; " src="assets/img/coinholder.svg">
                        <img class="img-fluid contain2img1-wrapper"; " src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1024px-Bitcoin.svg.png">
                    </div>
                    <div class="col">
                        <img class="img-fluid contain2img-wrapper" src="assets/img/coinholder.svg">
                        <img class="img-fluid contain2img3-wrapper"; " src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Ethereum_logo_2014.svg/1200px-Ethereum_logo_2014.svg.png">
                    </div>
                    <!-- <div class="col">
                        <img class="img-fluid contain2img-wrapper" src="assets/img/coinholder.svg">
                        <img class="img-fluid contain2img1-wrapper"; " src="http://ih0.redbubble.net/image.15071528.8828/sticker,375x360.png">
                    </div> -->
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-start justify-content-xl-center align-items-xl-center contain2col1-wrapper">
                        <img class="img-fluid d-flex align-items-xl-center contain2img-wrapper" src="assets/img/coinholder.svg">
                        <img class="img-fluid contain2img2-wrapper"; " src="https://cdn1.iconfinder.com/data/icons/cryptocurrency-round-color/128/blockchain_cryptocurrency_currency_Ripple_1-512.png">
                    </div>
                    <div class="col d-flex justify-content-center align-items-start mb-auto justify-content-xl-center align-items-xl-center contain2col1-wrapper">
                        <img class="img-fluid contain2img-wrapper" src="assets/img/coinholder.svg" >
                        <img class="img-fluid contain2img2-wrapper"; " src="http://ih0.redbubble.net/image.15071528.8828/sticker,375x360.png">
                    </div>
                </div>
            </div>


            <div class="col-xl-6 align-self-center mb-auto form-wrapper">
                <form class="text-uppercase text-center border rounded justify-content-start align-items-end innerform-wrapper" role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                        <h2 class="text-capitalize text-center d-flex flex-shrink-1 justify-content-center align-content-center align-self-center flex-wrap order-1 mb-auto justify-content-xl-center align-items-xl-center formh-wrapper" ></h2>
                    </div>



                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4 bg-gradient-yellow">{{ __('Sign in') }}</button>
                            </div>
                        </form>
</div>
        </div>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>