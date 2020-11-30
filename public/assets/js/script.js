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