<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lider Prof Proekt</title>
    <script src="//code-ya.jivosite.com/widget/xT7ZobudPG" async></script>
    <link rel = "icon" href ="{{asset('assets/mov/logo123.png')}}"   type = "image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}"/>
  
   <style>
        

        /* Please ❤ this if you like it! */


        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');

        /* #Primary
        ================================================== */

        body{
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        line-height: 24px;
        font-weight: 400;
        color: #212112;
        background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
        background-position: center;
        background-repeat: repeat;
        background-size: 7%;
        background-color: #fff;
        overflow-x: hidden;
        transition: all 200ms linear;
        }
        ::selection {
        color: #fff;
        background-color: #8167a9;
        }
        ::-moz-selection {
        color: #fff;
        background-color: #8167a9;
        }


        /* #Navigation
        ================================================== */

        .start-header {
        opacity: 1;
        transform: translateY(0);
        /* padding: 20px 0; */
        box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
        -webkit-transition : all 0.3s ease-out;
        transition : all 0.3s ease-out;
        }
        .start-header.scroll-on {
        box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
        padding: 10px 0;
        -webkit-transition : all 0.3s ease-out;
        transition : all 0.3s ease-out;
        }
        .start-header.scroll-on .navbar-brand img{
        height: 24px;
        -webkit-transition : all 0.3s ease-out;
        transition : all 0.3s ease-out;
        }
        .navigation-wrap{
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        -webkit-transition : all 0.3s ease-out;
        transition : all 0.3s ease-out;
        }
        .navbar{
        padding: 0;
        }
        .navbar-brand img{
        height: 68px;
        width: auto;
        display: block;
        filter: brightness(10%);
        -webkit-transition : all 0.3s ease-out;
        transition : all 0.3s ease-out;
        }
        .navbar-toggler {
        float: right;
        border: none;
        padding-right: 0;
        }
        .navbar-toggler:active,
        .navbar-toggler:focus {
        outline: none;
        }
        .navbar-light .navbar-toggler-icon {
        width: 24px;
        height: 17px;
        background-image: none;
        position: relative;
        border-bottom: 1px solid #000;
        transition: all 300ms linear;
        }
        .navbar-light .navbar-toggler-icon:after, 
        .navbar-light .navbar-toggler-icon:before{
        width: 24px;
        position: absolute;
        height: 1px;
        background-color: #000;
        top: 0;
        left: 0;
        content: '';
        z-index: 2;
        transition: all 300ms linear;
        }
        .navbar-light .navbar-toggler-icon:after{
        top: 8px;
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
        transform: rotate(45deg);
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
        transform: translateY(8px) rotate(-45deg);
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        border-color: transparent;
        }
        .nav-link{
        color: #212121 !important;
        font-weight: 500;
        transition: all 200ms linear;
        }
        .nav-item:hover .nav-link{
        color: #8167a9 !important;
        }
        .nav-item.active .nav-link{
        color: #777 !important;
        }
        .nav-link {
        position: relative;
        padding: 5px 0 !important;
        display: inline-block;
        }
        .nav-item:after{
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        content: '';
        background-color: #8167a9;
        opacity: 0;
        transition: all 200ms linear;
        }
        .nav-item:hover:after{
        bottom: 0;
        opacity: 1;
        }
        .nav-item.active:hover:after{
        opacity: 0;
        }
        .nav-item{
        position: relative;
        transition: all 200ms linear;
        }

        /* #Primary style
        ================================================== */

        .bg-light {
        background-color: #fff !important;
        transition: all 200ms linear;
        }
        .section {
        position: relative;
        width: 100%;
        display: block;
        margin-top: 60px;
        }
        .full-height {
        height: 100vh;
        }
        .over-hide {
        overflow: hidden;
        }
        .absolute-center {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        margin-top: 40px;
        transform: translateY(-50%);
        z-index: 20;
        }
        h1{
        font-size: 48px;
        line-height: 1.2;
        font-weight: 700;
        color: #212112;
        text-align: center;
        }
        p{
        text-align: center;
        margin: 0;
        padding-top: 10px;
        opacity: 1;
        transform: translate(0);
        transition: all 300ms linear;
        transition-delay: 1700ms;
        }
        body.hero-anime p{
        opacity: 0;
        transform: translateY(40px);
        transition-delay: 1700ms;
        }
        h1 span{
        display: inline-block;
        transition: all 300ms linear;
        opacity: 1;
        transform: translate(0);
        }
        body.hero-anime h1 span:nth-child(1){
        opacity: 0;
        transform: translateY(-20px);
        }
        body.hero-anime h1 span:nth-child(2){
        opacity: 0;
        transform: translateY(-30px);
        }
        body.hero-anime h1 span:nth-child(3){
        opacity: 0;
        transform: translateY(-50px);
        }
        body.hero-anime h1 span:nth-child(4){
        opacity: 0;
        transform: translateY(-10px);
        }
        body.hero-anime h1 span:nth-child(5){
        opacity: 0;
        transform: translateY(-50px);
        }
        body.hero-anime h1 span:nth-child(6){
        opacity: 0;
        transform: translateY(-20px);
        }
        body.hero-anime h1 span:nth-child(7){
        opacity: 0;
        transform: translateY(-40px);
        }
        body.hero-anime h1 span:nth-child(8){
        opacity: 0;
        transform: translateY(-10px);
        }
        body.hero-anime h1 span:nth-child(9){
        opacity: 0;
        transform: translateY(-30px);
        }
        body.hero-anime h1 span:nth-child(10){
        opacity: 0;
        transform: translateY(-20px);
        }
        h1 span:nth-child(1){
        transition-delay: 1000ms;
        }
        h1 span:nth-child(2){
        transition-delay: 700ms;
        }
        h1 span:nth-child(3){
        transition-delay: 900ms;
        }
        h1 span:nth-child(4){
        transition-delay: 800ms;
        }
        h1 span:nth-child(5){
        transition-delay: 1000ms;
        }
        h1 span:nth-child(6){
        transition-delay: 700ms;
        }
        h1 span:nth-child(7){
        transition-delay: 900ms;
        }
        h1 span:nth-child(8){
        transition-delay: 800ms;
        }
        h1 span:nth-child(9){
        transition-delay: 600ms;
        }
        h1 span:nth-child(10){
        transition-delay: 700ms;
        }
        body.hero-anime h1 span:nth-child(11){
        opacity: 0;
        transform: translateY(30px);
        }
        body.hero-anime h1 span:nth-child(12){
        opacity: 0;
        transform: translateY(50px);
        }
        body.hero-anime h1 span:nth-child(13){
        opacity: 0;
        transform: translateY(20px);
        }
        body.hero-anime h1 span:nth-child(14){
        opacity: 0;
        transform: translateY(30px);
        }
        body.hero-anime h1 span:nth-child(15){
        opacity: 0;
        transform: translateY(50px);
        }
        body.hero-anime h1 span:nth-child(16){
        opacity: 0;
        transform: translateY(60px);
        }
        body.hero-anime h1 span:nth-child(17){
        opacity: 0;
        transform: translateY(50px);
        }
        body.hero-anime h1 span:nth-child(18){
        opacity: 0;
        transform: translateY(40px);
        }
        h1 span:nth-child(11){
        transition-delay: 1300ms;
        }
        h1 span:nth-child(12){
        transition-delay: 1500ms;
        }
        h1 span:nth-child(13){
        transition-delay: 1400ms;
        }
        h1 span:nth-child(14){
        transition-delay: 1200ms;
        }
        h1 span:nth-child(15){
        transition-delay: 1450ms;
        }
        h1 span:nth-child(16){
        transition-delay: 1350ms;
        }
        h1 span:nth-child(17){
        transition-delay: 1500ms;
        }
        h1 span:nth-child(18){
        transition-delay: 1100ms;
        }
        h1 span:nth-child(19){
        transition-delay: 1600ms;
        }
        h1 span:nth-child(20){
        transition-delay: 1000ms;
        }
        #switch,
        #circle {
        cursor: pointer;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
        } 
        #switch {
        width: 60px;
        height: 8px;
        border: 2px solid #8167a9;
        border-radius: 27px;
        background: #000;
        position: relative;
        display: block;
        margin: 0 auto;
        text-align: center;
        opacity: 1;
        transform: translate(0);
        transition: all 300ms linear;
        transition-delay: 1900ms;
        }
        body.hero-anime #switch{
        opacity: 0;
        transform: translateY(40px);
        transition-delay: 1900ms;
        }
        #circle {
        position: absolute;
        top: -11px;
        left: -13px;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: #000;
        }
        .switched {
        border-color: #000 !important;
        background: #8167a9 !important;
        }
        .switched #circle {
        left: 43px;
        box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
        background: #fff;
        }
        .nav-item .dropdown-menu {
        transform: translate3d(0, 10px, 0);
        visibility: hidden;
        opacity: 0;
        max-height: 0;
        display: block;
        padding: 0;
        margin: 0;
        transition: all 200ms linear;
        }
        .nav-item.show .dropdown-menu {
        opacity: 1;
        visibility: visible;
        max-height: 999px;
        transform: translate3d(0, 0px, 0);
        }
        .dropdown-menu {
        padding: 10px!important;
        margin: 0;
        font-size: 13px;
        letter-spacing: 1px;
        color: #212121;
        background-color: #fcfaff;
        border: none;
        border-radius: 3px;
        box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
        transition: all 200ms linear;
        }
        .dropdown-toggle::after {
        display: none;
        }

        .dropdown-item {
        padding: 3px 15px;
        color: #212121;
        border-radius: 2px;
        transition: all 200ms linear;
        }
        .dropdown-item:hover, 
        .dropdown-item:focus {
        color: #fff;
        background-color: rgba(129,103,169,.6);
        }

        body.dark{
        color: #fff;
        background-color: #1f2029;
        }
        body.dark .navbar-brand img{
        filter: brightness(100%);
        }
        body.dark h1{
        color: #fff;
        }
        body.dark h1 span{
        transition-delay: 0ms !important;
        }
        body.dark p{
        color: #fff;
        transition-delay: 0ms !important;
        }
        body.dark .bg-light {
        background-color: #14151a !important;
        }
        body.dark .start-header {
        box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.15);
        }
        body.dark .start-header.scroll-on {
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.15);
        }
        body.dark .nav-link{
        color: #fff !important;
        }
        body.dark .nav-item.active .nav-link{
        color: #999 !important;
        }
        body.dark .dropdown-menu {
        color: #fff;
        background-color: #1f2029;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25);
        }
        body.dark .dropdown-item {
        color: #fff;
        }
        body.dark .navbar-light .navbar-toggler-icon {
        border-bottom: 1px solid #fff;
        }
        body.dark .navbar-light .navbar-toggler-icon:after, 
        body.dark .navbar-light .navbar-toggler-icon:before{
        background-color: #fff;
        }
        body.dark .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        border-color: transparent;
        }



        /* #Media
        ================================================== */

        @media (max-width: 767px) { 
        h1{
        margin-top: 25px !important;
        font-size: 38px;
        }
        .nav-item:after{
        display: none;
        }
        .nav-item::before {
        position: absolute;
        display: block;
        top: 15px;
        left: 0;
        width: 11px;
        height: 1px;
        content: "";
        border: none;
        background-color: #000;
        vertical-align: 0;
        }
        .dropdown-toggle::after {
        position: absolute;
        display: block;
        top: 10px;
        left: -23px;
        width: 1px;
        height: 11px;
        content: "";
        border: none;
        background-color: #000;
        vertical-align: 0;
        transition: all 200ms linear;
        }
        .dropdown-toggle[aria-expanded="true"]::after{
        transform: rotate(90deg);
        opacity: 0;
        }
        .dropdown-menu {
        padding: 0 !important;
        background-color: transparent;
        box-shadow: none;
        transition: all 200ms linear;
        }
        .dropdown-toggle[aria-expanded="true"] + .dropdown-menu {
        margin-top: 10px !important;
        margin-bottom: 20px !important;
        }
        body.dark .nav-item::before {
        background-color: #fff;
        }
        body.dark .dropdown-toggle::after {
        background-color: #fff;
        }
        body.dark .dropdown-menu {
        background-color: transparent;
        box-shadow: none;
        }
        }

        /* #Link to page
        ================================================== */

        .logo {
        position: absolute;
        bottom: 30px;
        right: 30px;
        display: block;
        z-index: 100;
        transition: all 250ms linear;
        }
        .logo img {
        height: 26px;
        width: auto;
        display: block;
        filter: brightness(10%);
        transition: all 250ms linear;
        }
        body.dark .logo img {
        filter: brightness(100%);
        }
        .swiper {
        width: 100%;
        height: 100%;
        }

        .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }







        .media-icons{

        background-color: rgb(0, 0, 0);
        /* height: 88.5%; */
        align-items: center;
        width: 58px;
        /* border: 2px solid rgb(250, 0, 0); */
        z-index: 888;
        padding: 12px 0;
        position: absolute;
        /* right: 15px; */
        display: flex;
        flex-direction: column;
        transition: 0.5s ease ;
        -webkit-transition: 0.5s ease ;
        -moz-transition: 0.5s ease ;
        -ms-transition: 0.5s ease ;
        -o-transition: 0.5s ease ;

        left: 0;
        }
        .media-icons a{
        color: #fff;
        font-size: 1.6em;
        transition: 0.3s ease;
        -webkit-transition: 0.3s ease;
        -moz-transition: 0.3s ease;
        -ms-transition: 0.3s ease;
        -o-transition: 0.3s ease;
        }
        .home .media-icons a:not(:last-child){
        margin-bottom: 20px;
        }
        .home .media-icons a:hover{
        transform: scale(1.3);
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        -ms-transform: scale(1.3);
        -o-transform: scale(1.3);
        }
        .wordss-anim{
        /* height: 60%; */
        /* width: 60%; */
        /* border-top: 2px solid #fff; */
        /* margin-top: 490px;
        top: 0;
        */


        /* border-bottom: 2px solid #fff; */
        text-align: center;
        justify-content: center;
        /* height: 88.5%; */
        align-items: center;
        /* width: 58px; */
        /* border: 2px solid rgb(250, 0, 0); */
        z-index: 888;
        /* padding: 19px 0; */
        position: absolute;
        /* right: 105px; */
        right: 0;
        left: 0;
        margin-top: 290px;

        transition: 0.5s ease ;
        -webkit-transition: 0.5s ease ;
        -moz-transition: 0.5s ease ;
        -ms-transition: 0.5s ease ;
        -o-transition: 0.5s ease ;

        }
        .wordss-anim p{
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
        font-family: 'Roboto', sans-serif;

        }
        .phone_number{

        background-color: rgba(0, 0, 0, 0.377);
        /* height: 88.5%; */
        border-radius: 4px;
        width: 308px;
        justify-content: center;
        /* border: 2px solid rgb(250, 0, 0); */
        z-index: 888;
        padding: 12px 0;
        position: absolute;
        /* right: 15px; */
        display: flex;
        flex-direction: column;
        transition: 0.5s ease ;
        -webkit-transition: 0.5s ease ;
        -moz-transition: 0.5s ease ;
        -ms-transition: 0.5s ease ;
        -o-transition: 0.5s ease ;
        /* right: 0; */
        bottom: 0;
        color: rgb(0, 0, 0) !important;
        align-items: center;
        }





        /* Image Style everywone col-md-6*/

        .col-md-6 .picture img {
        width: 430px;
        display: flex;
        }
        .col-md-6 .column {
        padding: 2em;
        height: auto;
        position: relative;
        }
        .col-md-6 .desc {
        background: white;
        padding: 2em;
        margin-left: 3em;
        text-align: right;
        }
        .col-md-6 .desc h3 {
        padding-bottom: 1em;
        }


        /* Image Style everywone col-lg-4 */

        .col-lg-4 .picture img {
        width: 430px;
        display: flex;
        }
        .col-lg-4 .column {
        padding: 2em;
        height: auto;
        position: relative;
        }
        .col-lg-4 .desc {
        background: white;
        padding: 2em;
        margin-left: 3em;
        text-align: right;
        }
        .col-lg-4 .desc h3 {
        padding-bottom: 1em;
        }





        .column:hover .desc h3 {
        color: #723939;
        }
        .column:hover .desc, .column:hover .picture {
        box-shadow: 10px 10px 29px -13px rgba(0, 0, 0, 0.75);
        }
        .column::after {
        content: '';
        width: 80%;
        height: 66.5%;
        background: transparent;
        position: absolute;
        top: 13px;
        left: 40px;
        display: block;
        border: 10px solid rgb(5, 5, 5);
        z-index: -1;
        }
        @media (min-width: 1200px){
        .container {
        max-width: 1743px;
        }}
        @media screen  and (max-width:480px){
        .media-icons{
        display: none;
        }
        .wordss-anim{
        display: none;
        }
        }
        @media only screen and (max-width: 767px) {


        .media-icons{
        display: none; }

        .wordss-anim{
        display: none;
        }

        }
        @media screen and (max-width:481px){
        .col-lg-4 .picture img{
        width: 290px;
        }
        .col-lg-4 .desc h3{
        font-size: 1rem;
        }
        .col-lg-4 .desc {
        margin-left: 6em;
        }
        h1{
        font-size: 27px;

        }
        .navbar-brand img {
        height: 59px;
        }
        p{
        font-size: 21px;
        }
        .col-lg-4 .column {
        padding: 0em;
        }
        #circle{
        top: -7px;
        width: 16px;
        height: 16px;
        }
        }
        @media (min-width:481px) and (max-width:768px){
        .col-md-6 .picture img {
        width: 390px;
        height: 233px;
        display: flex;
        }
        .col-lg-4 .picture img {
        width: 350px;
        display: flex;
        height: 233px;
        }
        .col-lg-4 .desc h3 {
        padding-bottom: 0.5em;
        font-size: 1.25rem;
        }
        h1 {
        font-size: 35px;

        }
        body{
        font-size: 12px;
        }
        #switch {
        width: 40px;
        height: 8px;

        }
        #circle {
        position: absolute;
        top: -7px;
        left: -13px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #000;
        }
        .navbar-brand img {
        height: 54px;
        }

        }
        @media (min-width:769px) and (max-width:1024px){
        .col-md-6 .picture img {
        width: 300px;
        height: 210px;
        display: flex;
        }
        .col-lg-4 .picture img {
        width: 300px;
        display: flex;
        }
        .col-lg-4 .desc h3 {
        padding-bottom: 0.5em;
        font-size: 1.25rem;
        }
        h1 {
        font-size: 35px;

        }
        body{
        font-size: 12px;
        }
        #switch {
        width: 40px;
        height: 8px;

        }
        #circle {
        position: absolute;
        top: -7px;
        left: -13px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #000;
        }
        .navbar-brand img {
        height: 54px;
        }
        .col-lg-4 .desc h3{
        font-size: 1rem;
        }
        }
        @media (min-width:1025px) and (max-width:1200px){
        .col-lg-4 .picture img {
        width: 300px;
        height: 210px;
        display: flex;
        }
        h3 {

        padding-bottom: 0.7em;
        font-size: 1.15rem;
        }
        .col-lg-4{
        padding-right: 0px;
        padding-left: 0px;
        }
        .col-lg-4 .desc{
        padding: 0.4em;
        }
        .col-lg-4 .column{
        padding: 1.3em;
        }
        #circle{
        top: -7px;
        left: -13px;
        width: 17px;
        height: 17px;
        }
        #switch{
        width: 40px;
        height: 7px;
        }
        h1{
        font-size: 40px;
        }
        }
        @media (min-width:1201px) and (max-width:1400px){
        .col-lg-4 .picture img {
        width: 400px;
        height: 250px;
        }
        #circle{
        top: -7px;
        left: -13px;
        width: 16px;
        height: 16px;
        }
        #switch{
        width: 40px;
        height: 7px;
        }
        .switched #circle {
        left: 30px;
        }
        h3{
        font-size: 1rem;
        }
        .col-lg-4 .desc {

        padding: 0.5em;
        }

        }
        @media (min-width:1401px) and (max-width:1800px){
        .col-lg-4 .picture img {
        width: 400px;
        height: 250px;
        }
        h3{
        font-size: 1.5rem;
        }
        #circle{
        top: -7px;
        left: -13px;
        width: 16px;
        height: 16px;
        }
        #switch{
        width: 40px;
        height: 7px;
        }
        .switched #circle {
        left: 30px;
        }
        }
        @media (min-width:1801px) and (max-width:2400px){
        .col-lg-4 .picture img {
        width: 400px;
        height: 250px;
        }
        h3{
        font-size: 1.5rem;
        }
        #circle{
        top: -7px;
        left: -13px;
        width: 16px;
        height: 16px;
        }
        #switch{
        width: 40px;
        height: 7px;
        }
        .switched #circle {
        left: 30px;
        }
    }
    </style>
</head>
<body>
    <body class="hero-anime">	
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                        
                            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{asset('assets/logo.png')}}" alt=""></a>	
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                                            <a class="dropdown-item"
                                                href="https://myhub.autodesk360.com/ue283d8b2/g/shares/SH7f1edQT22b515c761ef57601e086f95852?mode=embed">3D
                                                AutoDesk</a>
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
                                                    Благоустройство и озеленение территорий
                                                @endif
                                                @if(\App::isLocale('en'))
                                                    Landscaping and gardening of territories
                                                @endif
                                                
                                            </a>
                                            <a class="dropdown-item" href="{{ route('portfolio') }}">
                                                @if(\App::isLocale('ru'))
                                                Общеобразовательные школы, </br>академические лицеи и профессиональные колледжи
                                                @endif
                                                @if(\App::isLocale('en'))
                                                General education schools, </br> academic lyceums and vocational colleges
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
                                                    Дошкольные образовательные учреждения
                                                @endif
                                                @if(\App::isLocale('en'))
                                                    Preschool educational institutions
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
                                                Застройка населенных пунктов
                                                @endif
                                                @if(\App::isLocale('en'))
                                                Development of settlements
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
                                                    Административные здания, офисные помещения
                                                @endif
                                                @if(\App::isLocale('en'))
                                                    Administrative buildings, office premises
                                                @endif
                                            </a>
                                            <a class="dropdown-item" href="{{ route('portfolio') }}">
                                                @if(\App::isLocale('ru'))
                                                    Банк и биржи, бизнес-центры
                                                @endif
                                                @if(\App::isLocale('en'))
                                                    Banks exchanges, business centers
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
                                                Дом отдыха и туристические комплексы
                                                @endif
                                                @if(\App::isLocale('en'))
                                                Holiday homes and tourist complexes
                                                @endif
                                            </a>
                                            <a class="dropdown-item" href="{{ route('portfolio') }}">
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
                
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">
                                        <div id="switch">
                                            <div id="circle"></div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>		
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>		
    <div class="footer">
        <div class="container-fluid align-center ">
            <div class="row">
                <!-- <div class="col-12"><p>© 2021 Контент охраняется законодательством об авторском праве</p></div> -->               
            </div>
        </div>
    </div>          
    </body>
    <script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="j{{asset('assets/s/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.js')}}"></script>    
    <script>       
/* Please ❤ this if you like it! */
(function($) { "use strict";
$(function() {
    var header = $(".start-style");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            header.removeClass("scroll-on").addClass('start-style');
        }
    });
});		    
//Animation
$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});
//Menu On Hover    
$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
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
    </script>
     <script src="{{asset('assets/texttyping.js')}}"></script>
     <script src="{{asset('assets/confetti.js')}}"></script>
    <script>

      const startit = () => {
        setTimeout(function () {
          console.log("start");
          confetti.start();
        }, 1000);
      };

      const stopit = () => {
        setTimeout(function () {
          console.log("stop");
          confetti.stop();
        }, 6000);
      };

      startit();
      stopit();
 
    </script>

  </body>
</html>