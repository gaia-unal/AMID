var etapa1 = document.getElementById('etapa1');
var etapa2 = document.getElementById('etapa2');
var etapa3 = document.getElementById('etapa3');
var etapa4 = document.getElementById('etapa4');
var etapa5 = document.getElementById('etapa5');
var etapa6 = document.getElementById('etapa6');
var btnS = document.getElementById('sigEt');
var btnA = document.getElementById('antEt');
var cont = 0;

function sig() {
    cont++;
    switch (cont) {
        case 1:
            etapa1.style.display = (etapa1.style.display == 'none') ? 'inline' : 'none';
            etapa2.style.display = (etapa2.style.display == 'none') ? 'inline' : 'block';
            btnA.style.display = (btnA.style.display == 'none') ? 'inline' : 'block';
            break;
        case 2:
            etapa2.style.display = (etapa2.style.display == 'none') ? 'inline' : 'none';
            etapa3.style.display = (etapa3.style.display == 'none') ? 'inline' : 'block';
            break;
        case 3:
            etapa3.style.display = (etapa3.style.display == 'none') ? 'inline' : 'none';
            etapa4.style.display = (etapa4.style.display == 'none') ? 'inline' : 'block';
            break;
        case 4:
            etapa4.style.display = (etapa4.style.display == 'none') ? 'inline' : 'none';
            etapa5.style.display = (etapa5.style.display == 'none') ? 'inline' : 'block';
            break;
        case 5:
            etapa5.style.display = (etapa5.style.display == 'none') ? 'inline' : 'none';
            etapa6.style.display = (etapa6.style.display == 'none') ? 'inline' : 'block';
            btnS.style.display = (btnS.style.display == 'none') ? 'inline' : 'none';
            break;
    }
}

function ant() {
    switch (cont) {
        case 1:
            etapa1.style.display = (etapa1.style.display == 'none') ? 'inline' : 'block';
            etapa2.style.display = (etapa2.style.display == 'none') ? 'inline' : 'none';
            btnA.style.display = (btnA.style.display == 'none') ? 'inline' : 'none';
            break;
        case 2:
            etapa2.style.display = (etapa2.style.display == 'none') ? 'inline' : 'block';
            etapa3.style.display = (etapa3.style.display == 'none') ? 'inline' : 'none';
            break;
        case 3:
            etapa3.style.display = (etapa3.style.display == 'none') ? 'inline' : 'block';
            etapa4.style.display = (etapa4.style.display == 'none') ? 'inline' : 'none';
            break;
        case 4:
            etapa4.style.display = (etapa4.style.display == 'none') ? 'inline' : 'block';
            etapa5.style.display = (etapa5.style.display == 'none') ? 'inline' : 'none';
            break;
        case 5:
            etapa5.style.display = (etapa5.style.display == 'none') ? 'inline' : 'block';
            etapa6.style.display = (etapa6.style.display == 'none') ? 'inline' : 'none';
            btnS.style.display = (btnS.style.display == 'none') ? 'inline' : 'block';
            break;
    }
    cont--;
}