let qtItems = document.querySelectorAll(".carrosselItems").length;
// document.querySelector(".carrosselOverflow").style.width = `calc(${qtItems})`;

let slideCurrent = 0;

function goPrev() {

    slideCurrent--;
    if (slideCurrent < (-qtItems) + 1) {
        slideCurrent = 0;
    }
    updateMargin();

}

function goNext() {
    slideCurrent++;

    if (slideCurrent > (qtItems - 1)) {
        slideCurrent = 0;

    }
    updateMargin()
}

function updateMargin() {
    let slideWidth = document.querySelector(".carrosselItems").clientWidth;

    let newMargin = (slideCurrent * slideWidth);

    let widt = document.querySelector(".carrosselOverflow").style.marginLeft = `${newMargin}px`;

    console.log(slideWidth)

}