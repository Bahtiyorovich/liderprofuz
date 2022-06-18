@extends('layouts.index')
@section('content')
<div class="media-icons position-absolute	">


    <a href="https://www.facebook.com/OOOLiderProfProekt/"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="https://t.me/lider_prof"><i class="fab fa-telegram"></i></a>


</div>
<div class="wordss-anim">
    <p id="typedtext">
        <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
    </p>

</div>
<div class="page__top-panel">
    <div class="page__top-panel__photo" style="background-image: url(assets/img/src/promo3.jpg)"></div>
    <video autoplay loop muted playsinline webkit-playsinline poster="assets/img/src/promo3.jpg"
        preload="none" src="{{asset('assets/mov/mov5.mp4')}}"></video>
    <div class="container">
        <div class="page__top-panel__in">
            <h1 class="page__top-panel__title">ТЕХНИЧЕСКОЕ И ИНСТРУМЕНТАЛЬНОЕ ИССЛЕДОВАНИЕ СТРОИТЕЛЬНЫХ
                КОНСТРУКЦИИ
                ЗДАНИЙ И СООРУЖЕНИЙ
            </h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Главная</a><i>/</i>
                    </li>
                    <li>
                        <span>Условия Компании</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section__in">
            <div class="section__content">
                <h2 class="sm-gl-title first-animation">
                    <span>01</span>
                    <small>ТЕХНИЧЕСКОЕ И ИНСТРУМЕНТАЛЬНОЕ ИССЛЕДОВАНИЕ СТРОИТЕЛЬНЫХ КОНСТРУКЦИИ
                        ЗДАНИЙ И СООРУЖЕНИЙ
                    </small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/soderjanie-zdaniy.png')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">- изучение существующей технической состояние
                                </span>
                                <span class="divisions__text"> - проведение контрольных обмерных работ
                                    конструкций и объемно-планировочных структур
                                </span>
                                <span class="divisions__text"> - визуальное инструментальное обследование
                                    основных несущих и самонесущих строительных конструкций, в том числе
                                    путем вскрытия
                                </span>


                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">- проведение неразрушающих методов испытаний
                                    фактической прочности материалов отдельных строительных конструкций

                                </span>
                                <span class="divisions__text"> - статическую обработку результатов
                                    измерений</span>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/trenejorniyzal/009_rsz.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/vestibyul/2rsz.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">- проведение натурных лабораторных
                                    инструментальных обследований,
                                    обработка и анализ полученных результатов, составление заключения и
                                    рекомендаций,
                                    составление отчетов;
                                </span>
                                <span class="divisions__text"> -Расчетно-графическая и пояснительная записка
                                    с отчетными данными для дальнейшего использование здание и сооружение с
                                    рекомендациями;
                                </span>

                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">- разработка краткой пояснительной записки
                                    с описанием основных проектных решений</span>
                                <span class="divisions__text">- предварительный график выполнения
                                    работ</span>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/151.jpg')}})">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

@endsection