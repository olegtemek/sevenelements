<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <a href="/" class="header__logo">
        <svg class="icon">
          <use xlink:href="#logo"></use>
        </svg>
      </a>
      <div class="header__menu">
        <div class="header__menu-number">
          <a href="https://wa.me/{{$contacts->number_whatsapp}}?text=Здравствуйте" class="whatsapp" target="_blank"><svg class="icon">
            <use xlink:href="#header-whatsapp"></use>
          </svg></a>
          <a href="tel:{{$contacts->number}}" class="number">{{$contacts->number}}</a>
        </div>

        <div class="header__menu-icons">
          <a href="{{$contacts->instagram}}" target="_blank" class="svg insta"><svg class="icon">
            <use xlink:href="#insta"></use>
          </svg></a>
          <a href="{{$contacts->facebook}}" target="_blank" class="svg face"><svg class="icon">
            <use xlink:href="#face"></use>
          </svg></a>
        </div>
        <button class="btn form-default">Оставить заявку</button>
      </div>
    </div>
  </div>
</header>