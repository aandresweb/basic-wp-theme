jQuery(function ($) {
  new Swiper(".swiper", {
    // Optional parameters
    speed: 1000,
    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: ".banner-slider-next",
      prevEl: ".banner-slider-prev",
    },

    autoHeight: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
  });

  $(".toggle-button").click(function () {
    $(".nav-mobile").slideToggle();
    $(".toggle-button").toggleClass("active");
  });

  AOS.init();
});
