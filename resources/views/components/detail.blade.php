<section class="detail">
  <div class="container">
    <h2 class="title">Главное в деталях</h2>
    <div class="detail__slider">
      <div class="swiper detail__slider-inner">
        <div class="swiper-wrapper">
          @foreach ($details as $item)
              <div class="swiper-slide">
                <div class="swiper-slide-left">
                  <a href="/{{$item->image}}" data-fancybox><img src="/{{$item->image}}" alt="{{$item->title}}"></a>
                </div>
                <div class="swiper-slide-right">
                  <h3 class="jost">{{$item->title}}</h3>
                  <div class="swiper-slide-block swiper-slide-block-top">
                    {!! $item->description !!}
                  </div>
                  <div class="swiper-slide-block-row">
                    <div class="swiper-slide-block-bottom">
                      {!! $item->description1 !!}
                    </div>
                    <div class="swiper-slide-block-bottom">
                      {!! $item->description2 !!}
                    </div>
                  </div>
                </div>
                
              </div>
          @endforeach
        </div>
      </div>
      <div class="btn-prev detail__prev"></div>
      <div class="btn-next detail__next"></div>
      
    </div>
  </div>
</section>