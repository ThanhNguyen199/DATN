@extends('index')
@section('content')
<!--=============== CONTACT US ===============-->
<section class="contact section container">
    <h2 class="breadcrumb__title">Contact Page</h2>
    <h3 class="breadcrumb__subtitle">Home > <span>Contact Us</span></h3>

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