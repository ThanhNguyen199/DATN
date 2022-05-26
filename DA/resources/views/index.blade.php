<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{asset('public/fe/css/swiper-bundle.min.css')}}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('public/fe/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/fe/css/colors/color-1.css')}}">

    <title>E-Shop</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{URL::to('/')}}" class="nav__logo">
                <i class="bx bxs-shopping-bag nav__logo-icon"> E-Shop</i>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{URL::to('/')}}" class="nav__link">Trang chủ</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{URL::to('/shop')}}" class="nav__link">Sản phẩm</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{URL::to('/about')}}" class="nav__link">Cửa hàng</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{URL::to('/blog')}}" class="nav__link">Tin tức</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <div class="nav__btns">
                <div class="login__toggle" id="login-button">
                    <i class="bx bx-user"></i>
                </div>

                <div class="nav__shop" id="cart-shop">
                    <i class="bx bx-shopping-bag"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--=============== CART ===============-->
    <div class="cart" id="cart">
        <i class="bx bx-x cart__close" id="cart-close"></i>

        <h2 class="cart__title-center">Giỏ hàng</h2>

        <div class="cart__container">
            <!-- <article class="cart__card">
                <div class="cart__box">
                    <img src="{{'public/fe/img/cart-1.png'}}" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Windbeaker</h3>
                    <span class="cart__price">$12</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="{{'public/fe/img/cart-2.png'}}" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Cardigan Hoodi</h3>
                    <span class="cart__price">$11</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="{{'public/fe/img/cart-3.png'}}" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Cartoon</h3>
                    <span class="cart__price">$10</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article> -->
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">0 sản phẩm</span>
            <span class="cart__prices-total">0 vnd</span>
        </div>
    </div>

    <!--=============== LOGIN ===============-->
    <div class="login" id="login">
        <i class="bx bx-x login__close" id="login-close"></i>

        <h2 class="login__title-center">Đăng nhập</h2>

        <form action="" class="login__form grid">
            <div class="login__content">
                <label for="" class="login__label">Tài khoản</label>
                <input type="Tài khoản" class="login__input">
            </div>

            <div class="login__content">
                <label for="" class="login__label">Mật khẩu</label>
                <input type="Mật khẩu" class="login__input">
            </div>

            <div>
                <a href="#" class="button">Đăng nhập</a>
            </div>

            <div>
                <p class="signup">Chưa là thành viên? <a href="registration.html">Đăng ký ngay</a></p>
            </div>
        </form>
    </div>

    <!--=============== MAIN ===============-->
    <main class="main">
        @yield('content')
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <!-- FOOTER CONTENT 1 -->
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="bx bxs-shopping-bags footer__logo-icon"></i> E-Shop
                </a>

                <p class="footer__description">Enjoy the biggest sale <br> of your life.</p>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-youtube"></i></a>
                </div>
            </div>
            <!-- FOOTER CONTENT 2 -->
            <div class="footer__content">
                <h3 class="footer__title">Cửa hàng</h3>

                <ul class="footer__links">
                    <li><a href="" class="footer__link"> Hỗ trợ khách hàng</a></li>
                    <li><a href="" class="footer__link"> Trung tâm hỗ trợ</a></li>
                </ul>
            </div>
            <!-- FOOTER CONTENT 3 -->
            <div class="footer__content">
                <h3 class="footer__title">Chính sách</h3>

                <ul class="footer__links">
                    <li><a href="{{URL::to('/faq')}}" class="footer__link"> Chính sách bán hàng</a></li>
                    <li><a href="" class="footer__link"> Chính sách bảo mật thông tin</a></li>
                    <li><a href="" class="footer__link"> Chính sách giải quyết và khiếu nại</a></li>
                </ul>
            </div>
            <!-- FOOTER CONTENT 4 -->
            <div class="footer__content">
                <h3 class="footer__title">Công ty</h3>

                <ul class="footer__links">
                    <li><a href="" class="footer__link"> Giới thiệu</a></li>
                    <li><a href="" class="footer__link"> Hệ thống cửa hàng</a></li>
                    <li><a href="" class="footer__link"> Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <span class="footer__copy">&#169; Crypticalcoder. All right reserved</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt scroll__icon"></i>
    </a>
    <!--=============== STYLE SWITCHER ===============-->

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('public/fe/js/swiper-bundle.min.js')}}"></script>

    <!--=============== JS ===============-->
    <script src="{{asset('public/fe/js/main.js')}}"></script>
</body>

</html>