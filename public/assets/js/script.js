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

function getSemOnline(valor) {
    // console.log(valor);
    let idSemOnline = new FormData();
    idSemOnline.append("idSemOnline", valor);
    fetch("http://localhost/novo-nem/public/action", {
        method: "POST",
        body: idSemOnline

    }).then(res => {
        return res.text();
    }).then((json) => {
        // var objeto = {};
        // for (var i in json) {
        //     console.log("ID:", json[i]);
        // }
        console.log("ID:", json["id"]);
        console.log("ID:", json[0]);
    })
}