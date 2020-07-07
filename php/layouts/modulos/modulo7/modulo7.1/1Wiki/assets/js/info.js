function preg1(){
    swal.mixin({
        type: 'info',
        title: '¿Qué es?',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4']
    }).queue([
        {
            text: '"El término wiki procede del hawaiano wiki wiki, que significa “rápido”, y fue propuesto' +
            ' por Ward Cunningham. La noción se popularizó con el auge de Wikipedia, una enciclopedia' +
            ' libre y abierta que se ha constituido como uno de los sitios más visitados de la Web" [1].'
        },
        {
            text: 'Es un término usado para referirse a las páginas web cuyos contenidos pueden ser' +
            ' editados por múltiples usuarios a través de cualquier navegador. Dichas páginas, por lo' +
            ' tanto, se desarrollan a partir de la colaboración de los internautas, quienes pueden' +
            ' agregar, modificar o eliminar información.'
        },
        {
            text: '"El formato wiki es muy útil para la difusión de conocimientos y el trabajo' +
            ' en equipo. Es habitual que los wikis incluyan un historial de cambios: de esta forma' +
            ' es posible regresar a un estado anterior (en caso que las modificaciones realizadas' +
            ' no sean correctas) y corroborar quién concretó cada cambio en la información" [1].'
        },
        {
            text: '"Las Wikis tienen una estructura muy sencilla pero sobre todo muy efectiva para' +
            ' acceder a la información, como dijimos las colaboraciones en conjunto son una de las' +
            ' piezas angulares de estos sitios Web y como tales tienen también un historial en el' +
            ' que se registran los cambios modificados anteriormente y ordenados desde los más recientes a '+
            'los más antiguos" [2]'
        }
    ]);
}

function preg2(){
    swal({
        type: 'info',
        title: '¿Cómo editar?',
        backdrop: 'rgb(240, 255, 255)',
        text: '"Para publicar en un Wiki el usuario no necesita conocer ninguna clase de sintaxis especial.' +
        ' Simplemente pulsa sobre "editar" en la página que quieras editar y escribe. Si quieres' +
        ' utilizar algún formato puedes utilizar los botones situados encima del área de texto" [3]'
    });
}

function preg3(){
    swal.mixin({
        type: 'info',
        title: 'Tipos',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4']
    }).queue([
        {
            text: 'Existen 3 tipos principales de wikis: Publico, publico y protegido, privado [4].'
        },
        {
            html: 'El <b>público</b> es aquel en el que cualquier persona puede leer, editar y subir archivos, es' +
            ' decir no se requiere tener una cuenta wiki para hacerlo.'
        },
        {
            html: 'El <b>publico y protegido</b> solo pueden editar y subir archivos aquellos que se encuentren' +
            ' registrados en la wiki, mientras que cualquier persona puede leer el contenido.'
        },
        {
            html: 'El <b>privado</b> solo permite leer, editar y subir archivos a aquellos que se encuentran' +
            ' registrados en la wiki.'
        }
    ]);
}

function preg4() {
    swal.mixin({
        type: 'info',
        title: 'Ventajas',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            html: '- Facilidad para crear páginas de forma rápida. <br> - Flexibilidad y libertad para' +
            ' crear contenido. <br> - Contenido comunmente vigente.'
        },
        {
            html: ' - Facilita la revisión del trabajo antes de ser publicado. <br> - Incentiva a los ' +
            'estudiantes a hacer uso de la tecnología para aprender y trabajar en equipo. <br> - El ' +
            'conocimiento es compartido y puede ser expresado en diferentes idiomas. [1]'
        }
    ]);
}

function preg5() {
    swal.mixin({
        type: 'info',
        title: 'Desventajas',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3']
    }).queue([
        {
            text: 'Al ser un servicio disponible gratuitamente, cualquier usuario de la red puede' +
            'modificar o crear contenido, lo que reduce la veracidad de la información allí encontrada.'
        },
        {
            text: 'En algunos casos el contenido allí expuesto infringe los derechos de autor al no ser' +
            ' citado o referenciado correctamente.'
        },
        {
            text: 'Al tener diferentes autores, el estilo de redacción puede variar y la ortografía puede' +
            ' verse afectada. [1]'
        }
    ]);
}

function preg6(){
    swal.mixin({
        type: 'info',
        title: 'Ejemplo',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240,255,255)',
        progressSteps: ['1','2']
    }).queue([
        {
            text: 'Wikipedia, la Enciclopedia Libre'
        },
        {
            text: 'Wikispaces.com (Portal Web para la creación de wikis)[2]'
        }
    ]);
}