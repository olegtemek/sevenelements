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
</section>