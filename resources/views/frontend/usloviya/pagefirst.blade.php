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
                <h1 class="page__top-panel__title">КОНЦЕПТУАЛЬНЫЕ И ЭСКИЗНЫЕ ПРОЕКТЫ</h1>
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
                        <small>КОНЦЕПТУАЛЬНЫЕ И ЭСКИЗНЫЕ ПРОЕКТЫ</small>
                    </h2>
                    <ul class="divisions changed">
                        <li>
                            <div class="divisions__item">
                                <div class="divisions__photo first-animation"
                                    style="background-image: url({{asset('assets/images/about_kompani/123.png')}})"></div>
                                <div class="divisions__description second-animation">
                                    <span class="divisions__text">- сбор исходных данных для
                                        проектирования</span>
                                    <span class="divisions__text">- схема генерального плана в масштабе 1:500 с
                                        подъездными путями</span>
                                    <span class="divisions__text">- поэтажные планы помещений с указанием
                                        потоков
                                        персонала и материалов с
                                        габаритными размерами и площадями помещений</span>
                                    <span class="divisions__text">- разработка планов помещений с размещением
                                        основного и вспомогательного
                                        оборудования</span>
                                </div>
                            </div>
                        </li>
                        <li class="text-right">
                            <div class="divisions__item">
                                <div class="divisions__description first-animation">
                                    <span class="divisions__text">- чертежи фасадов с высотными отметками,
                                        демонстрирующие фронтальные изображения дома с каждой из сторон</span>
                                    <span class="divisions__text">- разрезы объекта в характерных зонах</span>
                                    <span class="divisions__text">- план кровли</span>
                                    <span class="divisions__text">- 3D визуализация</span>
                                </div>
                                <div class="divisions__photo second-animation"
                                    style="background-image: url({{asset('assets/images/jamoa/rsz_001.jpg')}})"></div>
                            </div>
                        </li>
                        <li>
                            <div class="divisions__item">
                                <div class="divisions__photo first-animation"
                                    style="background-image: url({{asset('assets/2019-2020/gostglobus/eksterer/025_rsz.jpg')}})">

                                </div>
                                <div class="divisions__description second-animation">
                                    <span class="divisions__text">- пояснительная записка</span>
                                    <span class="divisions__text">- изучение технических условий, определяющих
                                        параметров и требований к будущему строительству</span>
                                    <span class="divisions__text">- принципиальные технологические схемы</span>
                                    <span class="divisions__text">- принципиальная схема инженерное
                                        подготовки</span>

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
                                    style="background-image: url({{asset('assets/2018-2019/rekAlisherN/MU\ 06\ \(2\).jpg')}})">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

@endsection