function preg1() {
    swal.mixin({
        type: 'info',
        title: 'Tolerancia',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: '“Necesidad de aumentar la duración, la intensidad y/o la frecuencia de la ' +
            'conducta objeto de adicción […] para obtener el efecto deseado, ya que se produce una ' +
            'disminución del efecto placentero de la conducta si se mantiene la misma intensidad, ' +
            'frecuencia y/o duración” [1]'
        },
        {
            imageUrl: 'assets/img/tolerancia.png'
        }
    ]);
}

function preg2() {
    swal.mixin({
        type: 'info',
        title: 'Pérdida de Control',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: 'En conjunto con la dependencia que se genera, conforman las principales ' +
            'características de adicción que pueden presentar los niños. “[…] cuando se desarrolla la ' +
            'adicción, la persona necesita llevarla a cabo para aliviar el malestar que le provoca no ' +
            'hacerlo” [1]'
        },
        {
            imageUrl: 'assets/img/perdidaControl.png'
        }
    ]);
}

function preg3() {
    swal({
        type: 'info',
        title: 'Ocultación',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        text: '“es muy difícil que un adicto a las TIC reconozca que lo es. Esta negación del ' +
        'problema por parte del joven se mantiene a pesar de las evidencias: fracaso escolar, ' +
        'aislamiento social, mentiras reiteradas y otras, que en numerosas ocasiones complican la ' +
        'detección del problema e intervención de los padres y profesionales” [1]'
    });
}

function preg4() {
    swal({
        type: 'info',
        title: 'Abandono de actividades',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        text: '“A medida que va pasando el tiempo, la conducta objeto de adicción va ocupando ' +
        'más tiempo en la vida de la persona, de manera que empiezan a verse perjudicadas otras ' +
        'actividades, tanto obligaciones como aficiones”; de esta manera se comienzan a desplazar ' +
        'intereses generando problemas en las diferentes áreas de la vida del joven [1]'
    });
}

function preg5() {
    swal.mixin({
        type: 'info',
        title: 'Cambios en el comportamiento',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: '“Si el problema se prolonga en el tiempo aparecerán cambios emocionales, cambios ' +
            'en los hábitos y en las rutinas de la vida diaria, cambios físicos, etc., que persistirán ' +
            'mientras se mantenga la conducta adictiva” [1]'
        },
        {
            imageUrl: 'assets/img/cambiosComportamiento.png'
        }
    ]);
}

function preg6() {
    swal.mixin({
        type: 'info',
        title: 'Síndrome de Abstinencia',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2']
    }).queue([
        {
            text: '“Como ocurre con las adicciones a sustancias, las personas adictas a una ' +
            'determinada conducta, padeciendo profundo malestar emocional (estado de ánimo disfórico, ' +
            'insomnio, irritabilidad, inquietud psicomotriz, etc.)” [1]'
        },
        {
            imageUrl: 'assets/img/sindromeAbstinencia.png'
        }
    ]);
}