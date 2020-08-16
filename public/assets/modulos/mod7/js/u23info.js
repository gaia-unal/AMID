var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var img3 = document.getElementById('img3');
var img4 = document.getElementById('img4');
var img5 = document.getElementById('img5');
var img6 = document.getElementById('img6');
var img7 = document.getElementById('img7');
var img8 = document.getElementById('img8');
var img9 = document.getElementById('img9');
var btn = document.getElementById('btnAdelante');
var btnF = document.getElementById('btnAtras');
var txt = document.getElementById('texto');
var con = 0;

function art() {
    swal.mixin({
        type: 'info',
        confirmButtonText: 'Siguiente &rarr;',
        backdrop: 'rgb(240, 255, 255)',
        progressSteps: ['1', '2', '3', '4', '5', '6']
    }).queue([
        {
            text: 'La información disponible en Internet se ha incrementado sustancialmente durante las ' +
                'últimas décadas, siendo la salud una de las temáticas de mayor demanda de búsqueda, es por ' +
                'ello que en la labor del profesional de la salud y, especialmente, en la práctica diaria del ' +
                'médico, existe la necesidad de mantenerse informado sobre las nuevas evidencias científicas, ' +
                'como parte de su responsabilidad profesional con la salud de la población, ante un cuadro ' +
                'clínico complejo, una charla o discusión académica, o en el mismo proceso de atención de salud ' +
                'de un paciente, donde se plantean muchas interrogantes.'
        },
        {
            text: 'Hay preguntas como: ¿qué nuevas terapias o tratamientos hay para tal o cual ' +
                'enfermedad?, ¿dónde buscar la información más actualizada?, ¿es confiable lo que acabo de ' +
                'encontrar?, ¿puedo extrapolar o aplicar esa información con mis pacientes o el caso ' +
                'clínico específico que motivó mi búsqueda?'
        },
        {
            text: 'Es por esto que es preciso acudir a fuentes o recursos de información en medicina y ' +
                'salud, que cuenten con estándares de calidad y permitan al médico acceder datos científicos ' +
                'serios y válidos para tomar decisiones más acertadas en la práctica clínica diaria.'
        },
        {
            text: 'Se acude comúnmente a buscadores generales, como Google, Yahoo, Altavista, entre los ' +
                'cuales definitivamente el de mayor demanda es Google (www.google. com), pero la información ' +
                'disponible allí puede proceder de fuentes no verificables, por lo que es importante identificar ' +
                'las páginas más indicadas.'
        },
        {
            text: 'Por esa razón, Google implementó desde hace algún tiempo Google Scholar (Google Académico), ' +
                'orientado a la búsqueda de referencias científicas (scholar.google.es), con resultados válidos en ' +
                'la etapa inicial de búsqueda, los cuales se presentan por orden de relevancia y contienen información ' +
                'de revistas científicas, incluyendo fuente, año de publicación, autores, número de veces que han ' +
                'sido citadas o referenciadas, artículos relacionados y otras versiones de la publicación; el contenido ' +
                'puede encontrarse en formato php, PDF, DOC u otros.'
        },
        {
            text: 'Es recomendable utilizar la opción de búsqueda avanzada, ya que permite hacer más fina la búsqueda, ' +
                'facilitando la optimización de tiempo y el acceso a información relevante.'
        }
    ]);
}

function avanzar() {
    if (con < 0) {
        con = 0;
    }
    con++;
    switch (con) {
        case 1: {
            // btnF.style.display = (btnF.style.display == "none") ? "block-inline" : "none";
            btnF.style.display = "inline-block";
            img1.style.display = "none";
            img2.style.display = "block";
            break;
        }
        case 2: {
            img2.style.display = "none";
            img3.style.display = "block";
            break;
        }
        case 3: {
            img3.style.display = "none";
            img4.style.display = "block";
            break;
        }
        case 4: {
            img4.style.display = "none";
            img5.style.display = "block";
            break;
        }
        case 5: {
            img5.style.display = "none";
            img6.style.display = "block";
            break;
        }
        case 6: {
            img6.style.display = "none";
            img7.style.display = "block";
            break;
        }
        case 7: {
            img7.style.display = "none";
            img8.style.display = "block";
            btn.style.display = "none";
            break;
        }
    }
}
function volver() {
    if (con > 8) {
        con = 8;
    }
    

    switch (con) {
        case 1: {
            btnF.style.display = "none";
            img1.style.display =   "block";
            img2.style.display =  "none";
            break;
        }
        case 2: {
            img2.style.display =  "block";
            img3.style.display = "none";
            break;
        }
        case 3: {
            img3.style.display = "block";
            img4.style.display = "none";
            break;
        }
        case 4: {
            img4.style.display = "block";
            img5.style.display = "none";
            break;
        }
        case 5: {
            img5.style.display = "block";
            img6.style.display = "none";
            break;
        }
        case 6: {
            img6.style.display = "block";
            img7.style.display = "none";
            break;
        }
        case 7: {
            btn.style.display = "inline-block";
            img7.style.display = "block";
            img8.style.display = "none";
            break;
        }
    }
    con--;
}
function remove() {
    txt.style.display = (txt.style.display == "none") ? "inline" : "none";
}