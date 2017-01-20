/* 
 *This file will control an image carousel
 */

var mainImage = document.getElementById("mainImage");
var mainImageCaption = document.getElementById("mainImageCaption");

var imageArray = ["canyonpix/blooms.jpg", "canyonpix/colorado.jpg", "canyonpix/erosion.jpg", "canyonpix/riverbottom.jpg", "canyonpix/weather.jpg"];
var captionArray = ["Cacti in bloom in the Grand Canyon", "The Colorado River in the Canyon", "Erosion formed the Grand Canyon", "The Colorado from the trail", "Weather changes frequently in the canyon"];

var imageIndex = 1;
var captionIndex = 1;

function changeImage() {
    mainImage.setAttribute("src", imageArray[captionIndex]);
    mainImage.setAttribute("alt", captionArray[captionIndex]);
    mainImageCaption.innerHTML = captionArray[captionIndex];
    imageIndex++;
    captionIndex++;
    if (imageIndex >= imageArray.length) {
        imageIndex = 0;
        captionIndex = 0;
    }
}

// 1000 milliseconds = 1 second
// Rotate the image using the function every 5 seconds
var rotateAction = setInterval(changeImage, 5000);

// clearInterval stops the rotation from happening
mainImage.onmouseover = function () {
clearInterval(rotateAction);
};

// restarts the rotation from where it was previously
mainImage.onmouseout = function () {
 rotateAction = setInterval(changeImage, 5000);
};