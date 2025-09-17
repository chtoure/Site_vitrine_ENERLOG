<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$parameter['name']}}</title>

        <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="author" content="Codings">


        <link rel="shortcut icon" href="{{ asset($parameter['logo']) }}">
        {{-- <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ Vite::asset('resources/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ Vite::asset('resources/images/apple-touch-icon-114x114.png') }}"> --}}


        @vite([
            'resources/css/app.css',
        ])

        <link rel="stylesheet" href="assets/css/default.css">

        <meta name="theme-color" content="#21333e">
        
    </head>

    <body class="home">

        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        @include('component.layouts.header')

        @yield('content')
        

        @include('component.layouts.footer')

        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h2>What are you looking for?</h2>
                                        <div class="badges">
                                            <span class="badge"><a href="#">Consulting</a></span>
                                            <span class="badge"><a href="#">Audit</a></span>
                                            <span class="badge"><a href="#">Assurance</a></span>
                                            <span class="badge"><a href="#">Advisory</a></span>
                                            <span class="badge"><a href="#">Financial</a></span>
                                            <span class="badge"><a href="#">Capital Markets</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        

        <script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>
        <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/ponyfill.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/slider.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/animation.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/progress-radial.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bricklayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/gallery.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/shuffle.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/cookie-notice.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/particles.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>