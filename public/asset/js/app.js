$('.count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

console.log('tes');

let swiper = new Swiper(".swiper", {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

let swiper_product = new Swiper(".swiper-prod", {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination-prod",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next-prod",
      prevEl: ".swiper-button-prev-prod",
    },
});

let swiper_service = new Swiper(".swiper-service", {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination-serv",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next-serv",
      prevEl: ".swiper-button-prev-serv",
    },
});
