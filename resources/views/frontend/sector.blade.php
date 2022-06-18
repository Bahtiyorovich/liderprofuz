@extends('frontend.portfolio_ours.index')
@section('content')
<div class="section ">
    <div class="absolute-center">
        <div class="section mt-5">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-12 mt-5">
            <h1 class="mt-5"><span>L</span><span>i</span><span>d</span><span>e</span><span>r</span> <span>P</span><span>r</span><span>o</span><span>f</span>                     <span>P</span><span>r</span><span>o</span><span>e</span><span>k</span><span>t</span></h1>
            <p style="font-weight: 700;
            font-size: 26px;">Админстративно-правительственное здание</p>	
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

<!-- Link to page
================================================== -->


<div class="">
    <div class="media-icons position-fixed 	">


        <a href="#" class="pb-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="pb-2"><i class="fab fa-instagram"></i></a>
        <a href="#" class="pb-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="pb-2"><i class="fab fa-telegram"></i></a>
  
    
    </div>
    <div class="wordss-anim position-fixed">
        <p id="typedtext">
            <!-- Архитектура, проектирование,<br/> дизайн и строительство в Узбекистане -->
        </p>
       
    </div>

<div class="container">
    
    <div class="row pl-lg-2 pr-lg-2 pl-xl-4 pr-xl-4">
        
        <div class="col-sm-12 col-md-6 ">
       
      <!-- Swiper -->
      <div class='column'>
        <div class='picture'>
          <img src="{{asset('assets/2020-2021/kinotetrpremerHall/eksterer/View09s.jpg')}}" alt="">
        </div>
        <a href="{{ route('project') }}" style="text-decoration: none;">
        <div class='desc'>
          <h3>Экстерьер</h3>
        </div>
    </a>
      </div> 
    
    </div>
    <div class="col-sm-12 col-md-6 ">
    
        <!-- Swiper -->
        <div class='column'>
          <div class='picture'>
            <img src="{{asset('assets/2020-2021/kinotetrpremerHall/interer/faye/holl_View01 rsz.jpg')}}" alt="">
          </div>
          <a href="{{ route('project') }}" style="text-decoration: none;">
          <div class='desc'>
            <h3>Интерьер</h3>
          </div>
        </a>
        </div> 
     
       </div>
       
    </div>

</div>

</div>

<div class="footer">
<div class="container-fluid align-center ">
    <div class="row">
        <div class="col-12"><p>© 2021 Контент охраняется законодательством об авторском праве</p></div>       
    </div>
</div>
</div>
@endsection