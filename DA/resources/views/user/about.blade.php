@extends('index')
@section('content')
<!--=============== ABOUT ===============-->
<section class="about section container">
    <h2 class="breadcrumb__title">Cửa hàng</h2>
    <h3 class="breadcrumb__subtitle"></h3>

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
<section class="contact section container">
    <h2 class="breadcrumb__title">Liên hệ với chúng tôi</h2>
    <h3 class="breadcrumb__subtitle"></h3>

    <div class="contact__container grid">
        <div>
            <div class="contact__information">
                <i class="bx bx-phone contact__icon"></i>
                <div>
                    <h3 class="contact__title">Call Me</h3>
                    <span class="contact__subtitle">123-456-7890</span>
                </div>
            </div>

            <div class="contact__information">
                <i class="bx bx-envelope contact__icon"></i>
                <div>
                    <h3 class="contact__title">Email</h3>
                    <span class="contact__subtitle">coder@gmail.com</span>
                </div>
            </div>

            <div class="contact__information">
                <i class="bx bx-map contact__icon"></i>
                <div>
                    <h3 class="contact__title">Location</h3>
                    <span class="contact__subtitle">450 Lê Văn Việt</span>
                </div>
            </div>
        </div>

        <form action="#" class="contact__form grid">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="" class="contact__label">Name</label>
                    <input type="text" class="contact__input">
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Email</label>
                    <input type="email" class="contact__input">
                </div>
            </div>

            <div class="contact__content">
                <label for="" class="contact__label">Subject</label>
                <input type="email" class="contact__input">
            </div>

            <div class="contact__content">
                <label for="" class="contact__label">Message</label>
                <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
            </div>

            <div>
                <a href="#" class="button">Send Message</a>
            </div>
        </form>
    </div>
</section>
@endsection