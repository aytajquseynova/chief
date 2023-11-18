@extends('front.layouts.master')
@section('page_title', 'contact page')
@section('content')
<div class="page__link">
    <div class="container">
        <a href="{{route('home')}}" class="back"><img src="{{asset('assets/front/icons/aboutus/back.png')}}" alt=""></a>
        <a href="{{route('home')}}">Home page</a>
        <img src="./assets/icons/aboutus/Vector 175 (Stroke).png" alt="">
        <a class="actived__link" href="{{route('contact')}}">Contact us</a>
    </div>
</div>
<main class="contact ">
    <section class="contactUs contactPage">
        <div class="container">
            <div class="contactUs__wrapper contact__page">
                <div class="contactUs__contacts">
                    <div class="contactUs__contact location">
                        <span>
                            <img src="{{asset('assets/front/icons/contactus/location.png')}}" alt="">
                        </span>
                        <span>quasi architecto beatae vitae dicta sunt
                        </span>
                    </div>
                    <div class="contactUs__contact tel">
                        <span>
                            <img src="{{asset('assets/front/icons/contactus/tel.png')}}" alt="">
                        </span>
                        <a>+994 55 555 55 55
                        </a>
                    </div>
                    <div class="contactUs__contact email">
                        <span>
                            <img src="{{asset('assets/front/icons/contactus/email.png')}}" alt="">
                        </span>
                        <a>randommail@gmail.com
                        </a>
                    </div>
                    <div class="contactUs__contact">
                        <span>
                            <img src="{{asset('assets/front/icons/contactus/watch.png')}}" alt="">
                        </span>
                        <span>Mon. — Fri:
                            08:00 - 17:00
                        </span>
                    </div>
                </div>
                <div class="contactUs__map">
                    <img class="contactpgaemapimg" src="{{asset('assets/front/images/contactus/image 2.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<script src="./script/script.js"></script>
<script>
</script>
@endsection