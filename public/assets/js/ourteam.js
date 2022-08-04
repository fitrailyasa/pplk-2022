var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    autoplay:true,
    speed:300,
    spaceBetween: 20,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
  
    breakpoints:{
        300: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    },
    });