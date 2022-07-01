/* services */
const swiperSection1 = new Swiper( '.js-swiper-container-section-1', {
    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 3,
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-section-1',
        nextEl: '.js-swiper-button-next-section-1',
    },

    pagination: {
        el: '.js-swiper-pagination-section-1',
    },
});