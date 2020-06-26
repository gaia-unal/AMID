function preg1() {
    swal.mixin({
        type: 'info',
        title: '¿Qué es?',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: 'Web es un vocablo inglés que significa “red”, “telaraña” o “malla”. El concepto se utiliza ' +
                'en el ámbito tecnológico para nombrar a una red informática y, en general, a Internet. Es ' +
                'importante establecer que este término además forma parte de lo que se conoce como World Wide ' +
                'Web que es la red informática que se emplea en todo el mundo'
        },
        {
            text: 'Una página web es un documento que incluye un archivo HTML con texto, imágenes, videos, ' +
                'animaciones Flash, etc. Al conjunto de páginas web que suelen formar parte del mismo dominio o ' +
                'subdominio de Internet se lo conoce como sitio web. Dentro del sitio web, todas las páginas ' +
                'guardan alguna relación entre sí y están vinculadas mediante vínculos (también conocidos como ' +
                'enlaces, hipervínculos, hiperenlaces o links) [1]'
        }
    ]);
}

function preg2() {
    swal.mixin({
        type: 'info',
        title: 'Web 2.0',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: '"Web 2.0, por otra parte, es un concepto que permite nombrar a las aplicaciones de Internet ' +
                'que facilitan la interacción de los usuarios. Los sitios que forman parte de la Web 2.0 posibilitan ' +
                'que los internautas compartan información y desarrollen tareas de forma mancomunada" [1]'
        },
        {
            imageUrl: 'assets/img/web20.png',
            text: '[10]'
        }
    ]);
}

function preg3(){
    swal.mixin({
        type: 'info',
        title: 'Ventajas',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            html: '- El aprendizaje es más eficiente, ya que el alumnado participa siendo parte ' +
            'activa del mismo. <br> - No requiere de grandes conocimientos informáticos, con un ' +
            'nivel de usuario cualquiera puede usar las herramientas web 2.0 <br> - Mejora la ' +
            'comunicación entre individuos, ya sea síncrona o asíncronamente. <br> - Optimización de los ' +
            'tiempos de aprendizaje, permitiendo al sujeto organizar su formación según sus necesidades y ' +
            'motivación. '
        },
        {
            html: '- En el proceso de enseñanza – aprendizaje, se pueden aplicar metodologías ' +
            'más prácticas. <br> - Aumento en el interés por la Web. Muchos usuarios acceden de manera ' +
            'continua a herramientas Web 2.0 para conocer la opinión o modificación que realizan los ' +
            'usuarios. <br> - Acceso inmediato a la información y a la aportación que se puede hacer de ' +
            'la misma. <br> - Desarrollo de nuevas experiencias, innovando en material creado. [3]'
        }
    ]);
}

function preg4(){
    swal({
        type: 'info',
        title: 'Ejemplos Web 2.0',
        html: '- Redes sociales (Facebook) <br> - Portales de alojamiento de videos (Youtube) ' +
        '<br> - Portales de alojamiento de imagenes (Flickr) <br> - Servicios Wikis (Wikipedia)',
        backdrop: 'rgb(240, 255, 255)',
    });
}

function preg5() {
    swal({
        type: 'info',
        title: 'Usos',
        text: '"Permite que hoy cualquier ciudadano, a través de una conexión a Internet junto ' +
        'a un navegador y un ordenador, pueda acceder desde cualquier rincón del mundo a la web que ' +
        'desea. Lo puede hacer para informarse, para entretenerse o simplemente por simple ' +
        'curiosidad" [1]',
        backdrop: 'rgb(240, 255, 255)',
    })    
}

function preg6(){
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