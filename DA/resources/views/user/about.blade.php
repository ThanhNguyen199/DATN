@extends('index')
@section('content')
<!--=============== ABOUT ===============-->
<section class="about section container">
    <h2 class="breadcrumb__title">About Page</h2>
    <h3 class="breadcrumb__subtitle">Home > <span>About Us</span></h3>

    <div class="about__container grid">
        <img src="{{'public/fe/img/about-img.jpg'}}" alt="" class="about__img">

        <div class="about__data">
            <h2 class="section__title about__title">
                Who we really are & <br> why choose us
            </h2>

            <p class="about__description">
                We have over 4000+ unbiased review and our customers trust our products and deivery srvice everytime
            </p>
            <div class="about__details">
                <p class="about__details-descroption">
                    <i class="bx bxs-check-square about__details-icon"></i>
                    We always deliver on time
                </p>
                <p class="about__details-descroption">
                    <i class="bx bxs-check-square about__details-icon"></i>
                    We give yeu guides to protect and care for your product
                </p>
                <p class="about__details-descroption">
                    <i class="bx bxs-check-square about__details-icon"></i>
                    100% money back guaranted
                </p>
            </div>
        </div>
    </div>
</section>
@endsection