@extends('layouts.index')

@section('content')
<style>
    .media-icons {

        background-color: rgb(1, 1, 1);
        height: 33.5%;
        width: 64px;
        /* border: 2px solid rgb(250, 0, 0); */
        z-index: 888;
        position: fixed !important;
        /* right: 2px; */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.5s ease;
        -webkit-transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        -ms-transition: 0.5s ease;
        -o-transition: 0.5s ease;
        margin-top: 430px;
        left: 0;
        vertical-align: middle;
        position: fixed !important;
    }

    .media-icons a {
        color: rgb(255, 255, 255);
        font-size: 1.6em;
        transition: 0.3s ease;
        -webkit-transition: 0.3s ease;
        -moz-transition: 0.3s ease;
        -ms-transition: 0.3s ease;
        -o-transition: 0.3s ease;
    }

    .media-icons a:not(:last-child) {
        margin-bottom: 20px;
    }

    .media-icons a:hover {
        transform: scale(1.3);
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        -ms-transform: scale(1.3);
        -o-transform: scale(1.3);
    }

    .wordss-anim {
        position: fixed;
        height: 20%;
        top: 100px;
        text-align: center;
        justify-content: center;
        align-items: center;
        z-index: 888;
        /* position: fixed; */

        left: 0;
        margin-top: 140px;
        transition: 0.5s ease;
        -webkit-transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        -ms-transition: 0.5s ease;
        -o-transition: 0.5s ease;
        width: 10%;
        vertical-align: middle;
    }

    .colmns {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        justify-self: start;
    }

    .wordss-anim p {
        margin-top: 15px;
        padding: 7px 5px;
        /*height: 90px;
    */
        background-color: rgb(0, 0, 0);
        /* width: 430px;
    height: 60px; */
        width: 400px;
        margin-top: 220px !important;
        height: 64px;
        color: rgb(255, 255, 255);
        transform: rotate(-90deg) scaleX(1);
        transform-origin: top left;
        -webkit-transform: rotate(-90deg) scaleX(1);
        -moz-transform: rotate(-90deg) scaleX(1);
        -ms-transform: rotate(-90deg) scaleX(1);
        -o-transform: rotate(-90deg) scaleX(1);
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-family: "Roboto", sans-serif;
        /* position: fixed; */
    }

    .circle-icon {
        background: #000000;
        padding: 12px;
        border-radius: 50%;
    }

    .navbar-brand img {
        filter: brightness(100%) !important;
    }

    @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1410px;
            height: 100%;
        }
    }

    @media (min-width:1201px) and (max-width: 2300px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1710px;
            height: 100%;
        }
    }

    h4.logo_visual {
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Patua One', cursive; */
        /* padding: 6px 0; */
        /* margin-top: 10px; */
        margin: 5px 0 !important;
        color: white;
        /* font-size: 45px; */
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 500;
    }

    .navbar-expand-md .navbar-collapse {
        font-family: 'Josefin Sans', sans-serif;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;

    }


    .divisions__text {

        color: #ffffff;
    }

    .divisions__photo:after {
        background: #ffffff;
    }

    .divisions__description p {
        align-items: start !important;
    }

    @media (min-width:600px) and (max-width:1000px) {
        .page__top-panel__title {
            font-size: 17px;
        }
    }

    @media (min-width:1001px) and (max-width:2400px) {
        .page__top-panel__title {
            font-size: 30px;
        }
    }

    a.butn1 {
        position: relative;
        display: inline-block;
        padding: 25px 30px;
        margin: 40px 0;
        color: #03e9f4;
        text-decoration: none;
        /* text-transform: uppercase; */
        transition: 0.5s;
        /* letter-spacing: 4px; */
        overflow: hidden;
        margin-right: 50px;
    }

    a.butn1 span {
        position: absolute;
        display: block;
    }

    a.butn1 span:nth-child(1) {
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #ffffff);
        animation: animate1 1s linear infinite;
    }

    @keyframes animate1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    a.butn1 span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #ffffff);
        animation: animate2 1s linear infinite;
        animation-delay: 0.25s;
    }

    @keyframes animate2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    a.butn1 span:nth-child(3) {
        bottom: 0;
        right: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(270deg, transparent, #ffffff);
        animation: animate3 1s linear infinite;
        animation-delay: 0.5s;
    }

    @keyframes animate3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    a.butn1 span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #ffffff);
        animation: animate4 1s linear infinite;
        animation-delay: 0.75s;
    }

    @keyframes animate4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

    a.butn1:hover {
        box-shadow: 1px 1px 25px 10px rgba(146, 148, 248, 0.4);
        cursor: pointer !important;
        color: rgb(255, 13, 13);
    }
</style>
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
            <h1 class="page__top-panel__title"> Из жизни компании
            </h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Главная</a><i>/</i>
                    </li>
                    <li>
                        <span>Из жизни компании</span>
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
                    <small>Бухгалтерский Отдел</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/jamoa/tabrik.jpg')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">Lider Prof Proekt</span>
                                <span class="gl-title">Награждения</span>
                                <p>Забавные награды, которые коллеги присуждают друг другу — это простой, но
                                    эффективный способ заставить их смеяться и
                                    чувствовать себя ценными.
                                    Накануне нового 2020 года состоялась церемония награждения.
                                </p>


                                <a class="butn1 animate__animated animate__backInUp"
                                    href="{{ route('large') }}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </li>
                    <h2 class="sm-gl-title first-animation">
                        <span>02</span>
                        <small>Дизайнерский отдел</small>
                    </h2>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">

                                <span class="divisions__text">Lider Prof Proekt</span>
                                <span class="gl-title">Лучший дизайнер года</span>


                                <p class="p_for_desc">
                                    Дизайнер, который больше всего участвовал в 2020 году со своими
                                    проектами и создавал собственные творческие проекты.


                                </p>
                                <a class="butn1 animate__animated animate__backInUp"
                                    href="{{ route('large') }}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Узнать больше
                                </a>


                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/nagrajdenya/9.JPG')}})"></div>
                        </div>
                    </li>
                    <h2 class="sm-gl-title first-animation">
                        <span>03</span>
                        <small>Архитектурный отдел</small>
                    </h2>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/nagrajdenya/5.JPG')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">Lider Prof Proekt</span>
                                <span class="gl-title">Лучший Архитектор Года</span>
                                <p>Забавные награды, которые коллеги присуждают друг другу — это простой, но
                                    эффективный способ заставить их смеяться и
                                    чувствовать себя ценными.
                                    Накануне нового 2020 года состоялась церемония награждения.
                                </p>


                                <a class="butn1 animate__animated animate__backInUp"
                                    href="{{ route('large') }}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
                <span class="gl-title text-center indent-bt-big first-animation">Отрывки из праздничного
                    мероприятия команды Lider Prof Proekt.</span>
                <div class="gl-player third-animation">
                    <video controls poster="images/nagrajdenya/7.JPG" preload="none"
                        src="{{asset('assets/images/nagrajdenya/taqdirlashVideo.mp4')}}"></video>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection