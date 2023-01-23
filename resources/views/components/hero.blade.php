<section class="hero">
  <div class="container">
    <h2 class="title">Наши герои</h2>
    <div class="hero__slider">
      <div class="swiper hero__slider-inner">
        <div class="swiper-wrapper">
          @foreach ($heroes as $item)
            <div class="swiper-slide">
              <div class="swiper-slide-main">
                <a href="/{{$item->image1}}" data-fancybox>
                  <img src="/{{$item->image1}}" alt="{{$item->name}}"></a>
              </div>
              <div class="swiper-slide-text">
                <div class="swiper-slide-text-row">
                  <h2 class="jost">{{$item->name}}</h2>
                  <p class="jost">Цвет: <span style="color:{{$item->color->code}};">{{$item->color->title}}</span></p>
                </div>
                <span><svg class="icon">
                  <use xlink:href="#human"></use>
                </svg> {{$item->pos}}</span>
                <p>{!!$item->description!!}</p>

                <div class="swiper-slide-text-images">
                  <a href="/{{$item->image2}}" data-fancybox>
                    <img src="/{{$item->image2}}" alt="{{$item->name . 'Image2'}}">
                  </a>
                  <a href="/{{$item->image3}}" data-fancybox>
                    <img src="/{{$item->image3}}" alt="{{$item->name . 'Image3'}}">
                  </a>
                  <a href="/{{$item->image4}}" data-fancybox>
                    <img src="/{{$item->image4}}" alt="{{$item->name . 'Image4'}}">
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="navigation">
        <div class="btn-prev hero-prev"></div>
        <div class="btn-next hero-next"></div>
      </div>
    </div>
  </div>
</section>