// require('./bootstrap');
import Alpine from "alpinejs";
import Swiper from "swiper";
import SwiperCore, { Pagination } from "swiper/core";

window.Alpine = Alpine;
Alpine.start();

SwiperCore.use([Pagination]);
new Swiper(".my-swiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
