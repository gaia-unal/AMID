function opc1() {
    swal.mixin({
        type: 'info',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4', '5', '6', '7']
    }).queue([
        {
            title: 'Alfabetización informacional y destrezas bibliotecarias',
            text: 'El objetivo de este módulo es enseñar que hay otras habilidades importantes de información y ' +
                'que también son componentes vitales de AMI.'
        },
        {
            text: 'Este módulo enfatiza los bloques de construcción que contribuyen a la alfabetización informacional. ' +
                'Muchos cursos se concentran en la entrega de conocimiento en lugar de aprender a aprender. Sin ' +
                'embargo, el creciente énfasis en el valor de AMI en la educación y en una sociedad más amplia ' +
                'subraya la importancia de que los usuarios sean aprendices entrenados.'
        },
        {
            text: 'Los profesores tienen que adquirir por sí mismos y desarrollar en sus estudiantes un conjunto ' +
                'de competencias (conocimiento, habilidades y aptitudes) para obtener, entender, adaptar, generar, ' +
                'almacenar, y presentar la información para el análisis de problemas y la toma de decisiones.'
        },
        {
            text: 'Un profesor alfabetizado en medios e información es capaz de entender la información y los ' +
                'mensajes de los medios de distintas fuentes de información y es capaz de evaluar y utilizar este ' +
                'entendimiento apropiadamente para resolver los problemas. Él / ella también ha adquirido habilidades ' +
                'básicas de bibliotecología y es capaz de maximizar el uso de las fuentes documentales para aprender y ' +
                'compartir la información.'
        },
        {
            text: 'El profesor que es alfabetizado en medios e información entiende y aprecia las funciones de los ' +
                'medios y los otros proveedores de información en la sociedad, tales como bibliotecas, museos, archivos, ' +
                'Internet y las instituciones educativas y de investigación que trabajan en este campo.'
        },
        {
            text: 'Este modulo se enfoca en desarrollar el entendimiento y las destrezas de una alfabetización ' +
                'literaria, destrezas de bibliotecología y alfabetización digital para la resolución de problemas ' +
                'y la toma de decisiones en contextos educativos.'
        },
        {
            text: 'Trata de habilitar a los profesores para que comprendan los conceptos de información, ' +
                'alfabetización informacional y tecnología digital y la relación entre ellos para incrementar ' +
                'sus habilidades al acceder y utilizar una amplia gama de recursos de información que están ' +
                'disponibles en el mundo de hoy. Adquirir estas destrezas dará una oportunidad para un aprendizaje ' +
                'a lo largo de toda la vida a través del acceso a la información, por lo tanto esto asegura que los ' +
                'profesores tengan una participación continua en una vida intelectual activa.'
        }
    ]);
}