// Navbar
    const navbarIcon = document.querySelectorAll('.navbar-icon');
    const sideNav = document.querySelector('.side-nav');
    navbarIcon.forEach(function(icon){
        icon.addEventListener('click',function(){
            sideNav.classList.toggle('show');
        });
    });

//Toast and Preloader
const preloader = document.querySelector('#preloader');
const zoomPart = document.querySelector('.box-type-thing')

if (preloader){

     window.addEventListener('DOMContentLoaded', () => {
         zoomPart.classList.add('zoom');
         setTimeout(function(){
             $(".preloader-container").fadeOut(2000);
         },2500);setTimeout(() => {
         toastContainer.classList.add("active");
       }, 3500);

     })}
     const toastContainer = document.querySelector(".toast-container");
     const closeBtn = document.querySelector(".toast-container .close");
     const toastLink = document.querySelector(".toast-container a");

     const stopDisplayingToast = () => {
       // localStorage.setItem("displayToast", false);
       toastContainer.classList.remove("active");
     };

     closeBtn.addEventListener('click',function(){
       toastContainer.classList.remove('active');
     });
     
//technofeed
//   var swiper = new Swiper(".slide-content", {
//   slidesPerView: 3,
//   spaceBetween: 25,
//   loop: true,
//   centerSlide: 'true',
//   fade: 'true',
//   grabCursor: 'true',
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//     dynamicBullets: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },

//   breakpoints:{
//       0: {
//           slidesPerView: 1,
//       },
//       520: {
//           slidesPerView: 2,
//       },
//       950: {
//           slidesPerView: 3,
//       },
//   },
// });
// about

      //   const fadingImages = document.querySelectorAll('.img-fader-container img');
      //   let nthNumber = 0;
      //   setInterval(function () {
      //     nthNumber++;
      //     if(nthNumber == fadingImages.length){
      //       nthNumber = -1;
      //     }
      //     else{
      //     fadingImages.forEach(function(img){
      //       img.classList.remove("active");
      //   });
      //     fadingImages[nthNumber].classList.add('active');
      // }
      //   }, 3000);
  
