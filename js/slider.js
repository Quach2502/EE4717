/**
 * Created by long on 2/11/17.
 */
currentSlideIndex = 0;
lastSlideIndex =0;
numOfImage = 4;
slides=[];

showSlides();

function sliderPlus(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides() {
    var i;
    slides = document.getElementsByClassName('myslider');
    // console.log("slides", slides);

    // if (n> slides.length){slideIndex = 0}
    // if (n < 1) {slideIndex = slides.length-1}

    //hide all elements in slides
    for (i =0; i<slides.length; i++){
        slides[i].style.display = "none";
    }

    if (currentSlideIndex+numOfImage<slides.length-1){
        for (i = currentSlideIndex; i<currentSlideIndex+numOfImage; i++){
            slides[i].style.display = "block";
        }
        currentSlideIndex = currentSlideIndex+numOfImage;
    }
    else{
        for (i = currentSlideIndex; i<slides.length; i++){
            slides[i].style.display = "block";
        }
        currentSlideIndex = 0;

    }

    // for (i = 0; i<slides.length; i++){
    //     if (i%numOfImage ==0){
    //         console.log(i);
    //         if ((i+numOfImage-1)<(slides.length-1)){
    //             for (j=i; j<i+numOfImage; j++){
    //                 slides[j].style.display ="block";
    //             }
    //             slideIndex = j;
    //
    //         }
    //         else{
    //             for (j=i; j<slides.length; j++){
    //                 slides[j].style.display ="block";
    //             }
    //             slideIndex = 0;
    //         }
    //         // if ((n+i)>slides.length){
    //         //     index = n+i - slides.length;
    //         //
    //         // }
    //         // else {
    //         //     index = n + i;
    //         // }
    //         // console.log("index", index);
    //         // slides[index-1].style.display = "block";
    //         // slideIndex = index;
    //     }
    //
    // }

    setTimeout(showSlides,2000);

}

// function next(){
//     if (currentSlideIndex+numOfImage<slides.length-1){
//         currentSlideIndex = currentSlideIndex+numOfImage;
//     }
//     else{
//         currentSlideIndex = 0;
//     }
// }


