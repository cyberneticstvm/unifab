@extends("base")
@section("content")
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 text-center md-margin-30px-bottom wow animate__fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <img src="{{ asset('/assets/images/about-img3.jpg') }}" alt="" class="border-radius-6 w-100" data-no-retina="">
            </div>
            <div class="col-lg-7 col-md-6 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <span class="text-deep-pink alt-font margin-10px-bottom d-inline-block text-medium">CSR</span>
                <h6 class="alt-font text-extra-dark-gray">Corporate Social Responsibility</h6>
                <p>The uniforms of Unifab are manufactured in India. Mostly women from underprivileged socio economic background work in the the entire production process. Enabling them with financial freedom is the commitment we have in our business.</p>
            </div>
        </div>
    </div>
</section>
@endsection