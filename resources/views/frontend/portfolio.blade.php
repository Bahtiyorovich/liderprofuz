@extends('frontend.portfolio_ours.index')
@section('content')
<div class="section">
    <div class="absolute-center">
        <div class="section mt-5">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-12 mt-5">
            <h1 class="mt-5"><span>L</span><span>i</span><span>d</span><span>e</span><span>r</span> <span>P</span><span>r</span><span>o</span><span>f</span>                     <span>P</span><span>r</span><span>o</span><span>e</span><span>k</span><span>t</span></h1>
            <p style="font-weight: 700;
            font-size: 26px;">Наши Проекты</p>	
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
<div class="">
    <div class="media-icons position-fixed	">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-telegram"></i></a>
    </div>
    <div class="wordss-anim position-fixed">
        <p id="typedtext">
            <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
        </p> 
    </div>

<div class="container ">
    
    <div class="row align-items-center justify-content-center text-center">
        
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
            <!-- Swiper -->
            <div class='column'>
                <div class='picture'>
                    <img src="{{asset('assets/2020-2021/adminstratpravzdan/ekster/6 rsz.jpg')}}" alt="">
                </div>
                <div class='desc'>
                    <h3>Админстративно-правительственное здание</h3>
                </div>
            </div> 
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
                <!-- Swiper -->
                <div class='column'>
                <div class='picture'>
                    <img src="{{asset('assets/2020-2021/kinotetrpremerHall/eksterer/fasadpremierhall _View12srsz.jpg')}}" alt="">
                </div>
                <div class='desc'>
                    <h3>Кинотеатр Премьер Холл (PREMIER HALL CINEMA)</h3>
                </div>
                </div> 
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
            <!-- Swiper -->
            <div class='column '>
                <div class='picture'>
                <img src="{{asset('assets/2020-2021/adminspravzdan2/eksterer/001 rsz.jpg')}}" alt="">
                </div>
                <div class='desc'>
                <h3>Админстративно-правительственное здание</h3>
                
                </div>
            </div> 
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
            <!-- Swiper -->
            <div class='column'>
                <div class='picture'>
                    <img src="{{asset('assets/2020-2021/ofisniezdanye/ekster/5 fotoshop rsz.jpg')}}" alt="">
                </div>
                <div class='desc'>
                    <h3>Офисное здание</h3>
                </div>
            </div> 
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
            <!-- Swiper -->
            <div class='column'>
            <div class='picture'>
                <img src="{{asset('assets/2020-2021/predppromishl/ekster/В (8) rsz.png')}}">
            </div>
            <div class='desc'>
                <h3>Предприятия строительной промышленности</h3>
            </div>
            </div> 
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('sector') }}" style="text-decoration: none;color: black;">
            <!-- Swiper -->
            <div class='column '>
                <div class='picture'>
                <img src="{{asset('assets/2020-2021/tipProektShkola/sovremshkol580/ekster/009 (5) rsz.jpg')}}" alt="">
                </div>
                <div class='desc'>
                <h3>Типовые проекты по программу современная школа(528 места)</h3>
                
                </div>
            </div> 
            </a>
        </div>
    </div>
    <div class="row ">
    </div>
    <div class="row ">                
    </div>
    <div class="row ">            
    </div>
    <div class="row ">                  
    </div>         
</div>     
@endsection