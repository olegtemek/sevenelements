<div class="modal">
  <form class="modal__wrapper">
    <span class="close">&#9587;</span>
    <h2 class="jost">Оставить заявку</h2>
    <p>Мы свяжемся с вами в течение 30 минут</p>

    <div class="modal__item">
      <input type="text" placeholder="Ваше имя" name="name" required >
    </div>
    <div class="modal__item">
      <input type="text" class="number" placeholder="Телефон" name="number" required>
    </div>

    <div class="modal__item comment">
      <textarea name="comment" placeholder="Вопрос"></textarea>
    </div>

    <div class="checkbox">
      <span class="error">Это поле обязательно</span>
      <input type="checkbox" id="agree" checked>
      <label for="agree" class="valid">Даю согласие на обработку персональных данных</label>
    </div>

    <button class="btn" type="submit">Отправить</button>
  </form>

  <div class="modal__wrapper-success">
    <span class="close">&#9587;</span>
    <svg class="icon">
      <use xlink:href="#heart"></use>
    </svg>
    <h2 class="jost">ваша заявка
      принята!</h2>
      <p>Мы вам перезвоним</p>
    <button class="btn close">Ок</button>
  </div>
</div>



<div class="modal__product">
  <div class="modal__product-wrapper">
    <span class="close">&#9587;</span>

    <img src="" alt="Product buy" class="product-image">
    <div class="modal__product-text">
      <h2 class="product-title jost"></h2>
      <div class="modal__product-text-row">
        <button class="btn">Купить</button>
        <p class="jost">Цвет: <span class="product-color"></span></p>
      </div>

      <p class="product-description"></p>
    </div>

  </div>
</div>



<div class="modal-buy">
  <form class="modal__wrapper">
    <span class="close">&#9587;</span>
    <h2 class="jost">Заказать</h2>
    <p>Мы свяжемся с вами в течение 30 минут</p>

    <div class="modal__item">
      <input type="text" placeholder="Ваше имя" name="name" required >
    </div>
    <div class="modal__item">
      <input type="text" class="number" placeholder="Телефон" name="number" required>
    </div>

    <div class="select">
      <p>
        <input type="radio" id="pay" value="0" name="pay" checked>
        <label for="pay">Наличными</label>
      </p>
      {{-- <p>
        <input type="radio"  value="1" id="pay1" name="pay">
        <label for="pay1">Онлайн оплата</label>
      </p> --}}
    </div>

    <div class="checkbox">
      <span class="error">Это поле обязательно</span>
      <input type="checkbox" id="agreeBuy" checked>
      <label for="agreeBuy" class="valid" >Даю согласие на обработку персональных данных</label>
    </div>

    

    <button class="btn" type="submit">Отправить</button>
  </form>
</div>







<div class="modal-pop">
  <div class="modal__wrapper-pop">
    <div class="modal__close">
      <span class="close">&#9587;</span>
    </div>
    <img src="" alt="" class="modal__image">
    <h2 class="modal__title"></h2>
    <div class="modal__description">
      
    </div>
  </div>
</div>