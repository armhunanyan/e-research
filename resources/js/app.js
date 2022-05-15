require('./bootstrap');
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';

const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
swiper?.on('slideChange', function (e) {
    document.querySelector('.swiper-index').innerText = parseInt(e.activeIndex) + 1;
});