<section class="product">
  <div class="container">

    @if ($bags->count() != 0)
    <h2 class="title">Сумки</h2>
    <div class="product__slider">
      <div class="swiper product__slider-inner">
        <div class="swiper-wrapper">
          @foreach ($bags as $item)
            <div class="swiper-slide buy" data-id="{{$item->id}}">
              <img src="/{{$item->image}}" alt="{{$item->text}}">  
              <p>Подробнее »</p>
            </div>

          @endforeach
        </div>
      </div>

      <div class="product__slider-prev btn-prev"></div>
      <div class="product__slider-next btn-next"></div>
    </div>
    @endif

    

    @if ($cases->count() != 0)
    <h2 class="title">Чехлы</h2>
    <div class="product__slider">
      <div class="swiper product__slider-case-inner">
        <div class="swiper-wrapper">
          @foreach ($cases as $item)
            <div class="swiper-slide buy"  data-id="{{$item->id}}">
              <img src="/{{$item->image}}" alt="{{$item->text}}">  
              <p>Подробнее »</p>
            </div>

          @endforeach
        </div>
      </div>

      <div class="product__slider-case-prev btn-prev"></div>
      <div class="product__slider-case-next btn-next"></div>
    </div>    
    @endif

    
    @if ($access->count() != 0)
    <h2 class="title">Аксессуары</h2>
    <div class="product__slider">
      <div class="swiper product__slider-access-inner">
        <div class="swiper-wrapper">
          @foreach ($access as $item)
            <div class="swiper-slide buy" data-id="{{$item->id}}">
              <img src="/{{$item->image}}" alt="{{$item->text}}">  
              <p>Подробнее »</p>
            </div>

          @endforeach
        </div>
      </div>

      <div class="product__slider-access-prev btn-prev"></div>
      <div class="product__slider-access-next btn-next"></div>
    </div>
    @endif

    
  </div>
</section>