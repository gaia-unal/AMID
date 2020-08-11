function inactivo(u) {
    swal({
        icon: 'error',
        title: 'Oops',
        text: 'Recuerda que debes terminar primero la unidad ' + u,
    });
}

function evaluacion() {
    swal({
        icon: 'error',
        title: 'Oops',
        text: 'Recuerda que debes terminar primero la evaluación',
    });
}

function inactivoEva() {
    swal({
        icon: 'error',
        title: 'Oops',
        text: 'Recuerda que debes terminar primero las actividades',
    });
}

function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }
    // Patron de entrada
    patron = /[A-Za-z0-9ÑñáéíóúÁÉÍÓÚ!¡¿?()%#$=/_,;. -]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}