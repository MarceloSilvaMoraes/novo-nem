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
            // console.log(at);

        }
    })

})



let itens = document.querySelectorAll(".inativo");
let itensactiveMod = document.querySelectorAll(".activeMod");
let carrousselItem = document.querySelectorAll(".carrosselItems .car");
itens.forEach((item) => {
    item.addEventListener("click", () => {
        carrousselItem.forEach((carroussel) => {
            // console.log(carroussel.id);
            if (item.id == carroussel.id) {
                let idSemOnline = new FormData();
                idSemOnline.append("idSemOnline", item.id);
                fetch("http://website.gruponem.com.br/public/sem_online", {
                    method: "POST",
                    body: idSemOnline

                }).then(res => {
                    return res.json();
                }).then((json) => {
                    // console.log(json.id);
                    carroussel.querySelector(".content__title").innerHTML = json.nome_curso_cem;
                    carroussel.querySelector(".content__type-and-time").innerHTML = json.duracao02;
                    // carroussel.querySelector(".inativo").innerHTML = json.modalidade02;
                    carroussel.querySelector(".content__price").innerHTML = json.preco02;
                    carroussel.querySelector(".content__shift").innerHTML = json.turno02;

                })

            }
        })

    })

})

itensactiveMod.forEach((itensactiveMod) => {
    itensactiveMod.addEventListener("click", () => {
        carrousselItem.forEach((carrousselSemi) => {
            // console.log(carrousselSemi.id);
            if (itensactiveMod.id == carrousselSemi.id) {

                let idSemi = new FormData();
                idSemi.append("idSemi", itensactiveMod.id);
                fetch("http://website.gruponem.com.br/public/semi", {
                    method: "POST",
                    body: idSemi

                }).then(res => {
                    return res.json();
                }).then((json) => {
                    // console.log(json);
                    carrousselSemi.querySelector(".content__title").innerHTML = json.nome_curso;
                    carrousselSemi.querySelector(".content__type-and-time").innerHTML = json.duracao;
                    // carrousselSemi.querySelector(".inativo").innerHTML = json.modalidade;
                    carrousselSemi.querySelector(".content__price").innerHTML = json.preco;
                    carrousselSemi.querySelector(".content__shift").innerHTML = json.turno;

                })

            }
        })

    })

})