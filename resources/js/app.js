import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.intro__slider', {
  // configure Swiper to use modules
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  autoplay: {
    delay: 2500,
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
        console.log(item);
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
