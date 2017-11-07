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

