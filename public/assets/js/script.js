function abrirMenu() {
    if (!document.querySelector(".mBottom").classList.contains("menuAtivo")) {
        document.querySelector(".mBottom").classList.add("menuAtivo");
    } else {
        document.querySelector(".mBottom").classList.remove("menuAtivo");
    }

    if (!document.querySelector(".mRight").classList.contains("menuAtivo")) {
        document.querySelector(".mRight").classList.add("menuAtivo");
    } else {
        document.querySelector(".mRight").classList.remove("menuAtivo");
    }
    if (!document.querySelector(".burguer").classList.contains("xburguer")) {
        document.querySelector(".burguer").style.display = "none";
        document.querySelector(".burguer").style.width = "0px";
        document.querySelector(".burguer").classList.add("xburguer");
        document.querySelector(".xburguer").style.display = "block";
    } else {
        document.querySelector(".burguer").style.width = "33px";

        document.querySelector(".burguer").style.display = "block";
        document.querySelector(".burguer").classList.remove("xburguer");
        document.querySelector(".xburguer").style.display = "none";

    }
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