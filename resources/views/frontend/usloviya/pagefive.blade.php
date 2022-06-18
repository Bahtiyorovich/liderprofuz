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
            <h1 class="page__top-panel__title">ПРОЕКТИРОВАНИЕ</h1>
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
                    <small>ПРОЕКТИРОВАНИЕ</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/kn1.jpg')}})"></div>
                            <div class="divisions__description second-animation"
                                style="text-align: start !important;">
                                <span class="divisions__text"> -Стадия П (проект): Техническое задание и
                                    Задание
                                    на проектирование, Утверждаемая часть рабочего проекта, Базовый проект.
                                    <br>
                                    -Стадия РП и ДП (рабочий проект и детальное проектирование):
                                    Рабочая документация для строительства <br>
                                    -Стадия ПСД: Проектно-сметное документации (полное комплектация
                                    проектно-сметных работы по капитальному ремонту, реконструкции и
                                    новое строительство здание и сооружение).</span>
                            </div>
                        </div>
                    </li>
                    <h2 class="sm-gl-title first-animation">
                        <span>02</span>
                        <small>-Выдается в польном составе </small>
                    </h2>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">КНИГА I
                                    Градостроительные документации
                                </span>
                                <p class="p_for_desc">
                                    часть-1 <br>
                                    ОПЗ-Общая пояснительная записка
                                    ГП-Генеральный план и благоустройство <br>
                                    часть-2 <br>
                                    ПОС-Проект организации строительства <br>
                                    ППР- Проект производства работ
                                </p>
                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/2b.jpg')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/kniga2.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">КНИГА II
                                    Общестроительные разделы
                                </span>
                                <p class="p_for_desc">
                                    АР-Архитектурные и архитектурно строительные решение <br>
                                    КР (РГПЗ,КМ,КЖ,КМД)-Конструктивные решение (Расчетно-графическая и
                                    пояснительная записка с отчетными данными, Конструкция металлическая,
                                    Конструкция железобетонная, Конструкции металлические деталировочные)
                                    <br> ТХ-Технология производства
                                    ОВ (СКиВ) - Отопление и вентиляции (Отопление, система кондиционирования
                                    и вентиляции)
                                    ВК- Водопровод и канализации
                                    ЭОМ(АВР,ДГУ)– Электроснабжение, Электроосвещение, Электрооборудование,
                                    Заземление и молниезащита, (АВР – автоматическое включение резерва,
                                    гарантированное электропитание, ДГУ – дизельные генераторные установки).
                                    ПС- Система пожарной сигнализации и система оповещения и управления
                                    эвакуацией людей при пожаре
                                    <br>
                                    часть-2

                                    <br> Альбом №12- ДМ,ИР- Демонстрационные материалы
                                    и интерьерные решение
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text"> КНИГА III
                                    Слаботочные разделы
                                </span>
                                <p class="p_for_desc">
                                    часть-1 <br>
                                    ОС- Система охранно-тревожной сигнализации <br>
                                    ВН- Система видеонаблюдения <br>
                                    СКС-Структурированные кабельные сети <br>
                                    СС(IP T. IP TV)-Системы связи (IP Телефония, IP Телевидение) <br>
                                    СКУД- Система контроля и управления доступом
                                </p>
                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/knig3.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/639078.jpeg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> КНИГА IV
                                    Наружные инженерные сети
                                </span>
                                <p class="p_for_desc">
                                    часть-1 <br>
                                    НВК(ДС,ЛО) (Наружные сети водоснабжения и канализации, дренажные системы
                                    и ливневые отводы )
                                    <br> часть-2
                                    <br> Теплоснабжение, кондиционирование воздуха и холодоснабжение
                                    ТС- Теплоснабжение
                                    ТМ- Тепломеханика
                                    ГСН- Газопроводные сети наружные
                                    ХС - Холодоснабжение
                                    <br> часть-3
                                    <br> Наружные электрические сети
                                    ЭН-Электроосвещение наружное
                                    <br> ЭС-1-Электроснабжение (наружное) 0,4кв
                                    ЭС-2-Электроснабжение (наружное) свыше 10,0кв
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">КНИГА V
                                    Автоматизированные информационные системы
                                </span>
                                <p class="p_for_desc">
                                    Автоматизированные информационные системы
                                    <br> АТП -Автоматизация теплового пункта, автоматизация технологических
                                    процессов <br>
                                    АПТ(АПС,АСГП)- Автоматическая система пожаротушения (Автоматическая
                                    система газового пожаротушения и удаления продуктов горения, система
                                    пожарной сигнализации и система оповещения и управления эвакуацией людей
                                    при пожаре)
                                    <br> СМ- Система мониторинга инженерной инфраструктуры
                                    <br> АСКУЭ-(Автоматизированная система коммерческого учета
                                    электроэнергии

                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/grado.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/el.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">КНИГА VI
                                    Смета на строительство объектов
                                    ССР - Сводный сметный расчет
                                </span>
                                <p class="p_for_desc">
                                    По задание на проектирование объекта, требование заказчика и
                                    согласно нормативных документации РУз по состав проектирование объекта
                                    выполняется инженерные и общестроительные разделы

                                    -Стадия СД: Сметная документация (Сметные
                                    документации по зданием текущего ремонта согласно утвержденного
                                    дефектного акта).
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