const currentPage = window.location.pathname;

if(currentPage == '/'){
console.log('Script img scroll loaded!');
document.addEventListener("DOMContentLoaded", function () {
    var imgFront = document.querySelector('.inicio__padMain__left--imgfront');
    var padMain = document.querySelector('.inicio__padMain');
    function handleScroll() {
        var scrollPosition = window.scrollY || window.pageYOffset;
        var padMainRect = padMain.getBoundingClientRect();
        var padMainTop = padMainRect.top;
        if (scrollPosition >= padMainTop) {
            var scrollPercentage = 1 - Math.max(0, Math.min(1, (padMainTop + padMainRect.height / 2) / window.innerHeight));
            var translateXValue = -75 + (48 * scrollPercentage);
            imgFront.style.transform = 'translateX(' + translateXValue + '%)';
        }
    }
    var rAF;
    function scrollHandler() {
        if (!rAF) {
            rAF = requestAnimationFrame(function () {
                handleScroll();
                rAF = null;
            });
        }
    }
    window.addEventListener("scroll", scrollHandler);
    handleScroll();
});

}