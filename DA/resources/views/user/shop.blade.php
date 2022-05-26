@extends('index')
@section('content')
<!--=============== SHOP ===============-->
<section class="shop section container">
    <h2 class="breadcrumb__title">Shop Page</h2>
    <h3 class="breadcrumb__subtitle">Trang chủ > <span>Sản phẩm</span></h3>

    <div class="shop__container grid">
        <div class="sidebar">
            <!-- FILTER 1 -->
            <div class="filter__content">
                <h3 class="filter__subtitle">Danh mục sản phẩm</h3>

                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Xe đạp đường phố</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Xe đạp địa hình</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Xe đạp nữ</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Xe đạp trẻ em</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Phụ kiện cho xe đạp</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Phụ kiện cho người đạp xe</p> <span>(13)</span>
                </div>
            </div>
            <!-- FILTER 2 -->
            <div class="filter__content">
                <h3 class="filter__subtitle">Thương hiệu</h3>

                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>giant</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Trix</p> <span>(13)</span>
                </div>
                <div class="filter">
                    <input type="checkbox" name="" id="">
                    <p>Momentum</p> <span>(13)</span>
                </div>
            </div>
            
        </div>

        <div class="shop__items grid">
            <!-- SHOP CONTENT 1 -->
            <div class="shop__content">
                <div class="shop__tag">New</div>
                <img src="{{'public/fe/img/product-1.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Cartoon Jacket</h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
            <!-- SHOP CONTENT 2 -->
            <div class="shop__content">
                <div class="shop__tag">Sale</div>
                <img src="{{'public/fe/img/product-2.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Cartoon </h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
            <!-- SHOP CONTENT 3 -->
            <div class="shop__content">
                <div class="shop__tag">Sale</div>
                <img src="{{'public/fe/img/product-3.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Fur </h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
            <!-- SHOP CONTENT 4 -->
            <div class="shop__content">
                <div class="shop__tag">Sale</div>
                <img src="{{'public/fe/img/product-4.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Fur </h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
            <!-- SHOP CONTENT 5 -->
            <div class="shop__content">
                <div class="shop__tag">Sale</div>
                <img src="{{'public/fe/img/product-5.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Fur </h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
            <!-- SHOP CONTENT 6 -->
            <div class="shop__content">
                <div class="shop__tag">Sale</div>
                <img src="{{'public/fe/img/product-6.png'}}" alt="" class="shop__img">
                <h3 class="shop__title">Fur </h3>
                <span class="shop__subtitle">Accessory</span>

                <div class="shop__prices">
                    <span class="shop__price">$14.99</span>
                    <span class="shop__discounts">$29.99</span>
                </div>

                <a href="details.html" class="button shop__button">
                    <i class="bx bx-cart-alt shop__icon"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="pagination">
        <i class="bx bx-chevron-left pagination__icon"></i>

        <span class="current">1</span>
        <span>2</span>
        <span>3</span>
        <span>&middot;&middot;&middot;</span>
        <span>9</span>
        <i class="bx bx-chevron-right pagination__icon"></i>
    </div>
</section>
@endsection