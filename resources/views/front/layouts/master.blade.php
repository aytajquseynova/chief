<!DOCTYPE html>
<html lang="en">

@include('front.layouts.head')

<body>
    <div class="up">
        <img src="{{asset('assets/front/icons/footer/up.png')}}" alt="">
    </div>

    <x-front-header-component/>
    @yield('content')
   <x-front-footer-component/>
@include('front.layouts.foot')