<!-- start navigation -->
<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
    <!-- start logo -->
    <div class="col-12 sidenav-header">
        <div class="mb-5">
            <a href="{{ route('index') }}" class="d-inline-block logo"><img alt="Unifab" src="{{ asset('/assets/images/logo.png') }}" data-at2x="{{ asset('/assets/images/logo.png') }}" /></a>
        </div>
        <!-- end logo -->
        <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="col-12 px-0">
        <div id="navbar-menu" class="collapse navbar-collapse no-padding">
            <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                <li class="dropdown">
                    <a href="#" title="Home" data-bs-toggle="dropdown">Home<i class="fa-solid fa-angle-right pull-right"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Home" data-bs-toggle="dropdown">About Us<i class="fa-solid fa-angle-right pull-right"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Home" data-bs-toggle="dropdown">Contact Us<i class="fa-solid fa-angle-right pull-right"></i></a>
                </li>
                <li>
                    <div class="side-left-menu-close close-side"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
        <div class="footer-holder">
            <form action="search-result.html" method="post" class="navbar-form no-padding search-box">
                <div class="input-group add-on">
                    <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-default search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
            <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                <a href="https://www.facebook.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://twitter.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                <a href="https://dribbble.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-dribbble" aria-hidden="true"></i></a>
                <a href="https://plus.google.com" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-google-plus-g" aria-hidden="true"></i></a>
            </div>
            <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">&copy; {{ date('Y') }} <a href="https://unifab.uk" target="_blank" title="Unifab">Unifab</a>. All rights reserved</div>
        </div>
    </div>
</nav>
<!-- end navigation -->