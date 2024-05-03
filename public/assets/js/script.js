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