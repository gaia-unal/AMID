// desplegar unidades

function expandir(varbtn, varcont, und) {
    var btn = document.getElementById(varbtn);
    var cont = document.getElementById(varcont);

    if (cont.style.visibility == "hidden") {

        btn.innerHTML = "<b><i class='fas fa-chevron-circle-down' title='Contraer'></i> Unidad " + und + "</b>";

        cont.style.transition = "all 0.5s";
        cont.style.visibility = "visible";
        cont.style.opacity = "1";
        cont.style.height = "auto";

    } else {
        btn.innerHTML = "<b><i class='fas fa-chevron-circle-right' title='Expandir'></i> Unidad " + und + "</b>";

        cont.style.transition = "all 0s";
        cont.style.visibility = "hidden";
        cont.style.opacity = "0";
        cont.style.height = "0px";
    }
}