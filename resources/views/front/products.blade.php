@extends('front.layouts.master')
@section('page_title', 'products')
@section('content')
<section class="products pageProd">
    <div class="container">
        <div class="products__wrapper">
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p1.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p3.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p4.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p1.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p4.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p3.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p4.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="{{route('product')}}" class="products__item">
                <img src="{{asset('assets/front/images/products/p1.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
        </div>
    </div>
    <div class="mini__link">load more</div>
</section>
@endsection
<script src="./script/script.js"></script>