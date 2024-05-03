// dados();
// id.forEach((item) => {
//     console.log(item);

// })


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



// function dados(val) {
//     // console.log("semipresencial: " + val);

//     let idSemi = new FormData();
//     idSemi.append("idSemi", val);
//     fetch("http://localhost/novo-nem/public/semi", {
//         method: "POST",
//         body: idSemi

//     }).then(res => {
//         return res.json();
//     }).then((json) => {
//         console.log(json.id);
//         document.querySelector(".content__title").innerHTML = json.nome_curso;
//         document.querySelector(".content__type-and-time").innerHTML = json.duracao;
//         document.querySelector(".inativo").innerHTML = json.modalidade;
//         document.querySelector(".content__price").innerHTML = json.preco;
//         document.querySelector(".content__shift").innerHTML = json.turno;

//     })
// }