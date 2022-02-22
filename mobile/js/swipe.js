document.addEventListener('DOMContentLoaded',()=>{
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  
    var swiper = new Swiper(".mySwiper2", {
      slidesPerView: 2.5,
      spaceBetween: 30,
      freeMode: true,
      
    });
  
    var swiper = new Swiper(".mySwiper3", {
      slidesPerView: 2.5,
      spaceBetween: 30,
      freeMode: true,
      
    });
  
  });