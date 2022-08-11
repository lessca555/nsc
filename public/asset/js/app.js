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

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

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

let scroll = new SmoothScroll('a[href*="#contacts"]', {
    speed: 1,
})
