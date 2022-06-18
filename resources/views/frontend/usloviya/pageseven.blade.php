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
            <h1 class="page__top-panel__title"> СОПРОВОЖДЕНИЕ ЗАКУПОЧНОЙ ДЕЯТЕЛЬНОСТИ, СТРОИТЕЛЬНО-МОНТАЖНЫХ
                РАБОТ,
                ПУСКОНАЛАДОЧНЫХ РАБОТ
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
                    <small>СОПРОВОЖДЕНИЕ ЗАКУПОЧНОЙ ДЕЯТЕЛЬНОСТИ, СТРОИТЕЛЬНО-МОНТАЖНЫХ РАБОТ,
                        ПУСКОНАЛАДОЧНЫХ РАБОТ</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/7.jpg')}})"></div>
                            <div class="divisions__description second-animation"
                                style="text-align: start !important;">
                                <span class="divisions__text"> • Техническая поддержка поставок
                                </span>
                                <span class="divisions__text">
                                    • Оценка предложений поставщиков
                                </span>
                                <span class="divisions__text">
                                    • Оценка документации поставщиков
                                </span>




                            </div>
                        </div>
                    </li>
                    <h2 class="sm-gl-title first-animation">
                        <span>02</span>
                        <small>- СОПРОВОЖДЕНИЕ СТРОИТЕЛЬСТВА</small>
                    </h2>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text"> Строительный контроль и надзор за качеством
                                    строительства

                                </span>
                                <span class="divisions__text"> Авторский надзор
                                </span>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/avtorskii-nadzor.jpg')}})"></div>
                        </div>
                    </li>
                    <h2 class="sm-gl-title first-animation">
                        <span>03</span>
                        <small>- ЗАЧЕМ С НАМИ СОТРУДНИЧЕСТВА:</small>
                    </h2>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/preview.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ЗАЧЕМ С НАМИ СОТРУДНИЧЕСТВА
                                </span>
                                <p class="p_for_desc">
                                    <br> Высококвалифицированные специалисты по всем разделам
                                    проектирования;
                                    <br> Консультация с клиентами в начале проектирование;
                                    <br> Сократить расходы на проектирование;
                                    <br> Оперативно решать возникающие при проектировании вопросы;
                                    <br> Получить проектные решения, основанные на имеющемся многолетнем
                                    опыте проектирования;
                                    <br> Создавать условия для комплексного решения задач на современном
                                    уровне;
                                    <br> Доступные цены (форма оплата любая);
                                    <br> Согласование по всеми надлежащими инстанциями;
                                    <br> Услуги лицензированы;
                                    <br> Сопровождение строительство и авторский надзор;


                                </p>

                            </div>
                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </div>
</section>

@endsection