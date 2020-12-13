function preg1() {
    swal.mixin({
        type: 'info',
        title: '¿Qué es?',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([{
            html: '“Gudín Rodríguez Magariños dice que [2]: Se conoce como <strong>‘phishing’</strong> (del inglés fishing, pescar) a la suplantación ' +
                'de identidad(en Internet, pero también por otras vías) que persigue apropiarse de datos ' +
                'confidenciales de los usuarios para, en base a ellos, conseguir menoscabar patrimonios ' +
                'ajenos” <em>Phishing</em> se refiere al proceso de ' +
                'recolectar detalles bancarios, en especial los números de identificación personal(PINs) ' +
                'y los números de autenticación de las transacciones(TANs) con el intento de saquear las ' +
                'cuentas bancarias de otras personas.'
        },
        {
            html: 'Los delincuentes obtienen información como número de tarjetas de crédito, contraseñas, ' +
                'información de cuentas u otros datos personales por medio de engaños. Este delito sucede la ' +
                'mayoría de las veces a través de mensajes de correo electrónico. <br> <em>Phishing</em> se ' +
                'refiere al proceso de recolectar detalles bancarios, en especial los números de identificación ' +
                'personal (PINs) y los números de autenticación de las transacciones (TANs) con el intento de ' +
                'saquear las cuentas bancarias de otras personas.'
        }
    ]);
}

function preg2() {
    swal.mixin({
        type: 'info',
        title: 'Phishing tradicional',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4']
    }).queue([{
            text: 'Lucas Paus [1] dice que: Este tipo de ataque es el más sencillo a la hora de analizarlo técnicamente; normalmente ' +
                'está vinculado a la copia de un sitio conocido por la víctima, en el cual se cambia la ' +
                'dirección a donde llegan los datos ingresados. De este modo, el ciberdelincuente roba las ' +
                'credenciales ingresadas por la víctima, que pueden estar alojadas en texto plano en un ' +
                'archivo de texto o ser enviadas a alguna casilla de correo electrónico.'
        },
        {
            text: 'La principal característica del phishing tradicional es que está ligado a un solo sitio web ' +
                'en el cual se alojan todos los contenidos del portal falso.[1]'
        },
        {
            html: 'En la siguiente imagen, se puede observar un sitio de <em>phishing</em> que afecta a la ' +
                'empresa Paypal (sistema de pagos en línea), el cual ha sido montado sobre otro presuntamente ' +
                'vulnerado, que luego fue utilizado para montar el sitio fraudulento.'
        },
        {
            imageUrl: '../../public/assets/modulos/mod7/img/Paypal-tradicional.png'
        }
    ]);
}

function preg3() {
    swal.mixin({
        type: 'info',
        title: 'Spear phishing',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        html: 'Lucas Paus [1] dice que: Esta clase de <em>phishing</em> está dirigido a personas o grupos reducidos. De esta manera ' +
            'las campañas son mucho más personificadas y con un porcentaje mayor de víctimas.<br> ' +
            'Son pocos los casos que afectan entidades bancarias o redes sociales, debido a que no buscan ' +
            'la masividad sino todo lo contrario; en realidad, este tipo de métodos apunta ' +
            'a empleados de empresas con perfiles determinados. Por lo tanto, las víctimas podrían ' +
            'recibir correos personificados con nombre y apellido, incluso falsificando direcciones ' +
            'conocidas para generar una mayor empatía y confianza.'
    });


}

function preg4() {
    swal.mixin({
        type: 'info',
        title: 'Smishing (SMS)',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([{
            html: 'Lucas Paus [1] dice que: Esta técnica de <em>phishing</em> se relaciona con el uso de teléfonos celulares.<br> ' +
                'Normalmente los delincuentes se hacen pasar por entidades conocidas y envían un mensaje de ' +
                'texto avisando a la víctima de que ganó un premio. Comúnmente las victimas ' +
                'deben responder con algún tipo de código o número especial para validar su falso premio, ya ' +
                'sea por medio de otro mensaje, de una llamada o de acceder a un hipervínculo.(Paus, ' +
                '2015)<br>> En la siguiente imagen, se puede observar un caso de <em>smishing</em> pero ' +
                'vía Whatsapp, lo que propaga más rápido la amenaza debido a que por este tipo de ' +
                'aplicaciones no se cobra el envío de mensajes<br>'
        },
        {
            imageUrl: '../../public/assets/modulos/mod7/img/smishing.png'
        }
    ]);
}

function preg5() {
    swal({
        type: 'info',
        title: 'Vishing',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        html: 'Lucas Paus [1] dice que: Se basa en la instauración de falsos centros de atención telefónica que realizan llamadas ' +
            'con el objetivo de realizar un fraude, y se los relaciona con casos de vishing. ' +
            'Este ataque muchas veces está relacionado con otro, de forma que se complementen para lograr ' +
            'una mayor credibilidad y de esta manera engañar a la víctima de una forma más ' +
            'sencilla y eficaz.'
    });
}