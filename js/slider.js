/**
 * Created by long on 2/11/17.
 */
slideIndex = 1;
numOfImage = 4;

showSlides(slideIndex);

function sliderPlus(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    // var i;
    // var slides = document.getElementsByClassName('myslider');
    // console.log(slides);
    // var dots = document.getElementsByClassName('dot');
    // console.log(dots);
    // if (n > slides.length) {slideIndex = 1}
    // if (n < 1) {slideIndex = slides.length}
    // for (i = 0; i < slides.length; i++) {
    //     slides[i].style.display = "none";
    // }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    // }
    // slides[slideIndex-1].style.display = "block";
    // dots[slideIndex-1].className += " active";
    // console.log(slideIndex);

    var i;
    var slides = document.getElementsByClassName('myslider');
    console.log("slider", slider);

    if (n> slides.length){slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}

    for (i =0; i<slides.length; i++){
        slides[i].style.display = "none";
    }

    for (i = 0; i<numOfImage; i++){
        if ((n+i)>slides.length){
            index = n+i - slides.length;

        }
        else {
            index = n + i;
        }
        console.log("index", index);
        slides[index-1].style.display = "block";
        slideIndex = index;
    }


}

