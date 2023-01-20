import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.intro__slider', {
  // configure Swiper to use modules
  modules: [Navigation, Pagination],
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
