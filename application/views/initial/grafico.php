<script type="text/javascript">

var dataEval=  <?php echo json_encode($evaluacion->result()); ?>;
var eval=[];
var desc=[];
var mod,und,men,dese,parte;

for (let i in dataEval) {
    eval.push( parseFloat(dataEval[i]['notaevaluacion']) );
    mod=dataEval[i]['id_unidad'][1];
    und=dataEval[i]['id_unidad'][3];
    dese=dataEval[i]['desempeñounidad']

    if(mod=='7'){
        parte=dataEval[i]['id_unidad'][4];
        men="<b>Módulo:</b> "+mod+"<br><b>Unidad:</b> "+und+" Parte "+parte+"<br><b>Desempeño:</b> "+dese;
    }else{
        men="<b>Módulo:</b> "+mod+"<br><b>Unidad:</b> "+und+"<br><b>Desempeño:</b> "+dese;
    }
    desc.push( men );
}

Highcharts.chart('container', {

    tooltip: {
        formatter: function () {
            return desc[this.x-1]+'<br><b>Nota:</b> '+this.y;
        }
    },

    title: {
        text: 'Calificaciones de las evaluaciones'
    },

    subtitle: {
        text: 'AMID'
    },

    yAxis: {
        title: {
            text: 'Calificación'
        }
    },

    xAxis: {
        // accessibility: {
        //     rangeDescription: 'Range: 1 to 12'
        // }
        title: {
            text: 'Evaluación'
        },
        tickInterval: 1
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
        }
    },

    series: [{
        name: 'Calificación',
        data: eval
    }
    // , {
    //     name: 'Manufacturing',
    //     data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    // }, {
    //     name: 'Sales & Distribution',
    //     data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    // }, {
    //     name: 'Project Development',
    //     data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    // }, {
    //     name: 'Other',
    //     data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    // }
    ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
</script>