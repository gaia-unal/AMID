var parte1 = document.getElementById('parte1');
var parte2 = document.getElementById('parte2');
var parte3 = document.getElementById('parte3');
var parte4 = document.getElementById('parte4');
var btnS = document.getElementById('btnSig');

var cont = 0;

function sig(){
    window.scroll(0,0);
    cont++;
    switch (cont){
        case 1:
            parte1.style.display = (parte1.style.display == 'none')?'inline':'none';
            parte2.style.display = (parte2.style.display == 'none')?'inline':'block';
            break;
        case 2:
            parte2.style.display = (parte2.style.display == 'none')?'inline':'none';
            parte3.style.display = (parte3.style.display == 'none')?'inline':'block';
            break;
        case 3:
            parte3.style.display = (parte3.style.display == 'none')?'inline':'none';
            parte4.style.display = (parte4.style.display == 'none')?'inline':'block';

    }
}