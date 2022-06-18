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
    <div class="page__top-panel__photo" style="background-image: url({{asset('assets/img/src/promo3.jpg')}})"></div>
    <video autoplay loop muted playsinline webkit-playsinline poster="{{asset('assets/img/src/promo3.jpg')}}"
        preload="none" src="{{asset('assets/mov/mov5.mp4')}}"></video>
    <div class="container">
        <div class="page__top-panel__in">
            <h1 class="page__top-panel__title">ДИЗАЙНЕРСКИЕ РАБОТЫ (ИНТЕРЬЕРНЫЕ И ЭКСТЕРЬЕРНЫЕ РЕШЕНИЕ)</h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Главная</a><i>/</i>
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
                    <small>ДИЗАЙНЕРСКИЕ РАБОТЫ (ИНТЕРЬЕРНЫЕ И ЭКСТЕРЬЕРНЫЕ РЕШЕНИЕ)</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/apartment2/1rsz.png')}})">
                            </div>
                            <div class="divisions__description second-animation"
                                style="text-align: start !important;">
                                <span class="divisions__text">Дизайн-проект — это пакет документов, который
                                    детально отражает концепцию будущего интерьера: цветовые решения,
                                    композицию, расположение мебели и света. В полный пакет дизайн-проекта
                                    входят:</span>
                                <!-- <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span> -->
                                <p class="p_for_desc">
                                    -чертежи,<br>
                                    -визуализация,<br>
                                    -спецификация,<br>
                                    -пояснительная записка. <br>
                                    В зависимости от сложности проекта и объема работ состав дизайн-проекта
                                    может меняться. Например, не включать
                                    пояснительную записку или спецификацию. Когда заказчик и дизайнер
                                    заключают договор, они уточняют список документов,
                                    который нужно подготовить.

                                </p>



                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ЧЕРТЕЖНАЯ ДОКУМЕНТАЦИЯ</span>
                                <p class="p_for_desc">
                                    Чертежи нужны прежде всего строителям. Чертежная документация отражает
                                    пошагово, как нужно проводить ремонтные работы по конкретному проекту.
                                    Прежде чем разработать схемы и чертежи, дизайнер замеряет объект.
                                    В чертежно-проектной документации обязательно указывается: <br>

                                    - монтаж и демонтаж стеновых конструкций и перегородок; <br>
                                    - расположение электрических выводов - розеток, выключателей,
                                    светильников. При этом автор проекта должен учитывать нормативы
                                    - мощности; <br>
                                    - расположение сантехники, кладка плитки, расстановка мебели, план
                                    отделки полов и потолков. <br>
                                    - Указывается вид отделочных материалов; <br>
                                    - схема открывания дверей - указывается вид полотна, размеры, в какую
                                    сторону открываются двери; <br>

                                </p>



                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2020-2021/adminstratpravzdan/inter/XOLL/4444\ rsz.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/konfzal/001rsz.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> ПЛАН ОБМЕРА ПОМЕЩЕНИЯ.</span>
                                <p class="p_for_desc">
                                    Показывает основные параметры всех помещений объекта до перепланировки.
                                    В плане указываются:
                                    <br> - точные размеры всех комнат, <br>

                                    - высота потолков, <br>
                                    - параметры оконных и дверных проемов, <br>
                                    - схемы расположения канализации, электропровода, газопровода и т.д.


                                </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text"> ПЛАНЫ ПО ДЕМОНТАЖУ И ВОЗВЕДЕНИЮ СТЕН.</span>
                                <p class="p_for_desc">
                                    На данных планах выделяются стеновые конструкции и перегородки, которые
                                    подлежат сносу и возведению. Важно проследить,
                                    чтобы документы не противоречили друг другу, так как от них зависит
                                    дальнейшая планировка всех помещений.


                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/nomerlyuks/Родительская\ спальня\ 1\ rsz.jpg')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/tipovoynomer/лне_rsz.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text"> ПЛАН ПОМЕЩЕНИЯ ПОСЛЕ ПЕРЕПЛАНИРОВКИ С
                                    ОБМЕРАМИ.</span>
                                <p class="p_for_desc">
                                    Планы по сносу и возведению стен совмещаются. В результате составляется
                                    чертеж с итоговым расположением стен и перегородок.
                                </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ПЛАН ПОМЕЩЕНИЯ ПОСЛЕ ПЕРЕПЛАНИРОВКИ С ОБМЕРАМИ
                                    И РАССТАНОВКОЙ МЕБЕЛИ.</span>
                                <p class="p_for_desc">
                                    Чертеж определяет расположение предметов интерьера и мебели. Дизайнер
                                    должен учесть реальные размеры самой комнаты, а также мебели, техники и
                                    светильников. От этого
                                    зависит, насколько точно проект будет реализован и насколько помещения
                                    будут удобными для владельцев.

                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/vestibyul/4rsz.png')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/electrical_project_cottage_Minsk.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ПЛАН ЭЛЕКТРОМОНТАЖНЫХ РАБОТ.</span>
                                <p class="p_for_desc">
                                    После того как дизайнер согласовал с заказчиком план помещения и
                                    расстановку мебели, он разрабатывает план электромонтажных работ.
                                    Чертеж отображает установку и размещение электротехники, осветительных
                                    приборов, выключателей и розеток. </p>






                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ПЛАН ЭЛЕКТРОМОНТАЖА С ОБМЕРАМИ И РАССТАНОВКОЙ
                                    МЕБЕЛИ</span>
                                <p class="p_for_desc">
                                    Чертеж совмещает план расстановки мебели и схему расположения
                                    электроприборов.
                                    Он наглядно показывает, как совмещается обстановки, бытовая техника и
                                    освещение.
                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/vestibyul/8rsz.png')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/vestibyul/9rsz.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ПЛАН НАПОЛЬНЫХ ПОКРЫТИЙ.</span>
                                <p class="p_for_desc">
                                    Показывает, какой тип покрытия будет использоваться в помещениях. На
                                    чертеже должно быть указано начало направления раскладки,
                                    высота подиумов. Размечаются стыковые элементы, рассчитывается площадь
                                    покрываемой поверхности.





                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ПЛАН ПОТОЛКОВ.</span>
                                <p class="p_for_desc">
                                    Указывает на типы материалов в комнатах, площадь и радиус покрываемых
                                    поверхностей. В документе рассчитывается, где нужно возвести потолочные
                                    конструкции.
                                    Учитываются разные типы, начиная от световых карнизов до многоуровневых
                                    элементов.
                                </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/apartment2/5rsz.png')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/s.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ПЛАН МАЯКОВ РАЗВЕРТОК, РАЗВЕРТКА СТЕН
                                    САНУЗЛОВ.</span>
                                <p class="p_for_desc">
                                    Помогает быстро сориентироваться в помещениях и развертках стен.
                                    Они обозначаются специальными номерами – маяками соответствующей
                                    развертки.
                                    Учитывает типы покрытия, линии стыков и площадь покрываемой поверхности
                                    стен.
                                    Указывает на расположение объектов, предметов быта и мебели санузлов.



                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">РАЗВЕРТКА СТЕН И РАСКЛАДКИ ПЛИТКИ.</span>
                                <p class="p_for_desc">
                                    Позволяет увидеть, на каких участках расположены элементы оборудования
                                    или встроенные конструкции. Указываются типы покрытий, отделка и
                                    направления раскладки
                                    этих покрытий. Также обозначаются двери, ниши, арки элементы декора и
                                    другие элементы. </p>




                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/malenkybasseyn/009rsz.png')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/images/155464243918544722.png')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ВИЗУАЛИЗАЦИЯ</span>
                                <p class="p_for_desc">
                                    Визуализация - документ, который помогает заказчику представить будущий
                                    интерьер.
                                    Автор проекта отображает фактуру и цветовую гамму покрытий, расстановку
                                    мебели и предметов декора, освещения.
                                    Часто дизайнер предлагает несколько вариантов интерьера, из которых
                                    клиент может выбрать наиболее близкий его вкусам и внести корректировки.
                                    Визуализация может быть выполнена в разных вариациях: эскиз,
                                    3D-визуализация, коллаж.
                                    Эскиз от руки-акварелью, карандашом, маркером. Такая подача удобна,
                                    когда нужно быстро отразить пожелания заказчика, внести изменения на
                                    ходу. Требует от дизайнера высоких художественных навыков. Каждый ракурс
                                    должен быть нарисован с нуля.
                                    <b>Компьютерная 3D-визуализация</b> – занимает больше времени чем
                                    «ручная подача». Дизайнер должен отлично владеть компьютерными
                                    программами и знать, где он может взять 3D-объекты для вставки в
                                    визуализацию.
                                    Компьютерная визуализация дает самое реалистичное представление о
                                    будущем интерьере.

                                </p>


                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ВЕДОМОСТЬ</span>
                                <p class="p_for_desc">
                                    Ведомость – документ, в котором отражается количество отделочных
                                    материалов для помещений. На этой основе рассчитывается примерная
                                    стоимость проекта.
                                    В идеале ведомость составляется на этапе разработки дизайн-проекта,
                                    чтобы заказчик сразу понимал бюджет и мог скорректировать какие-то
                                    позиции. Например, подобрать более дешевые аналоги, если реализация
                                    окажется слишком дорогой.

                                </p>
                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/sa.gif')}})">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation"
                                style="background-image: url({{asset('assets/2019-2020/gostglobus/interer/sanuzelstandasrt/3\ su\ standart\ poto\ rsz.jpg')}})">

                            </div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">СПЕЦИФИКАЦИЯ</span>
                                <p class="p_for_desc">
                                    Спецификация – общая ведомость по отделке и декорированию всех
                                    помещений. Является перечнем используемых чистовых материалов, покрытий,
                                    сантехники, мебели, бытовой техники, светильников и элементов декора.
                                    Включает их точное количество, стоимость и
                                    рекомендации о местах приобретения. Дает полное представление
                                    предстоящих
                                    расходов для воплощения дизайн-проекта.



                                </p>

                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">



                            <div class="divisions__description first-animation">
                                <span class="divisions__text">ПОЯСНИТЕЛЬНАЯ ЗАПИСКА</span>
                                <p class="p_for_desc">
                                    В пояснительной записке описывается общая концепция проекта и детально
                                    расписывается композиция интерьера для
                                    каждого помещения: функциональные, технические, декоративные решения
                                    проекта.
                                </p>
                            </div>
                            <div class="divisions__photo second-animation"
                                style="background-image: url({{asset('assets/images/unnamed.jpg')}})">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
@endsection