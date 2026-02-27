<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>{{ $title ?? "" }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Cybernetics">
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
    <!-- start countdown section -->
    <section class="p-0 bg-extra-light-gray">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col minheight-fullscreen p-0 cover-background d-none d-lg-block" style="background-image:url('{{ asset('/assets/images/unifab/ubg.jpeg') }}');"></div>
                <div class="col minheight-fullscreen d-flex align-items-center bg-black p-0">
                    <div class="text-center padding-three-all sm-padding-15px-all w-100">
                        <div class="margin-nine-bottom md-margin-50px-bottom sm-margin-15px-bottom">
                            <h1>UNIFAB.UK</h1>
                        </div>
                        <h6 class="font-weight-300 text-white-2 margin-40px-bottom sm-margin-35px-bottom">We’re getting ready to launch</h6>
                        <div data-enddate="2025/01/01 12:00:00" class="countdown text-center counter-box-3 margin-nine-bottom"></div>
                        <div class="bg-extra-dark-gray padding-eight-all lg-padding-five-lr border-radius-6 w-70 xl-w-75 lg-w-80 sm-w-100 mx-auto sm-padding-30px-all">
                            <h6 class="font-weight-300 text-white-2 margin-20px-bottom sm-margin-15px-bottom">Our website is under construction</h6>
                            <p class="text-medium w-70 xl-w-80 lg-w-90 mx-auto margin-40px-bottom sm-w-100 sm-margin-15px-bottom">We'll be here soon with our new awesome site, subscribe to be notified.</p>
                            <!--<form class="search-box2" id="subscribenewsletterform2" action="email-templates/subscribe-newsletter.php" method="post">
                                    <div class="mx-0 form-results"></div>
                                    <div class="input-group add-on w-75 mx-auto sm-w-100">
                                        <input name="email" id="email" type="email" placeholder="Enter your email address" class="form-control required" />
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default submit"><i class="ti-angle-right text-small m-0"></i></button>
                                        </div>
                                    </div>
                                </form>-->
                            <p><strong>Phone:</strong> 09122670406<br><strong>Mobile:</strong> 07861726814<br><strong>Email:</strong> <a href="mailto:uniform@unifab.uk">uniform@unifab.uk</a></p>
                        </div>
                        <div class="text-center social-icon-style-10 margin-eight-top sm-margin-30px-top">
                            <ul class="large-icon mobile-small mb-0">
                                <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i><span></span></a></li>
                                <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                                <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fa-brands fa-google-plus-g"></i><span></span></a></li>
                                <li><a class="dribbble text-white-2" href="https://dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i><span></span></a></li>
                                <li><a class="linkedin text-white-2" href="https://linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end countdown section -->
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