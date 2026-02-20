<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>{{ $title ?? "" }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="{{ $description ?? '' }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/images/apple-touch-icon-114x114.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}" />
</head>

<body>
    @include("nav")
    <div class="sidebar-wrapper mobile-height">
        @yield("content")
        <!-- start footer -->
        <footer class="footer-center-logo bg-light-gray padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start copyright -->
                    <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom">
                        &copy; {{ date('Y') }} <a href="https://unifab.uk" target="_blank" title="Unifab">Unifab</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start logo -->
                    <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                        <a href="index.html"><img class="footer-logo" src="{{ asset('/assets/images/logo.png') }}" data-at2x="{{ asset('/assets/images/logo.png') }}" alt="Pofo"></a>
                    </div>
                    <!-- end logo -->
                    <!-- start social media -->
                    <div class="col-lg-4 col-md-5 text-center">
                        <span class="alt-font text-small margin-20px-right md-margin-15px-right">On social networks</span>
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="google" href="https://plus.google.com" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                <li><a class="instagram" href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram me-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>