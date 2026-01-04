import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const swiper = new Swiper(".js-swiper-processes", {
    modules: [Pagination],
    slidesPerView: 1.2,
    spaceBetween: 30,

    pagination: {
        el: ".js-swiper-pagination-processes",
    },

    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30,
        },

        768: {
            slidesPerView: 2.2,
            spaceBetween: 30,
        },
    },
});
