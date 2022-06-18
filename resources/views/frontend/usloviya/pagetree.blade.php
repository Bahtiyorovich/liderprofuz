@extends('layouts.index')
@section('content')
<div class="media-icons position-absolute">


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
            <h1 class="page__top-panel__title">ЛАНДШАФТНЫЙ ДИЗАЙН</h1>
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
                    <small>ЛАНДШАФТНЫЙ ДИЗАЙН</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/eskiz.png')}})"></div>
                            <div class="divisions__description second-animation"
                                style="text-align: start !important;">
                                <span class="divisions__text">ЭСКИЗ ЛАНДШАФТА</span>
                                <!-- <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span> -->
                                <p class="p_for_desc">
                                    Предварительный рисунок, отображающий замысел дизайнера по преображению
                                    участка. Создается на
                                    первой стадии проектирования. На эскизе отображается в общих чертах, без
                                    детализации.

                                </p>



                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ГЕНЕРАЛЬНЫЙ ПЛАН</span>
                                <p class="p_for_desc">
                                    Документ, на основе которого осуществляются все работы по ландшафтному
                                    дизайну.
                                    На нем отображаются существующие и проектные объекты,
                                    которые будут находиться на участке: постройки, дорожки, площадки,
                                    водоемы, посадки и т.д.
                                </p>



                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/11.png')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/sab.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> РАЗБИВОЧНЫЙ ЧЕРТЕЖ</span>
                                <p class="p_for_desc">
                                    Изображение объектов, с помощью условных обозначений, в масштабе.
                                    На нем указываются размеры проектируемых дорожек, парковок, построек и
                                    водоемов.
                                </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text"> ДЕНДРОЛОГИЧЕСКИЙ ПЛАН</span>
                                <p class="p_for_desc">
                                    Отображает все будущие посадки: деревья, кустарники,
                                    цветники. Каждому растению присваивается порядковый номер.

                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/blagvaozelenie/blagyashnab/rsz_landscap1.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/blagvaozelenie/parkxudojnik/artpark_View13rsz.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> ПОСАДОЧНАЯ ВЕДОМОСТЬ</span>
                                <p class="p_for_desc">
                                    Список, который дополняет дендрологический план и раскрывает название
                                    каждого растения, количество и тип посадок.
                                    Все записи приведены в соответствии с порядковыми номерами объектов на
                                    дендроплане. </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ВЕДОМОСТЬ ОБЪЕМОВ ПОСАДОЧНЫХ РАБОТ И
                                    МАТЕРИАЛОВ</span>
                                <p class="p_for_desc">
                                    В этой ведомости раскрывается перечень работ и посадочного материала
                                    необходимых для озеленения участка по проекту.
                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/blagvaozelenie/parkxudojnik/rszartpark_View06.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/electrical_project_cottage_Minsk.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ПОСАДОЧНЫЙ ЧЕРТЕЖ</span>
                                <p class="p_for_desc">
                                    Детализирует размеры и местонахождение посадочных ям, шаг
                                    посадки живой изгороди и размеры цветников. </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">СХЕМА АВТОПОЛИВА</span>
                                <p class="p_for_desc">
                                    Если площадь сада большая или бывают периоды когда Вы редко появляетесь
                                    на участке,
                                    то лучше предусмотреть систему автоматического полива растений. Она
                                    создается с учетом всех посадок,
                                    указывает где располагаются головки разбрызгивателей, охват каждой и
                                    схему их подключения.
                                </p>

                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/konfzal/001rsz.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/kanalizatsiya.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">СХЕМА ДРЕНАЖНОЙ СИСТЕМЫ И ЛИВНЕВОЙ
                                    КАНАЛИЗАЦИИ</span>
                                <p class="p_for_desc">
                                    Изображение, на котором точно показаны места:
                                    <br>
                                    - прохождения дренажных труб, <br>
                                    - установки дренажных колодцев, <br>
                                    - установки дождеприемных лотков. <br>
                                    Также схема задает общие, продольные и поперечные уклоны дорожек.



                                </p>


                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">СХЕМА РАССТАНОВКИ СВЕТИЛЬНИКОВ</span>
                                <p class="p_for_desc">
                                    Графическое изображение, на котором указан тип светильников и место их
                                    расположения на участке.
                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/1.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/svetlnk.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> ЭЛЕКТРОСХЕМА ПОДКЛЮЧЕНИЯ СВЕТИЛЬНИКОВ</span>
                                <p class="p_for_desc">
                                    Отображает места подключения светильников, тип и длину используемого
                                    кабеля.</p>



                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ВЕДОМОСТЬ ОБЪЕМОВ СТРОИТЕЛЬНЫХ РАБОТ И
                                    МАТЕРИАЛОВ</span>
                                <p class="p_for_desc">
                                    В этой ведомости раскрывается перечень необходимых работ и материалов
                                    для реализации проекта.
                                </p>



                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/vedmos.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/3d.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> 3D ВИЗУАЛИЗАЦИЯ</span>
                                <p class="p_for_desc">
                                    Выполняется с помощью компьютерных программ. Позволяет увидеть облик
                                    будущего ландшафта с разных ракурсов, в
                                    деталях. До начала работ заказчик увидит ландшафт таким, как его задумал
                                    дизайнер.

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