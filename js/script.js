    //import Swiper from 'swiper/swiper-bundle.esm.js';
    //import 'swiper/swiper-bundle.css';
    let swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      spaceBetween: 10,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
