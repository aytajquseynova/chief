@extends('front.layouts.master')
@section('page_title', 'about page')
@section('content')
<main>
    <section class="whoAreWe">
        <div class="container">
            <div class="whoAreWe__wrapper">
                <div class="whoAreWe__left">
                    <div class="custom__subtitle">Who are we?</div>
                    <div class="whoAreWe__left__desc custom__text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. <br>
                        <br>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi

                    </div>
                </div>
                <div class="whoAreWe__right">
                    <img src="{{asset('assets/front/images/aboutus/Rectangle 78.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="whatWeDo">
        <div class="container">
            <div class="whatWeDo__wrapper">
                <div class="whatWeDo__left">
                    <img src="{{asset('assets/front/images/aboutus/Rectangle 79.png')}}" alt="">
                </div>
                <div class="whatWeDo__right">
                    <div class="custom__subtitle">What we do?</div>
                    <div class="whatWeDo__right__desc custom__text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        <br>
                        <br>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="history">
    <div class="container">
        <div class="custom__subtitle about__us__custom__subtitle">Our history</div>
        <div class="history__wrapper">
            <div class="history__slider__inner">
                <div class="history__box box__2006">
                    <div class="hr"></div>
                    <div>
                        <div class="history__date">
                            2006
                        </div>
                        <div class="history__desc">
                            <div class="history__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (1).png')}}" alt="">
                            </div>
                            <div class="history__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__box box__sectype">
                    <div class="box__sectype__top">
                        <div class="history__date">
                            2009
                        </div>
                        <div class="box__sectype__top__desc">
                            <div class="box__sectype__top__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (2).png')}}" alt="">
                            </div>
                            <div class="box__sectype__top__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                    <div class="box__sectype__bottom">
                        <div class="hr">
                        </div>
                        <div class="history__date">
                            2011
                        </div>
                        <div class="box__sectype__bottom__desc">
                            <div class="box__sectype__bottom__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (3).png')}}" alt="">
                            </div>
                            <div class="box__sectype__bottom__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__box box__thtype">
                    <div class="box__thtype__top">
                        <div class="history__date">
                            2012
                        </div>
                        <div class="box__thtype__top__desc">
                            <div class="box__thtype__top__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (4).png')}}" alt="">
                            </div>
                            <div class="box__thtype__top__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                    <div class="box__thtype__bottom">
                        <div class="hr"></div>
                        <div class="history__date">
                            2014
                        </div>
                        <div class="box__thtype__bottom__desc">
                            <div class="box__thtype__bottom__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (4).png')}}" alt="">
                            </div>
                            <div class="box__thtype__bottom__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__box box__sectype">
                    <div class="box__sectype__top">
                        <div class="history__date">
                            2017
                        </div>
                        <div class="box__sectype__top__desc">
                            <div class="box__sectype__top__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (2).png')}}" alt="">
                            </div>
                            <div class="box__sectype__top__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                    <div class="box__sectype__bottom">
                        <div class="hr">

                        </div>
                        <div class="history__date">
                            2019
                        </div>
                        <div class="box__sectype__bottom__desc">
                            <div class="box__sectype__bottom__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (3).png')}}" alt="">
                            </div>
                            <div class="box__sectype__bottom__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__box box__thtype">
                    <div class="box__thtype__top">
                        <div class="history__date">
                            2021
                        </div>
                        <div class="box__thtype__top__desc">
                            <div class="box__thtype__top__desc__img">
                                <img src="{{asset('assets/front/images/aboutus/Rectangle 67 (4).png')}}" alt="">
                            </div>
                            <div class="box__thtype__top__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                    <div class="box__thtype__bottom">
                        <div class="hr"></div>
                        <div class="history__date">
                            2022
                        </div>
                        <div class="box__thtype__bottom__desc">
                            <div class="box__thtype__bottom__desc__img">
                                <img src="./assets/images/aboutus/Rectangle 67 (4).png" alt="">
                            </div>
                            <div class="box__thtype__bottom__desc__body custom__text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="./script/script.js"></script>
<script src="./script/slider.js"></script>
<script>
    if (window.innerWidth < 468) {
        document.querySelector(".whoAreWe__right img").src = "{{asset('assets/front/images/aboutus/mini.png')}}";
        document.querySelector(".whatWeDo__left img").src = "{{asset('assets/front/images/aboutus/mini2.png')}}";
    }
    historySlider(".history__slider__inner")
</script>

@endsection