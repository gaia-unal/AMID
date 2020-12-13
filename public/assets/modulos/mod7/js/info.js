function opc1() {
    swal.mixin({
        type: 'info',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4']
    }).queue([{
            title: 'Oportunidades y retos en Internet',
            text: ' Según UNESCO [1]: Es esencial que los ciudadanos de todos los grupos de edad tomen parte en la sociedad' +
                ' de información. Internet provee grandes oportunidades para mejorar la vida de todos los ' +
                'usuarios. Tiene efectos positivos en la educación, en el mundo del trabajo y en el crecimiento' +
                ' económico. Con la fácil digitalización, el almacenamiento de la información, y el acceso a través' +
                ' de un amplio rango de dispositivos, Internet ha incrementado de una manera dramática la información' +
                ' y los recursos disponibles para las personas.[1]'
        },
        {
            text: 'Los niños y jóvenes a menudo tienen un gran conocimiento de sus aplicaciones y pueden' +
                ' beneficiarse tremendamente de su uso, pero también los niños son vulnerables. Hay riesgos' +
                ' y amenazas acompañan a este desarrollo positivo, a menudo en paralelo con aquellos que ya' +
                ' existen en el mundo fuera de línea. Tomar medidas para proteger a los menores podría' +
                ' ayudar a enfrentar el problema.'
        },
        {
            text: 'Sin embargo, a pesar de que estas medidas puedan ser útiles, el depender totalmente' +
                ' de estrategias de protección no ha dado muchos resultados para garantizar que los jóvenes' +
                ' utilicen Internet de una manera responsable.'
        },
        {
            text: 'La mejor forma de ayudar a los jóvenes a que se mantengan lejos del peligro es' +
                ' empoderarlos y educarlos sobre cómo evitar o administrar los riesgos relacionados con el uso' +
                ' de Internet. Las tecnologías pueden jugar un papel útil y de apoyo en estas áreas,' +
                ' especialmente cuando hay niños y jóvenes involucrados. [1]'
        }
    ]);
}