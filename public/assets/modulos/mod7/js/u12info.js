function preg1(){
    swal.mixin({
        type: 'info',
        title: '¿Qué es?',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: '"Internet es una red de computadoras que se encuentran interconectadas a nivel' +
            ' mundial para compartir información. Se trata de una red de equipos de cálculo que se' +
            ' relacionan entre sí a través de la utilización de un lenguaje universal"'
        },
        {
            text: '"El concepto Internet tiene sus raíces en el idioma inglés y se encuentra conformado' +
            ' por el vocablo inter (que significa entre) y net (proveniente de network que quiere decir' +
            ' red electrónica)" [2].'
        }
    ]);
}

function preg2(){
    swal({
        type: 'info',
        imageUrl: "../../public/assets/modulos/mod7/img/caracInternet.png",
        backdrop: 'rgb(240, 255, 255)',
        text: 'Fuente: https://www.diferenciador.com/diferencia-entre-internet-y-web/'
    });
}

function preg3(){
    swal.mixin({
        type: 'info',
        title: 'Usos',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            html: 'Internet permite [2]: <br> • Buscar cualquier tipo de información que necesite' +
            ' (por ejemplo en Google). <br> • Comprar productos de diversa índole (por ejemplo en Amazon o' +
            'Mercado Libre).'
        },
        {
            html: '• Comunicarnos con familiares o amigos que estén en otros países o ciudades mediante ' +
            'una video llamada (por ejemplo de Skype o Whatsapp). <br>• Jugar juegos online con personas ' +
            'de distintas nacionalidades y edades, en tiempo real.'
        }
    ]);
}

function preg4(){
    swal.mixin({
        type: 'info',
        title: 'Navegadores',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            html: '<b>- Chrome:</b> perteneciente al gigante Google y creado en el año 2008; es uno de los mas ' +
            'rápidos y seguros ofrecidos en el mercado hoy en día. Se trata de uno de los programas de ' +
            'navegación de mejor calidad de la actualidad, que además ofrece su descarga en forma ' +
            'absolutamente gratuita. <br><b> - Internet Explorer:</b> es un servicio de mayor antigüedad, ' +
            'ya discontinuado, pero que fue en su momento el líder del mercado. Su creación data ' +
            'aproximadamente del año 1995, y es el lanzado al mercado por la empresa líder Microsoft. ' +
            'Durante su primera década de existencia fue el más utilizado, presentando la mayor ' +
            'modernidad, pero hoy en día se ha convertido en uno de los más lentos a pesar de sus ' +
            'actualizaciones; razón por la cual, ha perdido gran cantidad de usuarios '
        },
        {
            html: '<b>- Mozilla Firefox:</b> se presenta como la alternativa lanzada por la compañía Mozilla, ' +
            'que causó furor en su inclusión al mercado dada la compatibilidad existente con sistemas ' +
            'operativos tanto de Apple, como de Microsoft. Además, se trata de un servicio rápido dado ' +
            'que utiliza poca memoria (menos requerimientos de hardware) al momento de realizar cada ' +
            'búsqueda; pero presenta la mejor seguridad ofrecida en el mercado hasta el momento. <br> ' +
            '<b>- Safari:</b> creado por Apple. Quizás uno de los más rápidos, absolutamente compatible con el ' +
            'sistema operativo de esta marca, mientras la versión compatible con Microsoft ya no recibe ' +
            'actualizaciones; y por lo tanto, tampoco se obtiene igual rendimiento.'
        }
    ]);
}

function preg5(){
    swal.mixin({
        type: 'info',
        title: 'Navegadores',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4', '5']
    }).queue([
        {
            text: 'En Colombia los niños y adolescentes gastan en promedio tres horas y 31 minutos '+
            'diarios en internet, según una investigación realizada por TigoUne y la Universidad Eafit. '+
            'Generalmente a medida que crecen, las personas tienden a gastar más tiempo en internet [4].'
        },
        {
            text: '"El promedio nacional de las horas diarias en internet es una hora con 46 minutos para los ' +
            'niños de 9 a 10 años, dos horas y 34 minutos para los niños de 11 a 12 años, cuatro horas ' +
            'con 19 minutos para quienes tienen entre 13 y 14 años, y de cinco horas y cinco minutos para ' +
            'los jóvenes de 15 y 16 años" [4]. '
        },
        {
            text: '"En la séptima edición del Estudio iLifebelt de Redes Sociales de Centroamérica y el ' +
            'Caribe, el 18.40% de los usuarios de Redes Sociales en la región tienen entre 12 a 20 años. ' +
            'El 6.40% ha finalizado la educación primaria y el 38.70% tienen educación media, lo que refuerza ' +
            'los datos de Meconectosinclavos" [3].'
        },
        {
            html: '• El 90% de los niños, niñas y adolescentes entre 10 a 15 años usan un teléfono inteligente ' +
            'con el que se conectan a internet y redes sociales. <br> • Los adolescentes se mantienen ' +
            ',conectados a internet en promedio tres horas diarias. '
        },
        {
            html: ' • El 67% de los niños y adolescentes que tienen accesos a las redes sociales comparten ' +
            'fotos con desconocidos. <br> • El 70% de los padres, madres y tutores no saben los delitos que ' +
            'existen en el internet. <br> La siguiente imagen puede dar a entender mejor estas estadísticas: '
        }
    ]);
}

function preg6(){
    swal({
        type: 'info',
        title: 'Comportamiento',
        backdrop: 'rgb(240, 255, 255)',
        text: '"En cuanto a comportamientos o actitudes riesgosas de la relación de los niños ' +
        'y jóvenes con internet, la investigación encontró que 49% se ha sentido disgustado cuando no ' +
        'se ha podido conectar, 43% ha intentado sin éxito navegar menos, 31% ha descuidado a su ' +
        'familia por estar conectado a internet y 20% se ha quedado sin comer o dormir por estar en ' +
        'la red" [4]'
    });
}

function preg7(){
    swal.mixin({
        type: 'info',
        title: 'Navegadores',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            html: 'A continuación se presentan algunos de los peligros a los que se está expuesto ' +
            'en Internet [4]: <br> • Sexting: Los adolescentes están más expuestos a enviar o recibir ' +
            'mensajes sexualmente explícitos a través de las redes sociales y teléfonos celulares. <br> • ' +
            'Sextorsión: Los niños y jóvenes pueden ser víctimas de extorsiones a través del internet. Ya ' +
            'que son amenazados de exponer fotografías o mensajes íntimos sino dan dinero a cambio. '
        },
        {
            html: '• Ciberbullying: Al subir fotografías pueden ser víctimas de comentarios desagradables ' +
            'provenientes de su círculo de amigos. Además, también se refiere al acoso cibernético para ' +
            'amenazar, avergonzar e intimidar a los usuarios. <br> • Grooming: Este puede ser uno de los ' +
            'más peligrosos ya que personas adultas se hacen pasar por menores de edad, ofrecen amistad ' +
            'para ganarse la confianza de los niños y adolescentes y más adelante empezar a solicitar ' +
            'imágenes seductoras o pornográficas. '
        }
    ])
}