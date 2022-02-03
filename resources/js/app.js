import Alpine from "alpinejs";
import axios from "axios";
import Swiper, { Pagination, Navigation } from "swiper";

window.Alpine = Alpine;
Alpine.start();
window.axios = axios;

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

Swiper.use([Pagination, Navigation]);
new Swiper(".image-swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
    },
});

new Swiper(".product-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 50,
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

new Swiper(".product-swiper-with-arrows", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 50,
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
    },
});
