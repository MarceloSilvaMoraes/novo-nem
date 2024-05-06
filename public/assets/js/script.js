let footerMenu = document.querySelectorAll(".dados");
footerMenu.forEach((menu) => {
    // menu.querySelector("ul").style.display = "none";
    menu.querySelector("ul li").style.transition = "all 0.5s";

    menu.addEventListener("click", () => {
        menu.querySelector("ul").style.transition = "all 0.5s";


        if (menu.querySelector("ul").style.display == "none") {
            menu.querySelector("ul").style.display = "block";

        } else {
            menu.querySelector("ul").style.display = "none";

        }


    })
})

var inativos = document.querySelectorAll(".content__modality_item");
// console.log(inativos);
if (inativos) {
    inativos.forEach((ativo) => {
        ativo.addEventListener("click", () => {
            if (!ativo.classList.contains("activeMod")) {
                ativo.classList.add("activeMod");
                ativo.previousElementSibling.classList.remove("activeMod");
                // console.log(ativo);
            }
        })

    })
}

let activo = document.querySelectorAll(".content__modality_item.activeMod");
// console.log(activo);
activo.forEach((at) => {
    at.addEventListener("click", () => {
        if (at.classList.contains("activeMod")) {
            at.classList.add("activeMod");
            at.nextElementSibling.classList.remove("activeMod");
        }
    })

})



let itens = document.querySelectorAll(".inativo");
let itensactiveMod = document.querySelectorAll(".activeMod");
let carrousselItem = document.querySelectorAll(".carrosselItems .car");
itens.forEach((item) => {
    item.addEventListener("click", () => {
        carrousselItem.forEach((carroussel) => {
            console.log(carroussel.id);
            if (item.id == carroussel.id) {
                let idSemOnline = new FormData();
                idSemOnline.append("idSemOnline", item.id);
                fetch("sem_online", {
                    method: "POST",
                    mode: 'cors',
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
                fetch("semi", {
                    method: "POST",
                    mode: 'cors',
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