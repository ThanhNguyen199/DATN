@extends('index')
@section('content')
<!--=============== HOME ===============-->
<section class="home container">
    <div class="swiper home-swiper">
        <div class="swiper-wrapper">
            <!-- Home swiper 1-->
            <section class="swiper-slide">
                <div class="home__content grid">
                    <div class="home__group">
                        <img src="{{'public/fe/img/slide-2.png'}}" alt="" class="home__img">
                        <div class="home__indicator"></div>

                        <div class="home__details-img">
                            <h4 class="home__details-title">The "Cardigan"</h4>
                            <span class="home__details-subtitle">Woolen</span>
                        </div>
                    </div>

                    <div class="home__data">
                        <h3 class="home__Subtitle">#1 TRENDING ITEM</h3>
                        <h1 class="home__title">ORIGINAL <br> IS NEVER <br> FINISHED</h1>
                        <p class="home__description">This is a place of hope, meaning and purpose. Visit and become a part of some thing bigger - a movement that is chaging lives.</p>

                        <div class="home__buttons">
                            <a href="details.html" class="button">Buy now</a>
                            <a href="details.html" class="button--link button--flex">View Details <i class="bx bx-right-arrow-alt button-icon"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Home swiper 2-->
            <section class="swiper-slide">
                <div class="home__content grid">
                    <div class="home__group">
                        <img src="{{'public/fe/img/slide-3.png'}}" alt="" class="home__img">
                        <div class="home__indicator"></div>

                        <div class="home__details-img">
                            <h4 class="home__details-title">Jqqueezy</h4>
                            <span class="home__details-subtitle">Ski suit</span>
                        </div>
                    </div>

                    <div class="home__data">
                        <h3 class="home__Subtitle">#2 top Best duo</h3>
                        <h1 class="home__title">FALL <br> WINTER <br> 2022</h1>
                        <p class="home__description">This is a place of hope, meaning and purpose. Visit and become a part of some thing bigger - a movement that is chaging lives.</p>

                        <div class="home__buttons">
                            <a href="details.html" class="button">Buy now</a>
                            <a href="details.html" class="button--link button--flex">View Details <i class="bx bx-right-arrow-alt button-icon"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Home swiper 3-->
            <section class="swiper-slide">
                <div class="home__content grid">
                    <div class="home__group">
                        <img src="{{'public/fe/img/slide-1.png'}}" alt="" class="home__img">
                        <div class="home__indicator"></div>

                        <div class="home__details-img">
                            <h4 class="home__details-title">Jqqueezy</h4>
                            <span class="home__details-subtitle">Ski suit</span>
                        </div>
                    </div>

                    <div class="home__data">
                        <h3 class="home__Subtitle">#3 top Best duo</h3>
                        <h1 class="home__title">FALL <br> WINTER <br> 2022</h1>
                        <p class="home__description">This is a place of hope, meaning and purpose. Visit and become a part of some thing bigger - a movement that is chaging lives.</p>

                        <div class="home__buttons">
                            <a href="details.html" class="button">Buy now</a>
                            <a href="details.html" class="button--link button--flex">View Details <i class="bx bx-right-arrow-alt button-icon"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!--=============== DISCOUNT ===============-->
<section class="discount section">
    <div class="discount__container container grid">
        <img src="{{'public/fe/img/discount.png'}}" alt="" class="discount__img">

        <div class="discount__data">
            <h2 class="discount__title">50% Discount <br> On New Products</h2>
            <a href="#" class="button">Go to new</a>
        </div>
    </div>


</section>

<!--=============== NEW ARRIVALS ===============-->
<section class="new section">
    <h2 class="section__title">New Arrivals</h2>

    <div class="new__container container">
        <div class="swiper new-swiper">
            <div class="swiper-wrapper">
                <!-- NEW CONTENT 1-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-1.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Windbreadker</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">14.99$</span>
                        <span class="new__discount">29.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
                <!-- NEW CONTENT 2-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-2.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Air Jordan Zipper</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">11.99$</span>
                        <span class="new__discount">21.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
                <!-- NEW CONTENT 3-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-3.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Jacket</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">4.99$</span>
                        <span class="new__discount">9.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
                <!-- NEW CONTENT 4-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-4.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Windbreadker</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">14.99$</span>
                        <span class="new__discount">29.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
                <!-- NEW CONTENT 5-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-5.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Windbreadker</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">14.99$</span>
                        <span class="new__discount">29.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
                <!-- NEW CONTENT 6-->
                <div class="new__content swiper-slide">
                    <div class="new__tag">New</div>
                    <img src="{{'public/fe/img/new-6.png'}}" alt="" class="new__img">
                    <h3 class="new__title">Windbreadker</h3>
                    <span class="new__subtitle">Accessory</span>

                    <div class="new__price">
                        <span class="new__price">14.99$</span>
                        <span class="new__discount">29.99$</span>
                    </div>

                    <a href="details.html" class="button new__button">
                        <i class="bx bx-cart-alt new__icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=============== STEPS ===============-->
<section class="steps section container">
    <div class="steps__bg">
        <h2 class="section__title">How to order product <br> from E-shop</h2>

        <div class="steps__container grid">
            <!-- STEP CARD 1 -->
            <div class="steps__card">
                <div class="steps__card-number">01</div>
                <h3 class="steps__card-title">Choose Products</h3>
                <p class="step__card-description">
                    We have several varieties products you can choose from.
                </p>
            </div>
            <!-- STEP CARD 2 -->
            <div class="steps__card">
                <div class="steps__card-number">02</div>
                <h3 class="steps__card-title">Place an order</h3>
                <p class="step__card-description">
                    Once your order is set, we move to the next step which is the shipping.
                </p>
            </div>
            <!-- STEP CARD 3 -->
            <div class="steps__card">
                <div class="steps__card-number">03</div>
                <h3 class="steps__card-title">Get order delivered</h3>
                <p class="step__card-description">
                    Our delivery process it easy, you receive the order direct to your home.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection