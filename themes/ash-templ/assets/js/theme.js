import { Swiper, EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel } from 'swiper'
Swiper.use([EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel])

import { gsap, Power2 } from 'gsap'

import MicroModal from 'micromodal'

// Import October CMS System Framework (requires jQuery)
import '~/modules/system/assets/js/framework.js'
import '~/modules/system/assets/js/framework.extras.js'
import './lib/lib.js'
import Ash from './lib/core.js'


// Import October CMS System Framework (requires jQuery)
import '~/modules/system/assets/js/framework.js'
import '~/modules/system/assets/js/framework.extras.js'


// Plugins

document.addEventListener('DOMContentLoaded', () => {


  let popupAlert = document.querySelector('.popup-form-alert')

  MicroModal.init({
    openTrigger: 'data-micromodal-open',
    closeTrigger: 'data-micromodal-close',
    disableScroll: true,
    disableFocus: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
    onClose: function() {
      popupAlert.innerHTML = ''
    }
  })

  const offer = new Swiper('.offer__wrapper', {
    loop: true,
    autoplay: true,
    speed: 1400,
    // setWrapperSize: true,
    slidesPerView: 4,
    spaceBetween: 10,
    breakpoints: {
      340: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      }

    },
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next'
    },
    pagination: {
      el: '.offer__swiper-pagination',
      clickable: true
    },

  });



  // Top-menu
  Ash('.menu-wrapper__btn').click(function () {
    Ash('.menu-mobile').toggleClass('menu-mobile__active')
  });



  const swiperIMG = new Swiper('.slider-img', {
    loop: false,
    speed: 2400,
    parallax: true,
    mousewheel: {
      invert: false,
    },
    pagination: {
      el: '.slider-pagination-count .total',
      type: 'custom',
      renderCustom: function (swiper, current, total) {
        let totalRes = total >= 10 ? total : `0${total}`
        return totalRes
      }
    }
  })
  const swiperText = new Swiper('.slider-text', {
    loop: false,
    speed: 2400,
    // mousewheel: {
    //   invert: false,
    // },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true
    },
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next'
    }
  })

  const feedback = new Swiper('.feedback__wrapper', {
    loop: true,
    speed: 1400,
    spaceBetween: 100,
    mousewheel: {
      invert: false,
    },
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next'
    },
    pagination: {
      el: '.feedback__swiper-pagination',
      clickable: true
    },
  });

  swiperIMG.controller.control = swiperText
  swiperText.controller.control = swiperIMG

  let curnum = document.querySelector('.current'),
    pagcur = document.querySelector('.slider-pagination-current'),
    gear   = document.querySelector('.slider-gear')

  swiperText.on('slideChange', function () {
    let ind = swiperText.realIndex + 1
    gsap.to(curnum, .2, {
      force3D: true,
      y: -10,
      opacity: 0,
      ease: Power2.easeOut,
      onComplete: function () {
        gsap.to(curnum, 0.1, {
          force3D: true,
          y: 10
        })
        curnum.innerHTML = `0${ind}`
        pagcur.innerHTML = `0${ind}<span class="slider-pagination-current__dot">.</span>`
      }
    })
    gsap.to(curnum, .2, {
      force3D: true,
      y: 0,
      delay: 0.3,
      opacity: 1,
      ease: Power2.easeOut
    })

  })

  swiperText.on('slideNextTransitionStart', function () {
    gsap.to(gear, 2.8, {
      rotation: '+=45',
      ease: Power2.easeOut
    })
  })

  swiperText.on('slidePrevTransitionStart', function () {
    gsap.to(gear, 2.8, {
      rotation: '-=45',
      ease: Power2.easeOut
    })
  })
// галерея портфолио на главной
//   lightGallery(document.getElementById('lightgallery'));


  // // modal
  // Ash('[data-toggle="modal"]').modal();
  //
  // //tab
  // Ash('[data-tabpanel] .tab-item').tab();
  //
  // //accordion
  // Ash('.accordion-head').accordion();

})
