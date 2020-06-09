function verificar_3() {
    var nota_actividad_3 = 0;
    var check = document.getElementById('siempre');
    if (check.checked) {
        document.getElementById('icono').innerHTML = '<img src="assets/img/correcto.png"/>'; nota_actividad_3 = 1;
        document.getElementById('resp').innerHTML = '<p>Muy bien acertaste, un ejemplo de esto es: necesita saber a qué temperatura está afuera para poder vestirse; necesita saber la situación de tránsito antes de tomar el bus; necesita saber de la económia si es que va a solicitar un préstamo; Siempre necesitamos información para realizar una actividad.</p><p>Para pensar: ¿Cuántas decisiones serían difíciles de tomar sin tener la información?</p>';
    } else {
        document.getElementById('icono').innerHTML = '<img src="assets/img/incorrecto.png"/>';
    }

    if (nota_actividad_3 == 1) {
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