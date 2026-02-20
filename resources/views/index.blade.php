@extends("base")
@section("content")
<!-- start hero with parallax section -->
<section class="wow animate__fadeIn p-0 parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('/assets/images/unifab/bg2.png') }}');">
    <div class="container full-screen position-relative">
        <div class="row m-0 h-100 align-items-center">
            <div class="col-xl-12 col-md-12 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">UNIFAB.UK</div>
                <div class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                <span class="text-dark-gray text-large font-weight-300 d-block">We are a UK based company having our garments production back in India manufacturing uniforms. As our name signifies we are committed to bringing quality fabric into unique designing and tailoring with added values and functionality.
                </span>
                <span class="d-none d-md-block text-dark-gray text-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom">Safety, comfort and style are intervowen while crafting our designs. Health standards are ensured through internationally approved lab tests. We cater to range of minimum and bulk orders. Potential for branding with customized embroidery and design are our speciality. We are unique to address the requirements of the customers ensuring ethnic and gender specific needs. Made to order uniforms for any sector within a timeframe is possible with us. Any sizes in durable, sustainable and stretchable fabric are our commitment.</span>
                <a href="{{ route('about') }}" class="btn btn-dark-gray btn-medium">Know More</a>
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
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">04.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Security Personnel<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Made from durable, breathable fabrics, they ensure comfort during long shifts while maintaining a sharp, disciplined appearance.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">05.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Transportation Staff<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Our transportation staff uniforms are designed for durability, comfort, and high visibility in demanding environments.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">06.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Educational Institutions<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">We provide reliable, cost-effective educational institute uniform solutions, bulk supply options and consistent sizing make us a trusted partner.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">07.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Vet clinics, Dental<br> Uniforms</span>
                </div>
                <p class="w-90 lg-w-100">Our vet clinic and dental uniforms are designed to deliver comfort, hygiene, and a professional appearance in clinical environments.</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end feature box section -->
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Our Team</span>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
            <!-- start team item -->
            <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp" style="visibility: visible; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-w-100">
                        <img src="{{ asset('/assets/images/team18.jpg') }}" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Madhur Bedi</div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Founder</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Madhur Bedi is a UK based business person since 2007. With his experience and expertise in the field of garments manufacturing and exports for about two decades, he is cherishing the dream of diversifying textile products adding values and functionality to uniforms for various sectors. Incorporating end user suggestions and feedbacks to innovative production is key in his business. Deriving philosophical motivation from Gandhi, he considers value based and ethical business as the foundation to the construct of a productive society. To serve the customers with commitment to quality is his prime concern.</span>
                            <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                            <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-w-100">
                        <img src="{{ asset('/assets/images/team18.jpg') }}" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Tomy Jacob</div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Founder</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Tomy Jacob, migrated to UK in 2023. He worked in the care sector since his then. With the exposure and experience from work and with the vision to bridge the gap in the availability of customized health care uniforms, he joined hands with Madhur Bedi and evolved a business plan for uniforms business forming the brand "Unifab".</span>
                            <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                            <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
        </div>
    </div>
</section>
@endsection