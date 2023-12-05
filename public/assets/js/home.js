var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  initialSlide: 2,
  loop: true,
  spaceBetween: 20,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

document.querySelector('#registrationForm').addEventListener('submit', function() {
  // Set a flag in the local storage
  localStorage.setItem('reopenModal', 0);
});

document.querySelector('#exampleModal').addEventListener('submit', function() {
  localStorage.setItem('reopenModal', 1); 
});

// After the page reloads, check if the flag exists in the storage
window.onload = function() {
  if (localStorage.getItem('reopenModal')==0) {
      // Reopen the modal
      $('#register').modal('show');
      // Remove the flag from the storage
      localStorage.removeItem('reopenModal');
  } else if (localStorage.getItem('reopenModal')==1) {
      $('#exampleModal').modal('show');
      localStorage.removeItem('reopenModal');
  }
};