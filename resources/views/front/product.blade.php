@extends('front.layouts.master')
@section('page_title', 'product')
@section('content')
    <div class="product">
        <div class="container">
            <div class="product__wrapper">
                <div class="product__desc">
                    <h4 class="custom__subtitle">Lorem ipsum</h4>
                    <div class="product__desc__desc custom__text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        <br>
                        <br>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Sed ut
                        perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    </div>
                </div>
                <div class="product__image">
                    <img src="{{asset('assets/front/images/products/Frame.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
 
    <script src="./script/script.js"></script>
