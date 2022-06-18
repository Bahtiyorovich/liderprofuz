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
    <video autoplay loop muted playsinline webkit-playsinline poster="assets/img/src/promo3.jpg" preload="none" src="{{asset('assets/mov/mov5.mp4')}}"></video>
    <div class="container">
        <div class="page__top-panel__in">
            <h1 class="page__top-panel__title">О Компании</h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Главная</a><i>/</i>
                    </li>
                    <li>
                        <span>О Компании</span>
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
                    <small>СТРОИТЕЛЬНОЕ ПРОЕКТИРОВАНИЕ</small>
                </h2>
                <ul class="divisions changed">
                    <li>
                        <div class="divisions__item ">
                            <div class=" divisions__photo first-animation " style="background-image: url({{asset('assets/spravchnikrasmlar/1.jpg')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">СОКРАЩЕНИЯ И ОБОЗНАЧЕНИЯ НА ЧЕРТЕЖАХ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    бк – библиотека кон – контора бф – буфетная кхз – комната хозяина блк – балкон кх – комната хозяйки ван – ванная лдж – лоджия вер – веранда лф – лифт вшк –
                                     встроенный шкаф маст – мастерская гк – гостевая комната мк – мойка гст – гостиная муз – музыкальная комната глд – […]
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                            <div class="divisions__description first-animation">
                                <span class="divisions__text">УСЛОВНЫЕ ОБОЗНАЧЕНИЯ РАЗЛИЧНЫХ ВИДОВ ИЗОЛЯЦИИ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    Условные обозначения различных видов изоляции Гидроизоляция для безнапорных вод 1. Общее обозначение изоляции 
                                    2. Предварительная смазка 3. Клебемасса, накрывочный слой 4. Шпаклёвка 5. Толь без посыпки 6. Уплотнительная лента с необработанным строительным картоном 7. Уплотнительная
                                     лента с тканевым слоем 8. Уплотнительная лента с металлической фольгой 9. Уплотнительная лента с полимерной плёнкой 10. Металлическая лента без […]
                                </p>
                            </div>
                            <div class="divisions__photo second-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/2.jpg')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/3.png')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">УСЛОВНЫЕ ОБОЗНАЧЕНИЯ НА ПЛАНАХ И РАЗРЕЗАХ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    Условные обозначения на планах и разрезах  Графическое изображение № Изображение в цвете Предмет изображения  
                                     1. Светло-зелёный Трава 2. Сепия Торфяная мелочь и т.п. 3. Сиена жжёная Растительный слой 4. Чёрно-белый Насыпной грунт 
                                    5. Киноварь Кладка из кирпича на известковом растворе 6. Тот же —- на цементном растворе 7. ——— —- на известково-цементном растворе 8. […]
                                </p>
                               
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                          
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">СЕТИ ВОДОСНАБЖЕНИЯ И КАНАЛИЗАЦИИ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    СЕТИ ВОДОСНАБЖЕНИЯ И КАНАЛИЗАЦИИ При разработке проектов водопроводных сетей следует руководствоваться 
                                    «Инструкцией по расчету систем холодного водоснабжения» DIN 1988. Канализационные сети (DIN 1886) служат для 
                                    удаления фекальных, сточных и ливневых вод. На чертежах канализационные сети, расположенные 
                                    внутри зданий изображаются голубым цветом, а сети в грунте – коричневым. 1. Полимерные трубы (DIN 19531-19535). Dy (номинальные диаметры в […]
                                </p>
                                
                            </div>
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/4.jpg')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/5.jpg')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">УСЛОВНЫЕ ОБОЗНАЧЕНИЯ ДЛЯ СИСТЕМ ВОДОСНАБЖЕНИЯ И КАНАЛИЗАЦИИ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    Условные обозначения для систем водоснабжения и канализации 1. Линия сети сточных вод 2. Линия сети 
                                    смешанной канализации 3. Линия сети ливневой канализации 4. Изолированный трубопровод 5. Водосточный 
                                    жёлоб 6. Изменение диаметра труб 7. Вытяжная труба без колпака. Вытяжная труба с колпаком 8.
                                     Вентилируемый стояк 9. Конец трубопровода с заглушкой 10. Фланцевое соединение 11. Раструбное соединение […]
                                </p>
                                
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                           
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">УСЕТИ ГАЗОСНАБЖЕНИЯ. УСЛОВНЫЕ ОБОЗНАЧЕНИЯ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    Сети газоснабжения. Условные обозначения газового оборудования 1. Пересечение линий газовой сети при открытой проводке
                                     2. Скрытая проводка 3. Изменение диаметров труб газовой сети 4. Воздуховод 5. Импульсный трубопровод 6. Заземление 
                                     7. Газовый рукав 8. Потолочный светильник с указанием числа рожков 
                                    9. Настенный светильник стационарный 10. Настенный светильник передвижной 11. Газоотводная труба 12. Газоход 13. Газовая […]
                                </p>
                                
                            </div>
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/6.jpg')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/7.jpg')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ЭЛЕКТРОСЕТИ В ГРАЖДАНСКИХ ЗДАНИЯХ. УСЛОВНЫЕ ОБОЗНАЧЕНИЯ.</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    Электросети в гражданских зданиях. Условные обозначения. ТОКИ Постоянный ток Переменный ток Переменный ток 
                                    с указанием частоты Двухфазный переменный ток Трёхфазный переменный ток Постоянный или переменный ток (универсальный) 
                                    СЕТИ Линия сети Подземная линия Воздушная сеть На деревянных столбах На стальных мачтах 
                                    На стальных решетчатых опорах На железобетонных опорах На опорах, установленных на крышах Опора на крыше […]
                                </p>
                                
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                           
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">УСЛОВНЫЕ ОБОЗНАЧЕНИЯ НА СТРОИТЕЛЬНЫХ ЧЕРТЕЖАХ ГРАЖДАНСКИХ ЗДАНИЙ</span>
                                <span class="gl-title">НОРМЫ И СТАНДАРТЫ</span>
                                <p>
                                    УСЛОВНЫЕ ОБОЗНАЧЕНИЯ НА СТРОИТЕЛЬНЫХ ЧЕРТЕЖАХ ГРАЖДАНСКИХ ЗДАНИЙ      ОБЩАЯ КОМНАТА
                                     1. стол 80x120x78 – на 4 человека, 90x150x78 -на 6 человек 2. круглый стол   110×78 3. письменный стол 70x130x78, 80x150x78 
                                     4. столик для шитья 40×55 5. стул 45x45x47 
                                    6. кресло 60x65x35 7. кушетка 90x190x40 8. софа 80x175x43 9. пианино 60x140x160 10. табурет  35 11. кабинетный рояль […]
                                </p>
                                
                            </div>
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/8.jpg')}})"></div>
                        </div>
                    </li>
                    <li>
                        <div class="divisions__item">
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/9.jpg')}})"></div>
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ФУНДАМЕНТЫ</span>
                                <span class="gl-title">ЧАСТИ ЗДАНИЙ</span>
                                <p>
                                    ФУНДАМЕНТЫ В нормах на строительные основания DIN 1054 1975 г. приведены основные сведения о типах грунтов и их несущей
                                     способности при различных сочетаниях нагрузок, допустимые нагрузки на грунты при различных конструкциях фундаментов
                                      (плитные фундаменты, свайные фундаменты и т.д.) и
                                     соответствующие примеры (рис. 1 — 6). В нормах DIN 1055 приведены нагрузки на строительные конструкции, а […]
                                </p>
                                
                            </div>
                        </div>
                    </li>
                    <li class="text-right">
                        <div class="divisions__item">
                          
                            <div class="divisions__description second-animation">
                                <span class="divisions__text">ГИДРОИЗОЛЯЦИЯ ПОДЗЕМНЫХ ЧАСТЕЙ ЗДАНИЙ</span>
                                <span class="gl-title">ЧАСТИ ЗДАНИЙ</span>
                                <p>
                                    Гидроизоляция подземных частей зданий (DIN 4031, 4117, 4122, условные обозначения по DIN 4122) При влажных 
                                    грунтах горизонтальный слой гидроизоляции должен быть предусмотрен по фундаментам под всеми стенами (рис. 5 —6); 
                                    иногда требуется устройство дополнительного слоя гидроизоляции на
                                     30 см выше отметки земли (рис. 7). Необходима защитная штукатурка толщиной 1,5 —2 см или обмазка битумом два […]
                                </p>
                            </div>
                            <div class="divisions__photo first-animation" style="background-image: url({{asset('assets/spravchnikrasmlar/10.jpg')}})"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection