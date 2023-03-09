import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import axios from 'axios'
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.intro__slider', {
  // configure Swiper to use modules
  modules: [Autoplay],
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  spaceBetween: 20,
  slidesPerView: "auto",
  breakpoints: {
    0: {
      spaceBetween: 0
    },
    860: {
      spaceBetween: 20
    }
  }

});

const detailSlider = new Swiper('.detail__slider-inner', {
  // configure Swiper to use modules
  modules: [Autoplay, Navigation],
  loop: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },
  spaceBetween: 0,
  slidesPerView: 1,
  navigation: {
    nextEl: '.detail__next',
    prevEl: '.detail__prev'
  },
  autoHeight: true

});




const heroSlider = new Swiper('.hero__slider-inner', {
  // configure Swiper to use modules
  modules: [Autoplay, Navigation],
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  spaceBetween: 0,
  slidesPerView: "auto",
  breakpoints: {

  },
  navigation: {
    nextEl: '.hero-next',
    prevEl: '.hero-prev'
  }

});

const productSlider = new Swiper('.product__slider-inner', {
  // configure Swiper to use modules
  modules: [Navigation, Autoplay],
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  spaceBetween: 40,
  slidesPerView: 4,
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 2,
    },
    860: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1025: {
      slidesPerView: 4,
    }
  },
  navigation: {
    prevEl: '.product__slider-prev',
    nextEl: '.product__slider-next',
  },

});

const caseSlider = new Swiper('.product__slider-case-inner', {
  // configure Swiper to use modules
  modules: [Navigation, Autoplay],
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  spaceBetween: 40,
  slidesPerView: 4,
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 2,
    },
    860: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1025: {
      slidesPerView: 4,
    }
  },
  navigation: {
    prevEl: '.product__slider-case-prev',
    nextEl: '.product__slider-case-next',
  },

});

const access = new Swiper('.product__slider-access-inner', {
  // configure Swiper to use modules
  modules: [Navigation, Autoplay],
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  spaceBetween: 40,
  slidesPerView: 4,
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 2,
    },
    860: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1025: {
      slidesPerView: 4,
    }
  },
  navigation: {
    prevEl: '.product__slider-access-prev',
    nextEl: '.product__slider-access-next',
  },

});



if (colors) {
  const btns = document.querySelectorAll('.color__picker-item');
  btns[0].classList.add('active')


  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      for (let i = 0; i < btns.length; i++) {
        if (btns[i].classList[1] == 'active') {
          btns[i].classList.remove('active')
        }
      }
      btn.classList.add('active')
      changePicker()
    })
  });


  function changePicker() {
    let active_id = document.querySelector('.color__picker-item.active')
    let item = colors.find((item) => item.id == active_id.dataset.id)
    let block = document.querySelector('.color__wrapper');

    if (block.querySelector('input').value != item.id) {
      block.querySelector('input').value = item.id


      if (item.type) {
        block.querySelector('.color__images-main>a').href = `/${item.video}`
        block.querySelector('.color__images-main>a').classList.add('video')
        block.querySelector('.color__images-main>a>img').src = `/${item.preview}`
      } else {
        block.querySelector('.color__images-main>a').href = `/${item.video}`
        block.querySelector('.color__images-main>a').classList.remove('video')
        block.querySelector('.color__images-main>a>img').src = `/${item.video}`
      }



      block.querySelectorAll('.color__images-grid>a').forEach((img, index) => {
        index == 0 ? img.href = `/${item.image1}` : ''
        index == 0 ? img.querySelector('img').src = `/${item.image1}` : ''

        index == 1 ? img.href = `/${item.image2}` : ''
        index == 1 ? img.querySelector('img').src = `/${item.image2}` : ''

        index == 2 ? img.href = `/${item.image3}` : ''
        index == 2 ? img.querySelector('img').src = `/${item.image3}` : ''

        index == 3 ? img.href = `/${item.image4}` : ''
        index == 3 ? img.querySelector('img').src = `/${item.image4}` : ''
      })

      block.querySelector('span').innerText = item.title
      block.querySelector('span').style.color = item.code



    }
  }
}





[].forEach.call(document.querySelectorAll('.number'), function (input) {
  let keyCode;
  function mask(event) {
    event.keyCode && (keyCode = event.keyCode);
    let pos = this.selectionStart;
    if (pos < 3) event.preventDefault();
    let matrix = "+7 (___) ___-__-__",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, ""),
      newValue = matrix.replace(/[_\d]/g, function (a) {
        return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
      });
    i = newValue.indexOf("_");
    if (i != -1) {
      i < 5 && (i = 3);
      newValue = newValue.slice(0, i);
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
      function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
    if (event.type == "blur" && this.value.length < 5) this.value = "";
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});




const defaultModalsBtn = document.querySelectorAll('.form-default')

defaultModalsBtn.forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelector('.modal').classList.add('active')
    document.addEventListener('click', closeModalDefault)

    document.querySelector('.modal__wrapper').addEventListener('submit', sendModalDefault)


  })
});

function closeModalDefault(e) {
  if (e.target.classList[0] == 'modal' || e.target.classList[0] == 'close' || e.target.classList[1] == 'close') {
    document.querySelector('.modal').classList.remove('active')
    document.removeEventListener('click', closeModalDefault)
    document.querySelector('.modal button').removeEventListener('click', sendModalDefault)
    document.querySelector('.modal').classList.remove('success')
    document.querySelector('.modal').classList.remove('question')
  }
}

async function sendModalDefault(e) {
  e.preventDefault();
  let modal = document.querySelector('.modal__wrapper')
  modal.querySelector('.error').classList.remove('active')
  let data = {
    number: modal.querySelector('.number').value,
    title: modal.querySelector('input:first-child').value,
    checkbox: modal.querySelector('.checkbox input').checked,
    comment: modal.querySelector('.modal__item.comment>textarea').value
  };


  console.log(data);

  if (!data.checkbox) {
    return modal.querySelector('.error').classList.add('active')
  }

  let res = await axios.post('/send', { data: data })
  if (res.status == 200) {
    return successSend()
  }

}

function successSend() {
  document.querySelector('.modal__product').classList.remove('active')
  document.querySelector('.modal').classList.remove('active')
  document.querySelector('.modal-buy').classList.remove('active')
  document.querySelector('.modal').classList.add('success')
  document.querySelector('.modal').classList.add('active')

  document.addEventListener('click', closeModalDefault)
  document.addEventListener('click', closeModalProduct)
}



let buyBtns = document.querySelectorAll('.buy')

buyBtns.forEach((btn) => {
  btn.addEventListener('click', async (e) => {

    let id = btn.dataset.id
    const modal = document.querySelector('.modal__product')
    modal.classList.add('active')

    let product = await axios.post('/product', { id: id })
    let dataProduct = null;
    if (product.status == 200) {
      dataProduct = product.data
    }
    modal.querySelector('.product-title').innerText = dataProduct.title
    modal.querySelector('.product-image').src = `/${dataProduct.image}`
    modal.querySelector('.product-color').innerText = dataProduct.color.title
    modal.querySelector('.product-color').style.color = dataProduct.color.code
    modal.querySelector('.product-description').innerText = dataProduct.description + 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti molestias consectetur commodi nobis tempore nulla ipsa, et quasi, sequi repudiandae optio deleniti ducimus aliquid adipisci perferendis aliquam magni quis iste harum eos minima rem? Culpa ducimus libero asperiores esse. Omnis vero iste consequuntur explicabo beatae provident, suscipit dolorum! Labore ex porro voluptates iusto vero odit maxime, recusandae quidem, perspiciatis repudiandae aspernatur quia ipsum ipsam eius sequi accusantium repellendus, quod veniam omnis modi quas praesentium consequatur facere. In velit impedit fugit eius minus laudantium reiciendis natus? Pariatur id voluptas dolorem, ullam distinctio fugiat ea fuga harum aperiam eveniet magni perspiciatis explicabo.'
    document.addEventListener('click', closeModalProduct)
    document.querySelector('.modal__product-text-row button').addEventListener('click', () => openModalProductSend(dataProduct))
  })
})


function closeModalProduct(e) {
  if (e.target.classList[0] == 'modal__product' || e.target.classList[0] == 'close' || e.target.classList[1] == 'close') {
    document.querySelector('.modal__product').classList.remove('active')
    document.removeEventListener('click', closeModalProduct)
    document.querySelector('.modal__product').classList.remove('success')
  }
}

function closeModalProductSend(e) {
  if (e.target.classList[0] == 'modal-buy' || e.target.classList[0] == 'close' || e.target.classList[1] == 'close') {
    document.querySelector('.modal-buy').classList.remove('active')
    document.removeEventListener('click', closeModalProductSend)
    document.querySelector('.modal-buy').classList.remove('success')
  }
}


function openModalProductSend(data) {
  const modal = document.querySelector('.modal-buy')
  modal.classList.add('active')
  document.addEventListener('click', closeModalProductSend)

  document.addEventListener('submit', (e) => sendModalProduct(e, data))
}


async function sendModalProduct(e, data) {
  e.preventDefault();
  let modal = document.querySelector('.modal-buy')
  modal.querySelector('.error').classList.remove('active')
  let info = {
    number: modal.querySelector('.number').value,
    title: modal.querySelector('input:first-child').value,
    checkbox: modal.querySelector('.checkbox input').checked,
    pay: modal.querySelector('input[name="pay"]:checked').value,
    product: data.title
  };
  if (!info.checkbox) {
    return modal.querySelector('.error').classList.add('active')
  }

  if (info.pay == '0') {
    // not payment for bank
    let res = await axios.post('/send', { data: info })
    if (res.status == 200) {
      console.log(res.data);
      return successSend()
    }
  }
}




document.querySelector('.form__wrapper').addEventListener('submit', async (e) => {
  e.preventDefault();
  let form = document.querySelector('.form__wrapper')

  form.querySelector('.error').classList.remove('active')
  let info = {
    number: form.querySelector('.number').value,
    title: form.querySelector('input:first-child').value,
    checkbox: form.querySelector('input[type=checkbox]').checked
  };
  if (!info.checkbox) {
    return form.querySelector('.error').classList.add('active')
  }

  let res = await axios.post('/send', { data: info })
  if (res.status == 200) {
    form.querySelector('.number').value = ''
    form.querySelector('input:first-child').value = ''
    return successSend()
  }

})

let btnsPopup = document.querySelectorAll('button')
btnsPopup.forEach(btn => {
  if (btn.dataset.modal == 'true') {
    btn.addEventListener('click', () => (openModalPopUp(btn)))
  }
});



function closeModalPop(e) {
  if (e.target.classList[0] == 'modal-pop' || e.target.classList[0] == 'close' || e.target.classList[0] == 'modal__close') {
    document.querySelector('.modal-pop').classList.remove('active')
    document.removeEventListener('click', closeModalPop)
  }
}


function openModalPopUp(btn) {
  let modal = document.querySelector('.modal-pop');
  modal.classList.add('active')
  document.addEventListener('click', closeModalPop)

  modal.querySelector('.modal__title').innerText = btn.dataset.title
  modal.querySelector('.modal__description').innerHTML = btn.dataset.description
  modal.querySelector('.modal__image').src = btn.dataset.image

}


document.getElementById('questionModal').addEventListener('click', () => {
  document.querySelector('.modal').classList.add('question')
})

if (document.querySelector('.instagram__photos')) {
  let photos_block = document.querySelector('.instagram__photos')

  window.addEventListener("load", async () => {
    let res = await axios.get('/inst/insta-token-check/get')
    if (res.data.status == 200) {

      res.data.data.forEach(photo => {
        photos_block.innerHTML = photos_block.innerHTML + `<a href="${photo.image_url}" target="_blank"><img src="${photo.image}" alt=""></a>`
      });
    }
  });
}