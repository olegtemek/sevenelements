<section class="intro">
  <div class="intro__slider-outter">
    <div class="intro__slider">
      <div class="swiper-wrapper">
        @foreach ($intros as $item)
        <div class="swiper-slide"><img src="/{{$item->image}}" alt=""></div>
        @endforeach
      </div>
      
    </div>
    
  </div>
  <div class="intro__block">
    <h1 class="jost">Seven Elements bags</h1>
    <p>Для тех, чья профессия — это стиль жизни</p>
  </div>
</section>