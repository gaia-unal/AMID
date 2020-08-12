function opc1() {
    swal.mixin({
        type: 'info',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4', '5']
    }).queue([
        {
            title: 'Comunicación, AMI y aprendizaje',
            text: 'Este Curriculum sobre alfabetización mediática e informacional (AMI) debería ser visto dentro del amplio ' +
                'campo de la comunicación, de acuerdo a lo que establecen las nuevas teorías de la enseñanza. La enseñanza ' +
                'y el aprendizaje están íntimamente ligados y son parte integral del proceso de comunicación. De hecho, ' +
                'ninguna de las dos puede ser eficaz sin la otra (Ndongko, 1985). '
        },
        {
            text: 'Los profesores y estudiantes, consciente o inconscientemente, aplican los elementos de un proceso de ' +
                'comunicación en el aula, a veces básico y a veces complejo. La enseñanza y el aprendizaje se convierten en ' +
                'un reto mayor cuando se integran las nuevas tecnologías, como los medios de la comunicación de masas ' +
                '(radio, televisión, periódicos y bibliotecas) al aula. '
        },
        {
            text: 'Que los profesores y los estudiantes adquieran las destrezas AMI abre oportunidades para enriquecer ' +
                'el medio ambiente educativo y promover un proceso de enseñanza-aprendizaje que sea más dinámico. La ' +
                'interacción de los profesores y los estudiantes con los medios y otros proveedores de información puede ' +
                'ayudar a crear espacios de aprendizaje que sean democráticos y pluralistas, y que también contribuyan a la ' +
                'creación del conocimiento.'
        },
        {
            text: 'Ser consientes de estas fuerzas dinámicas que se desarrollan en las clases supone un enfoque en los ' +
                'procesos cognitivos y meta cognitivos identificados en las teorías de enseñanza.'
        },
        {
            text: 'Este módulo, el último en la sección obligatoria del Curriculum, sirve como la piedra culminante para ' +
                'abarcar el contenido que se cubre en los módulos anteriores. Explora los vínculos entre la comunicación y ' +
                'el aprendizaje (incluyendo las teorías de aprendizaje), y sugiere como AMI puede mejorar esta relación. ' +
                'Finaliza con una discusión sobre cómo administrar el cambio a fin de fomentar un medio ambiente propicio ' +
                'para AMI.'
        }
    ]);
}