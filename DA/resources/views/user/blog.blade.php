@extends('index')
@section('content')
<!--=============== BLOG ===============-->
<section class="blog section container">
    <h2 class="breadcrumb__title">Tin tức</h2>
    <h3 class="breadcrumb__subtitle">Trang chủ > <span>Tin tức</span></h3>

    <div class="blog__container grid">
        <div class="blog__post grid">
            <img src="{{'public/fe/img/blog-1.webp'}}" alt="" class="blog__img">

            <div class="blog__info">
                <p class="blog__details"> abc</p>
                <h3 class="blog__title">From Now We Are Certified Web</h3>
                <p class="blog__date">By admin / Jan 12, 2022 /</p>
                <div class="read__more">
                    <a href="#" class="button--link">Read more <i class="bx bx-right-arrow-alt button__icon"></i></a>
                </div>
            </div>
        </div>

        <div class="blog__post grid">
            <img src="{{'public/fe/img/blog-2.webp'}}" alt="" class="blog__img">

            <div class="blog__info">
                <p class="blog__details"> abc</p>
                <h3 class="blog__title">From Now We Are Certified Web</h3>
                <p class="blog__date">By admin / Jan 12, 2022 /</p>
                <div class="read__more">
                    <a href="#" class="button--link">Read more <i class="bx bx-right-arrow-alt button__icon"></i></a>
                </div>
            </div>
        </div>

        <div class="blog__post grid">
            <img src="{{'public/fe/img/blog-1.webp'}}" alt="" class="blog__img">

            <div class="blog__info">
                <p class="blog__details"> abc</p>
                <h3 class="blog__title">From Now We Are Certified Web</h3>
                <p class="blog__date">By admin / Jan 12, 2022 /</p>
                <div class="read__more">
                    <a href="#" class="button--link">Read more <i class="bx bx-right-arrow-alt button__icon"></i></a>
                </div>
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