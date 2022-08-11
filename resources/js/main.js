const { pullAll } = require("lodash");

currentSlideID=1;
slideElement = document.getElementById('slide');
totalSildes = slideElement.childElementCount;
console.log(totalSildes)

function next(){
if(currentSlideID < totalSildes){
    currentSlideID++;
    showSlide();
}

}

function prev() {
    if(currentSlideID>2){
        currentSlideID--;
        showSlide();
    }
}

function showSlide() {
    slides = document.getElementById('slide').getElementsByTagName('li')
    for (let index = 0; index < totalSildes; index++){
        const element = slides[index];
        if(currentSlideID==index+1){
            element.classList.remove('hidden');
        }else{
            element.classList.add('hidden');
        }
    }
}

