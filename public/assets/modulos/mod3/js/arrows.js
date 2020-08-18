var p1 = document.getElementById("parte1");
var p2 = document.getElementById("parte2");
var p3 = document.getElementById("parte3");
var p4 = document.getElementById("parte4");
var p5 = document.getElementById("parte5");
var p6 = document.getElementById("parte6");
var p7 = document.getElementById("parte7");
var p8 = document.getElementById("parte8");
var p9 = document.getElementById("parte9");
var p10 = document.getElementById("parte10");
var p11 = document.getElementById("parte11");
var p12 = document.getElementById("parte12");
var p13 = document.getElementById("parte13");

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

    }else if(p5.style.display == "block"){
        p5.style.display = "none";
        p6.style.display = "block";

    }else if(p6.style.display == "block"){
        p6.style.display = "none";
        p7.style.display = "block";
        

    }else if(p7.style.display == "block"){
        p7.style.display = "none";
        p8.style.display = "block";
        

    }else if(p8.style.display == "block"){
        p8.style.display = "none";
        p9.style.display = "block";
        

    }else if(p9.style.display == "block"){
        p9.style.display = "none";
        p10.style.display = "block";
        

    }else if(p10.style.display == "block"){
        p10.style.display = "none";
        p11.style.display = "block";
        

    }else if(p11.style.display == "block"){
        p11.style.display = "none";
        p12.style.display = "block";
        

    }else if(p12.style.display == "block"){
        p12.style.display = "none";
        p13.style.display = "block";
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

    }else if(p6.style.display == "block"){
        p6.style.display = "none";
        p5.style.display = "block";

    }else if(p7.style.display == "block"){
        p7.style.display = "none";
        p6.style.display = "block";

    }else if(p8.style.display == "block"){
        p8.style.display = "none";
        p7.style.display = "block";

    }else if(p9.style.display == "block"){
        p9.style.display = "none";
        p8.style.display = "block";

    }else if(p10.style.display == "block"){
        p10.style.display = "none";
        p9.style.display = "block";

    }else if(p11.style.display == "block"){
        p11.style.display = "none";
        p10.style.display = "block";

    }else if(p12.style.display == "block"){
        p12.style.display = "none";
        p11.style.display = "block";

    }else if(p13.style.display == "block"){
        p13.style.display = "none";
        p12.style.display = "block";
        btn1.style.display = "inline-block";
    }

}
