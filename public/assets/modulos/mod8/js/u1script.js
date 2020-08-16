var parte1 = document.getElementById('parte1');
var parte2 = document.getElementById('parte2');
var parte3 = document.getElementById('parte3');
var btn = document.getElementById('btnAdelante');
var btn2 = document.getElementById('btnAtras');
var cont = 0;

function sig() {
    cont++;
    console.log(cont);
    switch (cont) {
        case 1:
            parte1.style.display =  'none';
            parte2.style.display = 'block';
            btn2.style.display = 'inline-block';
            break;
        case 2:
            parte2.style.display = 'none';
            parte3.style.display = 'block';
            btn.style.display = 'none';
            break;
    }
}

function atr() {
    cont--;
    console.log(cont);
    switch (cont) {
        case 1:
            parte3.style.display =  'none';
            parte2.style.display = 'inline-block';
            break;
        case 0:
            parte2.style.display = 'none';
            parte1.style.display = 'block';
            btn2.style.display = 'none';
            break;
    }
    btn.style.display = 'inline-block';
}