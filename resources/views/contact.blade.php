@extends("base")
@section("content")
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
            <!-- start contact block -->
            <div class="col text-center last-paragraph-no-margin md-margin-30px-bottom wow animate__fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="padding-60px-all border-all border-color-medium-gray md-padding-20px-all sm-padding-30px-all">
                    <img src="{{ asset('/assets/images/uk-flag.png') }}" alt="australia" class="margin-30px-bottom md-margin-20px-bottom" data-no-retina="">
                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase">UK</div>
                    <p>35 Park Street, Walsall,<br> WS1 1LY <br>England </p>
                    <p><strong>Phone:</strong> 09122670406<br><strong>Mobile:</strong> 07861726814<br><strong>Email:</strong> <a href="mailto:uniform@unifab.uk">uniform@unifab.uk</a></p>
                </div>
            </div>
            <!-- end contact block -->
            <!-- start contact block -->
            <div class="col text-center last-paragraph-no-margin md-margin-30px-bottom wow animate__fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="padding-60px-all border-all border-width-1 border-color-medium-gray md-padding-20px-all sm-padding-30px-all">
                    <img src="{{ asset('/assets/images/ind-flag.png') }}" alt="australia" class="margin-30px-bottom md-margin-20px-bottom" data-no-retina="">
                    <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase">India</div>
                    <p>TC 94/2138, RC Junction, Kunnukuzhi<br>Vanchiyoor PO, Trivandrum, Kerala - 695037</p>
                    <p><strong>Phone:</strong> 09122670406<br><strong>Mobile:</strong> 07861726814<br><strong>Email:</strong> <a href="mailto:uniform@unifab.uk">uniform@unifab.uk</a></p>
                </div>
            </div>
            <!-- end contact block -->
        </div>
    </div>
</section>
@endsection