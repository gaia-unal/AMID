var p1 = document.getElementById("parte1");
var p2 = document.getElementById("parte2");
var p3 = document.getElementById("parte3");
var p4 = document.getElementById("parte4");
var p5 = document.getElementById("parte5");

var btn1 = document.getElementById("btnAdelante");
var btn2 = document.getElementById("btnAtras");


function avanzar() {
    
    if(p1.style.display == "block"){
        p1.style.display = "none";
        p2.style.display = "block";
        btn2.style.display = "inline-block";

    }else if(p2.style.display == "block"){
        p2.style.display = "none";
        p3.style.display = "block";

    }else if(p3.style.display == "block"){
        p3.style.display = "none";
        p4.style.display = "block";

    }else if(p4.style.display == "block"){
        p4.style.display = "none";
        p5.style.display = "block";
        btn1.style.display = "none";

    }

}

function volver() {
    if(p2.style.display == "block"){
        p2.style.display = "none";
        p1.style.display = "block";
        btn2.style.display = "none";

    }else if(p3.style.display == "block"){
        p3.style.display = "none";
        p2.style.display = "block";

    }else if(p4.style.display == "block"){
        p4.style.display = "none";
        p3.style.display = "block";

    }else if(p5.style.display == "block"){
        p5.style.display = "none";
        p4.style.display = "block";
        btn1.style.display = "inline-block";
    }

}
