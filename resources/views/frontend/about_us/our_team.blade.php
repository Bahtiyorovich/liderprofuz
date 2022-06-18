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
            <h1 class="page__top-panel__title">Сотрудники</h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Главная</a><i>/</i>
                    </li>
                    <li>
                        <span>Сотрудники</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<section class="section advantage dec-none">
    <div class="container">
        <div class="section__in">
            <div class="section__content">
                <h2 class="sm-gl-title indent-bt-small first-animation">
                    <span>02</span>
                    <small>Наша команда</small>
                </h2>
                <ul class="teams">
                    <li>
                        <div class="teams__item first-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_photo_2021-02-15_17-05-17 (2).jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">ANVAR <br /> KAXRAMONOVICH BAXRIDDINOV</span>
                            <small>Директор</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item third-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_8_3 (1).jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name"> SOBIR <br /> ASHIRMETOV UKTAMOVICH</span>
                            <small>Бош муҳандис</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item second-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_4_9 (2).jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name"> MIRJAHON<br /> NORMO‘MINOV SHERALI O‘G‘LI</span>
                            <small>Архитектор<br /> </small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item first-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_5_9 (1).jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">BAXTIYOR<br /> SALIXOV ARIPOVICH</span>
                            <small>Муҳандислик-коммуникация бўлимининг этакчи мутахассиси</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item third-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_6_4.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name"> ORIF<br /> ABDURAXMANOV YULCHIYEVICH</span>
                            <small>Бош архитектор</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item second-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_10_3 (1).jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">XABIBULLIN ILDOR <br /> MEDIXATOVICH</span>
                            <small>Лойиҳа бош <br /> архитектори</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item first-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_11_7.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name"> ABDURAHMON <br />ABDULLAYEV ZABIHULLO O‘G‘LI</span>
                            <small>Дизайн бўлими бошлиғи</small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item third-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_1_14.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">G‘IYOSBEK<br /> XUSHMURODOV G‘ULOM O‘G‘LI</span>
                            <small>Конструкторлик бўлимининг мутахассиси<br /></small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item second-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_7_3.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">MUSLIMJON<br /> SAMATOV ILYOS O‘G‘LI</span>
                            <small>Архитектура бўлими бошлиғи<br /> </small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item first-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_9_4.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">NARGIZA <br /> USMANOVA UCHKUNOVNA </span>
                            <small>Бош бухгалтер<br /> </small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item third-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_19_4.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">RUXSORA<br /> NAZIROVA SHODMONQULOVNA</span>
                            <small>Кадрлар бўйича инспектор<br /> </small>
                        </div>
                    </li>
                    <li>
                        <div class="teams__item second-animation">
                            <div class="teams__photo">
                                <img src="{{asset('assets/images/jamoa/rsz_photo_2021-03-26_17-23-05.jpg')}}" alt="photo" />
                            </div>
                            <span class="teams__name">ULUG‘BEK <br /> KARIMOV BAXTIYOROVICH</span>
                            <small>Техник<br /> </small>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

@endsection