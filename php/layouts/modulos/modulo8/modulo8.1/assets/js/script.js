var parte1 = document.getElementById('parte1');
var parte2 = document.getElementById('parte2');
var parte3 = document.getElementById('parte3');
var btn = document.getElementById('btnS');
var cont = 0;
function sig() {
    cont++;
    switch (cont) {
        case 1:
            parte1.style.display = (parte1.style.display == 'none') ? 'inline' : 'none';
            parte2.style.display = (parte2.style.display == 'none') ? 'inline' : 'block';
            break;
        case 2:
            parte2.style.display = (parte2.style.display == 'none') ? 'inline' : 'none';
            parte3.style.display = (parte3.style.display == 'none') ? 'inline' : 'block';
            btn.style.display = (btn.style.display == 'none') ? 'inline' : 'none';
            break;
    }
}