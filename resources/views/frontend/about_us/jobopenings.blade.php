<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="architecture design">
    <title>Lider Prof Proekt</title>
    <link rel="icon" href="{{asset('assets/mov/logo123.png')}}" type="image/x-icon">

    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}" />
    <!-- Fonts for Logo -->
    <!-- Acmme -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <style>
        body {
            background-color: #000;
            color: #fff;

        }

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1340px;
        }

        .glavni h2,
        h6 {
            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
            color: white;
            line-height: 2em;

        }




        h4 {
            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
            color: white;
        }

        .glavni {
            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
            margin-top: 5%;
            /* text-align: center; */
        }

        p {

            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
            font-style: italic;
        }

        h5 {

            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
            font-style: italic;
        }

        .col-md-4 {

            background-image: url({{asset('assets/arcline-architecture-team-at-work-designing-homes-4-Medium-1024x683.jpg')}});
            background-position: 100% 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }



        /* chast footer styel*/
        .footer {
            margin-top: 25px;
            color: white;
            border-top: 1px solid #fff;
        }

        .footer img {
            width: 57%;
            height: 85%;
        }

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1640px;
        }

        .headline {
            text-align: center;
            font-family: 'Josefin Sans', sans-serif !important;
            font-weight: 500;
        }

        /* chast endl */




        .container-fluid .media-icons {
            background-color: rgb(1, 1, 1);
            height: 39%;
            width: 58px;
            /* border: 2px solid rgb(250, 0, 0); */
            z-index: 888;
            position: fixed;
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
            margin-top: 398px;
            left: 0;
        }

        .container-fluid .media-icons a {
            color: rgb(255, 255, 255);
            font-size: 1.6em;
            transition: 0.3s ease;
            -webkit-transition: 0.3s ease;
            -moz-transition: 0.3s ease;
            -ms-transition: 0.3s ease;
            -o-transition: 0.3s ease;
        }

        .container-fluid .media-icons a:not(:last-child) {
            margin-bottom: 20px;
        }

        .container-fluid .media-icons a:hover {
            transform: scale(1.3);
            -webkit-transform: scale(1.3);
            -moz-transform: scale(1.3);
            -ms-transform: scale(1.3);
            -o-transform: scale(1.3);
        }

        .wordss-anim {
            top: 100px;
            text-align: center;
            justify-content: center;
            align-items: center;
            z-index: 888;
            position: fixed;

            left: 0;
            margin-top: 120px;
            transition: 0.5s ease;
            -webkit-transition: 0.5s ease;
            -moz-transition: 0.5s ease;
            -ms-transition: 0.5s ease;
            -o-transition: 0.5s ease;
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
            margin-top: 307px;
            height: 58px;
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
    </style>



</head>

<body>
    <div class="navigation-wrap bg-dark1 start-header start-style">
        <div class="container-fluid pl-5 pr-5 ">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-dark">
    
    
                        <a class="navbar-brand ml-5" href="{{ route('index') }}">
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
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
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
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        @if(\App::isLocale('ru'))
                                            Портфолио
                                        @endif
                                        @if(\App::isLocale('en'))
                                            Portfolio
                                        @endif
                                        
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="https://myhub.autodesk360.com/ue283d8b2/g/shares/SH7f1edQT22b515c761ef57601e086f95852?mode=embed">3D
                                            AutoDesk</a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Многоэтажные жилые здания и общежития
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Multi-storey residential buildings and dormitories
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Благоустройство и озеленение территорий
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Landscaping and gardening of territories
                                            @endif
                                            
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Общеобразовательные школы, </br>академические лицеи и профессиональные колледжи
                                            @endif
                                            @if(\App::isLocale('en'))
                                            General education schools, </br> academic lyceums and vocational colleges
                                            @endif
                                            
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Высшие образовательные учреждения
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Higher educational institutions
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Дошкольные образовательные учреждения
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Preschool educational institutions
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Научно-исследовательские академические центры
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Academic research centers
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Застройка населенных пунктов
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Development of settlements
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Физкультурно-оздоровительные комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Sports and recreation complexes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Административные здания, офисные помещения
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Administrative buildings, office premises
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                                Банк и биржи, бизнес-центры
                                            @endif
                                            @if(\App::isLocale('en'))
                                                Banks exchanges, business centers
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Гостиничные комплексы, отели
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Hotel complexes, hotels
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Производственные комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Production complexes
                                            @endif
                                            
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Здания и сооружения культурно-бытового назначения
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Buildings and structures for cultural and household purposes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Рестораны, кафе и бары
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Restaurants, cafes and bars
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Дом отдыха и туристические комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Holiday homes and tourist complexes
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="galleryfirstpage.html">
                                            @if(\App::isLocale('ru'))
                                            Индивидуальные жилые дома и комплексы
                                            @endif
                                            @if(\App::isLocale('en'))
                                            Individual residential buildings and complexes
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
                                        <a class="dropdown-item" href="{{ route('vakansiya') }}>
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
                                    <a class="nav-link" href="contacts.html">
                                    @if(\App::isLocale('ru'))
                                        Контакты
                                    @endif
                                    @if(\App::isLocale('en'))
                                        Contacts
                                    @endif  
                                    </a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">
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
    <div class="glavni">
        <div class="container-fluid">

            <div class="colmns">
                <div class="wordss-anim">
                    <p id="typedtext">
                        <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
                    </p>

                </div>

            </div>
            <div class="media-icons">
                <a href="https://www.facebook.com/OOOLiderProfProekt/"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://t.me/lider_prof"><i class="fab fa-telegram"></i></a>

            </div>
            <div class="container">
                <h2 class="headline">
                    ВАКАНСИЯ –
                    АРХИТЕКТОР ПРОЕКТИРОВЩИК.
                    РАБОТА В
                    ТАШКЕНТЕ</h2>
                <div class="row">

                    <div class="col-md-4" data-aos="fade-right">
                        <!-- <img src="/2018-2019/rekAlisherN/MU 06 (2).jpg" class="img-fluid" alt=""> -->
                    </div>
                    <div class="col-md-8 col-sm-12" data-aos="fade-left">
                        <h2 data-aos="fade-up">Архитектор проектировщик</h2>
                        <h5>– опыт работы от 2 лет</h5>
                        <h4>ДОЛЖНОСТНЫЕ ОБЯЗАННОСТИ:</h4>
                        <h6>Разработка рабочый проект;
                            Разработка проектной документации;
                            Разработка всех стадий архитектурной части проектов, жилые и общественные сооружения;
                            Первичная работа с технической документацией;
                            Разработка рабочих чертежей.</h6>
                        <h6>We need Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Dolor alias
                            impedit, eveniet eius hic laboriosam!</h6>




                        <h4>ТРЕБОВАНИЯ:</h4>
                        <h6>Опыт работы архитектором от 2х лет.</h6>
                        <h4>УСЛОВИЯ:</h4>
                        <h6>Оформление по ТК РУз;
                            Достойный уровень оплаты;
                            Полный рабочий день на территории работодателя.</h6>

                    </div>

                </div>


                <div class="row">


                    <div class="col-md-8" data-aos="fade-up-right">
                        <h2>Архитектор проектировщик</h2>
                        <p>– опыт работы от 2 лет</p>
                        <h4>ДОЛЖНОСТНЫЕ ОБЯЗАННОСТИ:</h4>
                        <h6 class="aniview-v3" data-av-animation="slideInRight">Разработка рабочый проект;<br />
                            Разработка проектной документации;<br />
                            Разработка всех стадий архитектурной части проектов, жилые и общественные сооружения;<br />
                            Первичная работа с технической документацией;<br />
                            Разработка рабочих чертежей.</h6>
                        <h6>We need Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Dolor alias
                            impedit, eveniet eius hic laboriosam!</h6>




                        <h4>ТРЕБОВАНИЯ:</h4>
                        <h6>Опыт работы архитектором от 2х лет.</h6>
                        <h4>УСЛОВИЯ:</h4>
                        <h6>Оформление по ТК РУз;
                            Достойный уровень оплаты;
                            Полный рабочий день на территории работодателя.</h6>

                    </div>
                    <div class="col-md-4" data-aos="fade-up-left">
                        <!-- <img src="/2018-2019/rekAlisherN/MU 06 (2).jpg" class="img-fluid" alt=""> -->
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4" data-aos="flip-up">
                        <!-- <img src="/2018-2019/rekAlisherN/MU 06 (2).jpg" class="img-fluid" alt=""> -->
                    </div>
                    <div class="col-md-8" data-aos="flip-down">
                        <h2 class="headline">Архитектор проектировщик</h2>
                        <p>– опыт работы от 2 лет</p>
                        <h4>ДОЛЖНОСТНЫЕ ОБЯЗАННОСТИ:</h4>
                        <h6>Разработка рабочый проект;
                            Разработка проектной документации;
                            Разработка всех стадий архитектурной части проектов, жилые и общественные сооружения;
                            Первичная работа с технической документацией;
                            Разработка рабочих чертежей.</h6>
                        <h6>We need Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Dolor alias
                            impedit, eveniet eius hic laboriosam!</h6>




                        <h4>ТРЕБОВАНИЯ:</h4>
                        <h6>Опыт работы архитектором от 2х лет.</h6>
                        <h4>УСЛОВИЯ:</h4>
                        <h6>Оформление по ТК РУз;
                            Достойный уровень оплаты;
                            Полный рабочий день на территории работодателя.</h6>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('assets/js/fontawesome.js')}}"></script>
<script>
    AOS.init();

    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>
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

    //    Splitting();





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

</html>