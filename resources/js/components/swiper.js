import Swiper from "swiper";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper-services", {
    modules: [Pagination],
    slidesPerView: 1.2,
    spaceBetween: 30,

    pagination: {
        el: ".js-swiper-pagination-services",
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

new Swiper(".js-swiper-objectives", {
    modules: [Pagination],
    slidesPerView: 1.2,
    spaceBetween: 30,

    pagination: {
        el: ".js-swiper-pagination-objectives",
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

new Swiper(".js-swiper-processes", {
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

new Swiper(".js-swiper-testimonials", {
    modules: [Autoplay, Pagination],
    slidesPerView: 1.2,
    spaceBetween: 16,

    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".js-swiper-pagination-testimonials",
    },

    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },

        768: {
            slidesPerView: 2.2,
            spaceBetween: 30,
        },
    },
});
