var currentPage = window.location.pathname;

if (currentPage === '/sobre-nosotros') {
    console.log('Script carusel loaded (Page-About)');

    var mySwiper1;

    function initializeSwiper() {
        mySwiper1 = new Swiper('#miCarrusel', {
            slidesPerView: 'auto',
            spaceBetween: 1,
            loop: false,
            centeredSlides: true,
        
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
            },
            on: {
                slideChangeTransitionEnd: function () {
                    if (this.isEnd) {
                        this.params.autoplay.reverseDirection = true;
                        this.autoplay.start();
                    } else if (this.isBeginning) {
                        this.params.autoplay.reverseDirection = false;
                        this.autoplay.start();
                    }
                },
            },
            
        });
    }

    initializeSwiper();
}


if (currentPage === '/platos' || currentPage === '/' ) {
    console.log('Script carusel loaded (Page-Carta)');

    var mySwiper1;

    function initializeSwiper() {
        mySwiper1 = new Swiper('#miCarrusel', {
            slidesPerView: 'auto',
            spaceBetween: 1,
            loop: false,
            centeredSlides: true,
        
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    centeredSlides: false,
                },
            },
            on: {
                slideChangeTransitionEnd: function () {
                    if (this.isEnd) {
                        this.params.autoplay.reverseDirection = true;
                        this.autoplay.start();
                    } else if (this.isBeginning) {
                        this.params.autoplay.reverseDirection = false;
                        this.autoplay.start();
                    }
                },
            },
            
        });
    }

    initializeSwiper();

    
}






