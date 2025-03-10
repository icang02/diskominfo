import "./bootstrap";
import { register } from "swiper/element/bundle";

register();

document.addEventListener("livewire:navigated", function () {
  const swiperEl = document.querySelector("swiper-container");
  const btnPrevSlide = document.querySelector(".btn-prev-slide");
  const btnNextSlide = document.querySelector(".btn-next-slide");

  btnPrevSlide.addEventListener("click", () => {
    swiperEl.swiper.slidePrev();
  });

  btnNextSlide.addEventListener("click", () => {
    swiperEl.swiper.slideNext();
  });
});
