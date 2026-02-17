@extends("base")
@section("content")
<!-- start hero with parallax section -->
<section class="wow animate__fadeIn p-0 parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('/assets/images/unifab/bg2.png') }}');">
    <div class="container full-screen position-relative">
        <div class="row m-0 h-100 align-items-center">
            <div class="col-xl-8 col-md-10 offset-xl-4 offset-md-1 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">UNIFAB.UK</div>
                <div class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                <span class="text-dark-gray text-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom">Welcome to Unifab UK, a leading uniform supplier in the UK delivering high-quality, branded workwear and professional uniforms to businesses, schools, healthcare providers, and industrial organisations nationwide.
                    <br>We specialise in durable, comfortable, and professionally branded uniforms designed to enhance your company’s image, ensure staff comfort, and meet industry compliance standards.

                    <br>Whether you are a growing SME or a national enterprise, Unifab UK provides scalable uniform solutions tailored to your operational needs.
                </span>
                <a href="#" target="_blank" class="btn btn-dark-gray btn-medium">Contact Now</a>
            </div>
            <div class="down-section text-center">
                <a href="#why" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-deep-pink"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end hero banner with parallax section -->
<!-- start feature box section  -->
<section id="why" class="wow animate__fadeIn bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                    <span class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Corporate & Office<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Our embroidery and printing services ensure your logo remains sharp and professional even after repeated washing.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">02.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Healthcare & Medical<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Our healthcare garments are manufactured using breathable, easy-care fabrics designed for long shifts and frequent laundering.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">03.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Hospitality & Catering<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Our hospitality uniforms combine elegance with practicality, ensuring your team looks professional while remaining comfortable.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end feature box section -->
@endsection