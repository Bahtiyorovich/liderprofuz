<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('assets/mov/logo123.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/style.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="//code-ya.jivosite.com/widget/xT7ZobudPG" async></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">


    <!-- Usluga -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">


    <!-- dawdaw -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">


    <title>Lider Prof Proekt</title>
    <style>
        .phones {
            display: flex;
            flex-direction: column;

        }

        .circle-icon {
            background: #000000;
            padding: 12px;
            border-radius: 50%;
        }

        .logo_visual {
            /* font-family: 'Acme', sans-serif; */
            /* font-family: 'Patua One', cursive; */
            padding: 6px 0;
            margin-top: 10px;
            color: white;

            font-family: 'Josefin Sans', sans-serif;
            font-weight: 500;
        }

        .home .content p {
            font-family: 'M PLUS Rounded 1c', sans-serif !important;
            font-weight: 400;
            letter-spacing: 8px !important;
            color: #ffffffb5 !important;
        }
        .home .content a{
            font-family: 'Acme', sans-serif !important;
            font-weight: 520;
            background: #ffffff38;
        }




        .home .media-icons {
            background-color: #ffffff38 !important;
            height: 248px;
            width: 45px;

            margin-top: 97px;

        }
        .slider-navigation .nav-btn {
            width: 12px;
            height: 12px;
            background-color: #cbcbcb70 !important;
            border: 0px  solid #ededed !important;
            /* border-radius: 50%; */
            /* border: 1px solid red;} */
        }


        .slider-navigation .nav-btn.active{
            background: #ffffff !important;
        }
        .home .content h1{
            color: white !important;
            font-family: 'Josefin Sans', sans-serif !important;
        }

        #usl a{
            text-transform: capitalize !important;
        }
    </style>
    <script>
        function myFunction() {
            var myWindow = window.open("http://liderprof.uz/ru", "", "width=350,height=600");
        }
    </script>
</head>

