let qtItems = document.querySelectorAll(".carrosselItems").length;
let slides = document.querySelector(".slides").style.width = `calc(289px * ${qtItems})`;

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
    let num = 2 * newMargin;
    let widt = document.querySelector(".carrosselOverflow").style.marginLeft = `${num}px`;


}


let inativos = document.querySelectorAll(".content__modality-item");
inativos.forEach((ativo, indexA) => {
    ativo.addEventListener("click", () => {
        if (!ativo.classList.contains("activeMod")) {
            ativo.classList.add("activeMod");
            ativo.previousElementSibling.classList.remove("activeMod");
            // console.log(ativo);
        }
    })

})
let ddd = document.querySelectorAll(".content__modality-item.activeMod");
ddd.forEach((at, inde) => {
    at.addEventListener("click", () => {
        if (at.classList.contains("activeMod")) {
            at.classList.add("activeMod");
            at.nextElementSibling.classList.remove("activeMod");
            document.querySelector(".content__price").innerHTML = "R$ 333, 29";
            // console.log(at);

        }
    })

})


// let items = document.querySelectorAll(".carrosselItems");
// items.forEach((item, index) => {

//     item.setAttribute("data-item", index);
//     let dataItm = item.getAttribute("data-item");
//     // console.log(dataItm);

// })