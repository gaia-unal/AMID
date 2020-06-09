/*=============================================
    Js para el slider
=============================================*/
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}

function verificar_2() {
    var nota_actividad_2 = 0;
    var opcion_1 = $("#opcion_1").val()
    var opcion_2 = $("#opcion_2").val();
    var opcion_3 = $("#opcion_3").val();
    var opcion_4 = $("#opcion_4").val();
    var opcion_5 = $("#opcion_5").val();
    var opcion_6 = $("#opcion_6").val();
    var opcion_7 = $("#opcion_7").val();
    var opcion_8 = $("#opcion_8").val();

    if (opcion_1 == 3) {
        document.getElementById('icono_1').innerHTML = '<img src="assets/img/correcto.png" />'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_1').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_2 == 6) {
        document.getElementById('icono_2').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_2').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_3 == 1) {
        document.getElementById('icono_3').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_3').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_4 == 8) {
        document.getElementById('icono_4').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_4').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_5 == 7) {
        document.getElementById('icono_5').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_5').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_6 == 4) {
        document.getElementById('icono_6').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_6').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_7 == 2) {
        document.getElementById('icono_7').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_7').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (opcion_8 == 5) {
        document.getElementById('icono_8').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_2 += 1;
    } else {
        document.getElementById('icono_8').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }
    if (nota_actividad_2 == 8) {
        swal({
            title: "¡Correcto!",
            icon: "success",
            button: "Continuar",
        });
    } else {
        swal({
            icon: 'error',
            title: 'Oops...',
            text: 'Te equivocaste pero puedes volver a intentarlo'
        }).then(function () {
            location.reload();
        });
    }
}