<body>

    <!-- <div id="preloader" class="hidden" onload="myFunction"></div> -->
    <div class="navigation-wrap bg-dark1 start-header start-style">
        <div class="container-fluid pl-5 pr-5 ">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-dark">


                        <a class="navbar-brand ml-5" href="{{ route('index') }}" target="_blank">
                            <h4 class="logo_visual">LIDER PROF PROEKT</h4>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0 align-items-center">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('index') }}" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        @if(\App::isLocale('ru'))
                                            Главная
                                        @endif
                                        @if(\App::isLocale('en'))
                                            Home
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('portfolio') }}" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        @if(\App::isLocale('ru'))
                                            Портфолио
                                        @endif
                                        @if(\App::isLocale('en'))
                                            Portfolio
                                        @endif

                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Индивидуальные жилые дома и комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Individual residential buildings and complexes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Многоэтажные жилые здания и общежития
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Multi-storey residential buildings and dormitories
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Административные и офисные здание, </br> общественные здание и сооружение
                                            @endif
                                            @if(\App::isLocale('en'))
												Administrative and office buildings, </br> public buildings and structures
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Дошкольные образовательные учреждения
                                            @endif
                                            @if(\App::isLocale('en'))
												Preschool educational institutions
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Общеобразовательные школы, академические лицеи и профессиональные колледжи
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Secondary schools, academic lyceums and vocational colleges
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Высшие образовательные учреждения
                                            @endif
                                            @if(\App::isLocale('en'))
												Higher educational institutions
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Научно-исследовательские академические центры
                                            @endif
                                            @if(\App::isLocale('en'))
												Academic research centers
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Банки и биржи, бизнес-центры
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Banks and exchanges, business centers
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Гостиничные комплексы, отели
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Hotel complexes, hotels
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
                                                Физкультурно-оздоровительные комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Sports and recreation complexes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Производственные комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
												Production complexes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Здания и сооружения культурно-бытового назначения
                                            @endif
                                            @if(\App::isLocale('en'))
												Buildings and structures for cultural and household purposes
                                            @endif

                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Рестораны, кафе и бары
                                            @endif
                                            @if(\App::isLocale('en'))
												Restaurants, cafes and bars
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Благоустройство и озеленение территорий
                                            @endif
                                            @if(\App::isLocale('en'))
												Landscaping and landscaping of territories
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('portfolio') }}">
                                            @if(\App::isLocale('ru'))
												Дома отдыха и туристические комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
												Holiday homes and tourist complexes
                                            @endif
                                        </a>
                                    </div>
                                </li>

                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        @if(\App::isLocale('ru'))
                                            О Нас
                                        @endif
                                        @if(\App::isLocale('en'))
                                            About Us
                                        @endif
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            @if(\App::isLocale('ru'))
                                                Наша компания
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Our company
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('litsenziya') }}">
                                            @if(\App::isLocale('ru'))
                                                Лицензии
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Licenses
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('ourteam') }}">
                                            @if(\App::isLocale('ru'))
                                                Сотрудники
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Staff
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('company') }}">
                                            @if(\App::isLocale('ru'))
                                                Из жизни компании
                                            @endif
                                            @if(\App::isLocale('en'))
                                                From the life of the company
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('vakansiya') }}">
                                            @if(\App::isLocale('ru'))
                                                Bакансии
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Job openings
                                            @endif
                                        </a>
                                    </div>
                                </li>

                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        @if(\App::isLocale('ru'))
                                            Наш Услуги
                                        @endif
                                        @if(\App::isLocale('en'))
                                            Our Services
                                        @endif
                                    </a>
                                    <div class="dropdown-menu" id="usl">
                                        <a class="dropdown-item" href="{{ route('conceptual') }}">
                                        @if(\App::isLocale('ru'))
                                            КОНЦЕПТУАЛЬНЫЕ И ЭСКИЗНЫЕ ПРОЕКТЫ
                                        @endif
                                        @if(\App::isLocale('en'))
                                            CONCEPTUAL AND SKETCH PROJECTS
                                        @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('design_work') }}">
                                        @if(\App::isLocale('ru'))
                                            ДИЗАЙНЕРСКИЙ РАБОТЫ (ИНТЕРЬЕРНЫЕ <br> И ЭКСТЕРЬЕРНЫЕ РЕШЕНИЕ)
                                        @endif
                                        @if(\App::isLocale('en'))
                                            DESIGN WORK (INTERIOR <br> AND EXTERIOR SOLUTIONS)
                                        @endif
                                        </a>
                                        <a class="dropdown-item" href="{{route('landscape_design')}}">
                                        @if(\App::isLocale('ru'))
                                            ЛАНДШАФТНЫЙ ДИЗАЙН
                                        @endif
                                        @if(\App::isLocale('en'))
                                            LANDSCAPE DESIGN
                                        @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('technical') }}">
                                        @if(\App::isLocale('ru'))
                                            ТЕХНИЧЕСКОЕ И ИНСТРУМЕНТАЛЬНОЕ ИССЛЕДОВАНИЕ <br>
                                            СТРОИТЕЛЬНЫХ КОНСТРУКЦИЙ ЗДАНИЙ И СООРУЖЕНИЙ
                                        @endif
                                        @if(\App::isLocale('en'))
                                            TECHNICAL AND INSTRUMENTAL RESEARCH OF <br>
                                            BUILDING STRUCTURES OF BUILDINGS AND STRUCTURES
                                        @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('designing') }}">
                                            @if(\App::isLocale('ru'))
                                                Проектирование
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Designing
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="{{ route('design_of_main') }}">
                                        @if(\App::isLocale('ru'))
                                        ПРОЕКТИРОВАНИЕ МАГИСТРАЛЬНЫХ ИНЖЕНЕРНЫХ СЕТЕЙ<br>
                                        (ИСКЛЮЧАЯ МАГИСТРАЛЬНЫЕ ГАЗОПРОВОДЫ,<br>
                                         НЕФТЕПРОВОДЫ И НЕФТЕПРОДУКТОПРОВОДЫ).<br>
                                        ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ
                                        @endif
                                        @if(\App::isLocale('en'))
                                        DESIGN OF MAIN ENGINEERING NETWORKS <br>
                                        (EXCLUDING MAIN GAS PIPELINES, <br>
                                        OIL PIPELINES AND OIL PRODUCT PIPELINES).<br>
                                        ROAD DESIGN
                                        @endif

                                        </a>
                                        <a class="dropdown-item" href="{{ route('support') }}">
                                        @if(\App::isLocale('ru'))
                                            СОПРОВОЖДЕНИЕ ЗАКУПОЧНОЙ ДЕЯТЕЛЬНОСТИ, <br>
                                            СТРОИТЕЛЬНО-МОНТАЖНЫХ РАБОТ, <br>
                                            ПУСКОНАЛАДОЧНЫХ РАБОТ
                                        @endif
                                        @if(\App::isLocale('en'))
                                            SUPPORT OF PROCUREMENT ACTIVITIES,<br>
                                            CONSTRUCTION AND INSTALLATION WORKS,<br>
                                            COMMISSIONING
                                        @endif
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('contact')}}">
                                    @if(\App::isLocale('ru'))
                                        Контакты
                                    @endif
                                    @if(\App::isLocale('en'))
                                        Contacts
                                    @endif
                                    </a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ route('spravichnik') }}">
                                    @if(\App::isLocale('ru'))
                                        Справочник
                                    @endif
                                    @if(\App::isLocale('en'))
                                        Directory
                                    @endif
                                    </a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ route('library') }}">
                                    @if(\App::isLocale('ru'))
                                        Библиотека
                                    @endif
                                    @if(\App::isLocale('en'))
                                        Library
                                    @endif
                                    </a>
                                </li>

                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link " hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['value'] }}
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="home">
        <video class="video-slide active" src="assets/vid1.mp4" autoplay muted loop></video>
        <video class="video-slide " src="assets/video/mov13.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/video/mov5.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/video/mov5.mp4" autoplay muted loop></video>
        <div class="content active">
            <h1 class="animate__animated  animate__fadeInLeft">Lider Prof Proekt</h1>
            <p  class="animate__animated  animate__fadeInRight">
                @if(\App::isLocale('ru'))
                    Архитектура и проектирование
                @endif
                @if(\App::isLocale('en'))
                    Architecture and design
                @endif
            </p>
        <img src="t" alt="" srcset="">

            <a class="butn1" href="spravochnik1.html">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                @if(\App::isLocale('ru'))
                    Начать экскурсию
                @endif
                @if(\App::isLocale('en'))
                    Start the tour
                @endif
            </a>

        </div>
        <div class="content">
            <h1 data-splitting class="animate__animated  animate__fadeInLeft" style="font-size: 80px !important;">
                @if(\App::isLocale('ru'))
                    Индивидуальный подход
                @endif
                @if(\App::isLocale('en'))
                    Individual approach
                @endif

            </h1>
            <p class="animate__animated  animate__fadeInRight">
                @if(\App::isLocale('ru'))
                    Дизайн интерьера
                @endif
                @if(\App::isLocale('en'))
                    Interior design
                @endif
            </p>
            <a class="butn1" href="spravochnik1.html">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                @if(\App::isLocale('ru'))
                    Просмотреть проекты
                @endif
                @if(\App::isLocale('en'))
                    View projects
                @endif
            </a>
        </div>
        <div class="content">
            <h1 data-splitting class="animate__animated animate__fadeInLeft">
                @if(\App::isLocale('ru'))
                    Уникальные решение
                @endif
                @if(\App::isLocale('en'))
                    Unique solutions
                @endif
            </h1>
            <p class="animate__animated  animate__fadeInRight">
                @if(\App::isLocale('ru'))
                    Проектирование частных домов
                @endif
                @if(\App::isLocale('en'))
                    Design of private houses
                @endif
            </p>
            <a class="butn1" href="Uslovie.html">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                @if(\App::isLocale('ru'))
                    Все Услуги
                @endif
                @if(\App::isLocale('en'))
                    All Services
                @endif
            </a>

        </div>
        <div class="content">
            <h1 class="animate__animated  animate__fadeInLeft">Лидер Проф Проект</h1>
            <p  class="animate__animated  animate__fadeInRight">
                @if(\App::isLocale('ru'))
                    Архитектура и проектирование
                @endif
                @if(\App::isLocale('en'))
                    Architecture and design
                @endif
            </p>
            <a class="butn1" href="spravochnik1.html">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                @if(\App::isLocale('ru'))
                    Начать экскурсию
                @endif
                @if(\App::isLocale('en'))
                    Start the tour
                @endif
            </a>
        </div>

        <div class="media-icons">
            <a href="https://www.facebook.com/OOOLiderProfProekt/"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://t.me/lider_prof"><i class="fab fa-telegram"></i></a>

        </div>
        <div class="slider-navigation ">
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
        <div class="colmns ">


            <div class="wordss-anim" style="display: none !important;">
                <p id="typedtext">
                    <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
                </p>

            </div>

        </div>


    </section>
    <script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.js')}}"></script>
    <script>
        var full = false;

        function fill() {
            full = !full;
            document.getElementById("logocontainer").style.backgroundColor = full ? "#3ebffa" : "transparent";
        }

        (function ($) {
            "use strict";

            $(function () {
                var header = $(".start-style");
                $(window).scroll(function () {
                    var scroll = $(window).scrollTop();

                    if (scroll >= 10) {
                        header.removeClass('start-style').addClass("scroll-on");
                    } else {
                        header.removeClass("scroll-on").addClass('start-style');
                    }
                });
            });

            //Animation

            $(document).ready(function () {
                $('body.hero-anime').removeClass('hero-anime');
            });

            //Menu On Hover

            $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
                if ($(window).width() > 750) {
                    var _d = $(e.target).closest('.nav-item'); _d.addClass('show');
                    setTimeout(function () {
                        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                    }, 1);
                }
            });

            //Switch light/dark

            $("#switch").on('click', function () {
                if ($("body").hasClass("dark")) {
                    $("body").removeClass("dark");
                    $("#switch").removeClass("switched");
                }
                else {
                    $("body").addClass("dark");
                    $("#switch").addClass("switched");
                }
            });

        })(jQuery);


        // Js dlya animatsiya
        const btns = document.querySelectorAll(".nav-btn");
        const slides = document.querySelectorAll(".video-slide");
        const contents = document.querySelectorAll(".content");

        var sliderNav = function (manual) {
            btns.forEach((btn) => {
                btn.classList.remove('active');
            });
            slides.forEach((slide) => {
                slide.classList.remove('active');
            });
            contents.forEach((content) => {
                content.classList.remove('active');
            });
            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                sliderNav(i);
            });
        });
    </script>
    <script src="{{asset('assets/texttyping.js')}}"></script>

</body>

</html>
