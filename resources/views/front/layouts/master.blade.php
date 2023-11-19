<!DOCTYPE html>
<html lang="en">

@include('front.layouts.head')
 <!-- <style>
        .header {
            background-image: url('{{ asset("assets/front/images/header/Frame 1.png") }}');
        }
    </style> -->
<body>
   
    <div class="up">
        <img src="{{asset('assets/front/icons/footer/up.png')}}" alt="">
    </div>

    <x-front-header-component />
    @yield('content')
    <x-front-footer-component />
    @include('front.layouts.foot')