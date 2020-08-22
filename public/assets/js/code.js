var password, password2;

password = document.getElementById('pass1');
password2 = document.getElementById('pass2');

password.onchange = password2.onkeyup = passwordMatch;

function passwordMatch() {
    if (password.value !== password2.value)
        password2.setCustomValidity('Las contraseñas no coinciden.');
    else
        password2.setCustomValidity('');
}

function remove() {
    document.getElementById('quit').style.display = "none";
}

$(document).ready(function() {

    //Cuando el sitio carga...

    $(".tab_content").hide(); //Esconde todo el contenido

    $("ul.tabs li:first").addClass("active").show(); //Activa la primera tab

    $(".tab_content:first").show(); //Muestra el contenido de la primera tab

    //On Click Event

    $("ul.tabs li").click(function() {

        $("ul.tabs li").removeClass("active"); //Elimina las clases activas

        $(this).addClass("active"); //Agrega la clase activa a la tab seleccionada

        $(".tab_content").hide(); //Esconde todo el contenido de la tab

        var activeTab = $(this).find("a").attr("href"); //Encuentra el valor del atributo href para identificar la tab activa + el contenido

        $(activeTab).fadeIn(); //Agrega efecto de transición (fade) en el contenido activo

        return false;

    });

});