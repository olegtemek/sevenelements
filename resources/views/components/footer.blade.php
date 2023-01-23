<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__column">
        <a href="/" class="footer__logo">
          <svg class="icon">
            <use xlink:href="#logo"></use>
          </svg>
        </a>

        <div class="footer__column-icons">
          <a href="{{$contacts->instagram}}" target="_blank" class="svg insta"><svg class="icon">
            <use xlink:href="#insta"></use>
          </svg></a>
          <a href="{{$contacts->facebook}}" target="_blank" class="svg face"><svg class="icon">
            <use xlink:href="#face"></use>
          </svg></a>
          <a href="https://wa.me/{{$contacts->number_whatsapp}}?text=Здравствуйте" target="_blank" class="svg what"><svg class="icon">
            <use xlink:href="#what"></use>
          </svg></a>
        </div>
      </div>
      <div class="footer__column">
        <a href="#">Задать вопрос</a>
        <a href="#">Шоурум</a>
        <a href="#cases">Кейсы</a>
      </div>
      <div class="footer__column">
        <a href="#">Доставка</a>
        <a href="#">Договор оферты</a>
      </div>

      <div class="footer__column">
        <p class="link-svg"><svg class="icon">
          <use xlink:href="#map"></use>
        </svg> {{$contacts->address}}</p>
        <a href="tel:{{$contacts->number}}" class="link-svg"><svg class="icon">
          <use xlink:href="#call"></use>
        </svg>{{$contacts->number}}</a>
        <a href="mailto:{{$contacts->email}}" class="link-svg"><svg class="icon">
          <use xlink:href="#mail"></use>
        </svg>{{$contacts->email}}</a>
      </div>
    </div>
  </div>
</footer>