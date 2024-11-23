const swiperElement = document.querySelector(
  ".accounting-solutions .swiper-container"
);
const swiperWrapper = swiperElement.querySelector(".swiper-wrapper");

const swiperSlides = swiperElement.querySelectorAll(".swiper-slide");
swiperSlides.forEach((slide, _) => {
  const clonedSlide = slide.cloneNode(true);
  swiperWrapper.appendChild(clonedSlide);
});

const swiper = new Swiper(swiperElement, {
  slidesPerView: "auto",
  spaceBetween: 10,
  autoplay: {
    delay: 8000,
  },
  loop: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    640: {  
      slidesPerView: 1.5,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

function equalizeHeights() {
  const slides = document.querySelectorAll(
    ".accounting-solutions .swiper-slide"
  );

  let maxHeight = 0;
  slides.forEach((slide) => {
    const height = slide.offsetHeight;
    if (height > maxHeight) maxHeight = height;
  });

  slides.forEach((slide) => {
    slide.style.height = `${maxHeight}px`;
  });
}

window.addEventListener("load", equalizeHeights);
window.addEventListener("resize", equalizeHeights);

function scrollTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

var body = document.querySelector("body");

function openMenu() {
  var element = document.querySelectorAll(".menu-items");
  element.forEach(function (el) {
    el.classList.add("openned");
  });
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeMenu() {
  var close = document.querySelectorAll(".menu-items");
  close.forEach(function (item) {
    item.classList.remove("openned");
  });
  body.classList.remove("overflow-hidden");
}

function openModal(){
  var modal = document.querySelectorAll(".contact-us-modal");
  modal.forEach(function(item){
    item.classList.add("openned");
  })
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeModal(){
  var modal = document.querySelectorAll(".contact-us-modal");
  modal.forEach(function(item){
    item.classList.remove("openned");
  })
  body.classList.remove("overflow-hidden");
}

document.addEventListener("DOMContentLoaded", function () {
  var menuModal = document.querySelector(".menu-items");
  var menuItems = document.querySelectorAll(".menu-items .menu-item a");

  menuItems.forEach(function (item) {
    item.addEventListener("click", function () {
      menuModal.classList.remove("openned");
      body.classList.remove("overflow-hidden");
    });
  });
});

// document.addEventListener('DOMContentLoaded', function() {

//   var scrollToTopBtn = document.querySelector('#scrollToTopBtn');

//   window.addEventListener('scroll', function() {
//     if (window.scrollY > 20) {
//       scrollToTopBtn.style.display = 'block';
//     } else {
//       scrollToTopBtn.style.display = 'none';
//     }
//   });

//   scrollToTopBtn.addEventListener('click', function() {
//     window.scrollTo({
//       top: 0,
//       behavior: 'smooth'
//     });
//   });
// });

// document.addEventListener('DOMContentLoaded', () => {
//   const blocks = document.querySelectorAll('.scroll-effect');

//   const handleScroll = () => {
//       const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//       const windowHeight = window.innerHeight;

//       blocks.forEach(block => {
//           const blockTop = block.getBoundingClientRect().top + scrollTop;
//           if (scrollTop + windowHeight > blockTop + 50) {
//               block.classList.add('visible');
//           } else {
//               block.classList.remove('visible');
//           }
//       });
//   };

//   window.addEventListener('scroll', handleScroll);
//   handleScroll();
// });

// function closeMessage(){
//   var closeMessage = document.querySelectorAll(".alert");
//   closeMessage.forEach(function(item){
//     item.classList.remove("opened");
//   })
// }

document.addEventListener("DOMContentLoaded", function () {
  function updateCheckboxLinks() {
    const checkboxes = document.querySelectorAll(".checkbox-offer label span");

    checkboxes.forEach((checkbox) => {
      const textContent = checkbox.innerHTML;

      const updatedContent = textContent.replace(
        /Política de Dados./,
        '<a href="#politica-de-dados" target="_blank" rel="noopener noreferrer">Política de Dados.</a>'
      );

      checkbox.innerHTML = updatedContent;
    });
  }

  updateCheckboxLinks();

  document.addEventListener("wpcf7submit", updateCheckboxLinks);

  document.addEventListener("wpcf7mailsent", updateCheckboxLinks);
  document.addEventListener("wpcf7invalid", updateCheckboxLinks);
  document.addEventListener("wpcf7spam", updateCheckboxLinks);
  document.addEventListener("wpcf7error", updateCheckboxLinks);
});
