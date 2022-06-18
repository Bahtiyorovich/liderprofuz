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
    <video autoplay loop muted playsinline webkit-playsinline poster="assets/img/src/promo3.jpg" preload="none" src="{{asset('assets/mov/mov6.mp4')}}"></video>
    <div class="container">
        <div class="page__top-panel__in">
            <h1 class="page__top-panel__title">Контакты</h1>
            <nav class="bread-crumbs">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Главная</a><i>/</i>
                    </li>
                    <li>
                        <span>Контакты</span>
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
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1448.2395536915676!2d69.30469365295116!3d41.26935569517233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae5fb5c33d7423%3A0x912c818a534a1eed!2sLider%20Prof%20Proekt!5e0!3m2!1sru!2s!4v1637958597043!5m2!1sru!2s" 
                                   width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                </div>
                <ul class="contacts-list">
                    <li>
                        <div class="contacts-list__item first-animation">
                            <div class="contacts-list__icon">
                                <img src="{{asset('assets/bg/address-w.svg')}}" alt="icon" />
                            </div>
                            <span class="contacts-list__title">Наш адрес</span>
                            <span class="contacts-list__text">г. Ташкент, ул. Себзор 1</span>
                        </div>
                    </li>
                    <li>
                        <div class="contacts-list__item third-animation">
                            <div class="contacts-list__icon">
                                <img src="{{asset('assets/bg/mail-w.svg')}}" alt="icon" />
                            </div>
                            <span class="contacts-list__title">Наша почта</span>
                            <span class="contacts-list__text">
                                <a href="mailto:info@test.ru">liderprof1@gmail.com</a>
                            </span>
                        </div>
                    </li>
                   
                    <li>
                        <div class="contacts-list__item second-animation">
                            <div class="contacts-list__icon">
                                <img src="{{asset('assets/bg/phone-w.svg')}}" alt="icon" />
                            </div>
                            <span class="contacts-list__title">Телефон</span>
                            <span class="contacts-list__text">
                                <a href="tel:+998 71 244 41 96">+998 71 244 41 96</a>
                                <a href="tel:+998 71 244 41 95">+998 71 244 41 95</a>
                            </span>
                        </div>
                    </li>
                </ul>
                <span class="gl-title first-animation">Связаться с Нами</span>
                <div class="gl-form third-animation">
                    <form>
                        <fieldset>
                            <ul class="form-list">
                                <li>
                                    <div class="gl-input user-i">
                                        <input type="text" placeholder="Ваше имя">
                                    </div>
                                </li>
                                <li>
                                    <div class="gl-input phone-i">
                                        <input type="text" placeholder="Ваш телефон">
                                    </div>
                                </li>
                                <li>
                                    <div class="gl-input mail-i">
                                        <input type="text" placeholder="Ваша почта">
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <div class="gl-textarea edit-i">
                                <textarea placeholder="Ваш комментарий"></textarea>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="gl-checkbox">
                                <input id="send" type="checkbox">
                                <label for="send">Нажимая кнопку "Отправить", вы принимаете <a href="data-processing.html">условия обработки персональных данных.</a></label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <button class="btn-sm-size">
                                <span>Отправить сообщение</span>
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection