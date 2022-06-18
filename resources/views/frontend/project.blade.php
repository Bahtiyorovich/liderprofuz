@extends('frontend.portfolio_ours.index')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}"  />

<div class="section ">
    <div class="absolute-center">
        <div class="section mt-5">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-12 mt-5">
            <h1 class="mt-5"><span>L</span><span>i</span><span>d</span><span>e</span><span>r</span> <span>P</span><span>r</span><span>o</span><span>f</span>                     <span>P</span><span>r</span><span>o</span><span>e</span><span>k</span><span>t</span></h1>
            <p style="font-weight: 700;
            font-size: 18px;">Админстративно-правительственное здание(Экстерьер)</p>	
                    </div>	
                </div>		
            </div>		
        </div>
        <div class="section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>	
                </div>		
            </div>			
        </div>
    </div>
</div>
<div class="my-5 py-5">
</div>
<div class="container-fluid">
    <div class="media-icons position-absolute	">


        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-telegram"></i></a>
  
    
    </div>
    <div class="wordss-anim">
        <p id="typedtext">
            <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
        </p>
       
    </div>

<div class="container">
    
    <div class="row">
    
        <div class="col-md-12">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/1 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/2 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/3 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/4 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/5 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/6 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/7 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/8 rsz.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/9 rsz.jpg')}}" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
        </div>
    
    </div>
</div>
</div>


<div class="footer">
<div class="container align-center ">
    <div class="row text-center">
        <div class="col-md-6 text-center"><p>© 2021 Контент охраняется законодательством об авторском праве</p></div>
            <div class="col-md-3">
               <div class="d-flex align-items-center justify-content-center text-center">
               <p>
                <a class="d-flex align-items-center justify-content-center text-center text-decoration-none text" href="#"><i class="fas fa-phone"></i>
                    <p>+998-71-244-41-96</p></a> 
                    </p>
               </div>
               
              </div>
            <div class="col-md-3">
               <div class="d-flex align-items-center justify-content-center text-center">
               <p>
                <a class="d-flex align-items-center justify-content-center text-center text-decoration-none text" href="#"><i class="fas fa-phone"></i>
                    <p>+998-71-244-41-95</p></a>
                    </p>
               </div>
               
            </div>
    </div>
</div>
</div>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop:false,
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            270: {
                simulateTouch:false,                 
        loop: false,
        noSwiping: true,
    noSwipingClass: 'swiper-slide',
                    },
                320: {
                    simulateTouch:false,                 
        loop: false,
        noSwiping: true,
    noSwipingClass: 'swiper-slide',
                    },
        // when window width is >= 480px
        480: {
            simulateTouch:false,                 
        loop: false,
        noSwiping: true,
    noSwipingClass: 'swiper-slide',
        },
            640: {
                simulateTouch:false,                 
        loop: false,
        noSwiping: true,
    noSwipingClass: 'swiper-slide',
            },
            768: {
                simulateTouch:false,                 
        loop: false,
        noSwiping: true,
    noSwipingClass: 'swiper-slide',
            },
        
        },
        });

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
@endsection