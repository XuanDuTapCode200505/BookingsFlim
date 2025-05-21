document.addEventListener("DOMContentLoaded", function () {
  const slideshow = document.querySelector(".service-menu-showslide ul");
  const slides = document.querySelectorAll(".service-menu-showslide ul li");
  const prevBtn = document.querySelector(".service-menu-showslide .prev");
  const nextBtn = document.querySelector(".service-menu-showslide .next");

  let currentSlide = 0;
  const slideCount = slides.length;

  // Hàm chuyển slide
  function goToSlide(n) {
    slideshow.style.transition = "transform 0.5s ease";
    slideshow.style.transform = `translateX(-${n * 100}%)`;
    currentSlide = n;
  }

  // Xử lý nút next
  nextBtn.addEventListener("click", function () {
    if (currentSlide >= slideCount - 1) {
      goToSlide(0);
    } else {
      goToSlide(currentSlide + 1);
    }
  });

  // Xử lý nút prev
  prevBtn.addEventListener("click", function () {
    if (currentSlide <= 0) {
      goToSlide(slideCount - 1);
    } else {
      goToSlide(currentSlide - 1);
    }
  });

  // Tự động chuyển slide
  function startSlideshow() {
    return setInterval(function () {
      if (currentSlide >= slideCount - 1) {
        goToSlide(0);
      } else {
        goToSlide(currentSlide + 1);
      }
    }, 3000);
  }

  let slideInterval = startSlideshow();

  // Dừng slideshow khi hover
  slideshow.addEventListener("mouseenter", function () {
    clearInterval(slideInterval);
  });

  // Tiếp tục slideshow khi mouse leave
  slideshow.addEventListener("mouseleave", function () {
    slideInterval = startSlideshow();
  });

  // Thêm sự kiện cho phím mũi tên
  document.addEventListener("keydown", function (e) {
    if (e.key === "ArrowLeft") {
      if (currentSlide <= 0) {
        goToSlide(slideCount - 1);
      } else {
        goToSlide(currentSlide - 1);
      }
    } else if (e.key === "ArrowRight") {
      if (currentSlide >= slideCount - 1) {
        goToSlide(0);
      } else {
        goToSlide(currentSlide + 1);
      }
    }
  });
});
