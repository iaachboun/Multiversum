//lets you slide to the left or right
const slider = document.getElementById('slider');
let isDown = false;
let startX;
let scrollLeft;
var pixels = $(window).width();
var count = 1;
var inViewPort;
slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
});

//hides scrollbar when not active
function hideScrollbar(timer) {
    var el = document.querySelector('.slider');
    el.classList.add("hideOrShow");
    el.addEventListener('scroll', () => {
        el.classList.remove("hideOrShow");
        clearTimeout(timer);
        timer = setTimeout(function () {
            el.classList.add("hideOrShow");
        }, 100);
    });
}

hideScrollbar();

function sliderPagination(thisSlide) {
    switch (thisSlide) {
        case '0':
            slider.scrollTo(0, 0);
            break;
        case '1':
            slider.scrollTo(pixels, 0);
            break;
        case '2':
            slider.scrollTo(pixels + pixels, 0);
            break;
        case '3':
            slider.scrollTo(pixels + pixels + pixels + pixels, 0);
            break;
        default:
            break;
    }

}

$(".slide").click(function () {
    var thisSlide = this.name.substr(-1);
    console.log(thisSlide);
    if (pixels < 1213) {
        sliderPagination(thisSlide, pixels);
    } else {
        pixels = $(window).width() - 300;
        sliderPagination(thisSlide, pixels);
    }
});

